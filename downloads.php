<?php
  include("ui-var.php");
  include("merger/functions.php"); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Template</title>
<link type="text/css" rel="stylesheet" href="css/layout.css" />
<?php include("ui-head.php"); ?>
<script src="js/functions.js"></script>
</head>

<body>

<!--
NOTE FOR WHO EVER IS EXPORTING PDFS:

The pdf merger files are the free version. The paid version is like over R1000. Which means if they export the pdfs the normal way and try to merge the pdfs online it will give an error saying the free version doesn't support the compress method they used. To over come this make each pdf like they would usually do it then open each one up in Adobe Accrobat Pro and save pdf as optimised pdf:

In Adobe Acrobat Pro go to File->Save As->Optimised PDF-> Popup left list - Clean Up, Object Compression Options -> Change to "Compress document structure" -> OK to save"

That should stop the errors. The zipping function works no matter what.
-->

<?php 
  include("ui-header.php");
  include("ui-nav.php");
?>

<section class="heading">
  <div class="page">
    Downloads
  </div>
</section>

<section class="content">
  <div class="page">
    <ul class="breadcrumbs">
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Downloads</a></li>
    </ul>
    <h2>Click on one of the following items to download the pdf or tick the box on the right of each item to download a combined pdf and/or a zipped folder containing all the pdf’s you selected:</h2>
    <form name="zips" method="post">
    <?php if(!empty($error)) { ?>
    <p id="error"><?php echo $error; ?></p>
    <?php } ?>
    <div class="cols2 cols">
      <div class="col big">
        <ul class="downloads">
          <li>
            <a href="downloads/integrated-annual-report.pdf" target="_blank">
              FULL INTEGRATED ANNUAL REPORT
              <span class="ico-file-pdf-alt ico"></span>
              <span>3.01mb</span>
            </a>
          </li>
        </ul>
        <ul class="downloads" id="downloads">
          <li>
            <a href="downloads/overview.pdf" target="_blank">
              Overview
              <label><input name="files[]" id="file1" type="checkbox" value="overview.pdf" class="checkDwnld" /></label>
              <span class="ico-file-pdf-alt ico"></span>
              <span>647kb</span>
            </a>
          </li>
          <li>
            <a href="downloads/business_structure.pdf" target="_blank">
              Business structure
              <label><input name="files[]" id="file2" type="checkbox" value="business_structure.pdf" class="checkDwnld" /></label>
              <span class="ico-file-pdf-alt ico"></span>
              <span>281kb</span>
            </a>
          </li>
          <li>
            <a href="downloads/business_reports.pdf" target="_blank">
              Business reports
              <label><input name="files[]" id="file3" type="checkbox" value="business_reports.pdf" class="checkDwnld" /></label>
              <span class="ico-file-pdf-alt ico"></span>
              <span>700kb</span>
            </a>
          </li>
          <li>
            <a href="downloads/operational_review.pdf" target="_blank">
              Operational review
              <label><input name="files[]" id="file4" type="checkbox" value="operational_review.pdf" class="checkDwnld" /></label>
              <span class="ico-file-pdf-alt ico"></span>
              <span>578kb</span>
            </a>
          </li>
          <li>
            <a href="downloads/corporate_responsibility.pdf" target="_blank">
              Corporate responsibility
              <label><input name="files[]" id="file5" type="checkbox" value="corporate_responsibility.pdf" class="checkDwnld" /></label>
              <span class="ico-file-pdf-alt ico"></span>
              <span>568kb</span>
            </a>
          </li>
          <li>
            <a href="downloads/corporate_governance.pdf" target="_blank">
              Corporate governance
              <label><input name="files[]" id="file6" type="checkbox" value="corporate_governance.pdf" class="checkDwnld" /></label>
              <span class="ico-file-pdf-alt ico"></span>
              <span>296kb</span>
            </a>
          </li>
          <li>
            <a href="downloads/annual_financial_statement.pdf" target="_blank">
              Annual Financial Statements
              <label><input name="files[]" id="file7" type="checkbox" value="annual_financial_statement.pdf" class="checkDwnld" /></label>
              <span class="ico-file-pdf-alt ico"></span>
              <span>368kb</span>
            </a>
          </li>
          <li>
            <a href="downloads/shareholder_information.pdf" target="_blank">
              Shareholder Information
              <label><input name="files[]" id="file8" type="checkbox" value="shareholder_information.pdf" class="checkDwnld" /></label>
              <span class="ico-file-pdf-alt ico"></span>
              <span>107kb</span>
            </a>
          </li>
          <li>
            <a href="downloads/form_of_proxy.pdf" target="_blank">
              Form of Proxy
              <label><input name="files[]" id="file9" type="checkbox" value="form_of_proxy.pdf" class="checkDwnld" /></label>
              <span class="ico-file-pdf-alt ico"></span>
              <span>57kb</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="col sml inactive" id="showPdfsSelected">
        <h3>Selected <em>click on <strong>x</strong> to remove</em></h3>
        <p class="nopdfs">No PDF’s has been selected</p>
        <div id="dwnldsInfo"></div>
        <p><button type="submit" name="mergePdfs" class="button" class="downloadAsPdf">Download PDF</button></p>
        <p><button type="submit" name="createpdf" class="button" class="removeErrorBox">Download ZIP</button></p>
      </div>
    </div>
    </form>
  </div>
</section>

<?php
  include("ui-footer.php");
?>

</body>
</html>
