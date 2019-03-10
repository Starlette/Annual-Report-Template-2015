<?php
	include('PDFMerger.php');
	$error = "";
	if(isset($_POST['createpdf'])){
		$post = $_POST;		
		$file_folder = "downloads/";
		if(extension_loaded('zip')){	
			if(isset($post['files']) and count($post['files']) > 0){	
				$zip = new ZipArchive();			
				$zip_name = "zip_".time().".zip";			
				if($zip->open($zip_name, ZIPARCHIVE::CREATE)!==TRUE){		
					$error .=  "* Sorry ZIP creation failed at this time<br/>";
				}
				foreach($post['files'] as $file){				
					$zip->addFile($file_folder.$file);			
				}
				$zip->close();
				if(file_exists($zip_name)){
					header('Content-type: application/zip');
					header('Content-Disposition: attachment; filename="'.$zip_name.'"');
					readfile($zip_name);
					unlink($zip_name);
				}
				
			}else
				$error .= "* Please select file to zip <br/>";
		}else
			$error .= "* You dont have ZIP extension<br/>";
	}
	
	if(isset($_POST['mergePdfs'])){
		$post = $_POST;		
		$file_folder = "downloads/";
		$pdf_name = "pdf_".time().".pdf";
		$pdf = new PDFMerger;
		foreach($post['files'] as $file){
			$pdf->addPDF($file_folder.$file);
		}
		$pdf->merge('download', $pdf_name);
		readfile($pdf);
	}
?>