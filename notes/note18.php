<script>
$(document).ready(function(e) {
    $(".popup-content .popup-link").click(function(e){
		  var $newSource = $(this).attr("href");
		  var $head = $(this).data("title");
		  $(".popup-content").html("<p align='center'><img src='img/popup-loader.GIF' /></p>").load($newSource);
		  $(".popup-heading").html($head+'<a class="close-popup">&#xe02c;</a>');
		  $(".close-popup").click(function(){
			  $(".popup .page").css("margin-top","-100%");
			  $(".popup").fadeOut(300).delay("600", function(){
				  $(".popup").remove();
			  });
		  });
		  e.preventDefault();
	  });
});
</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tble">
  <tr>
    <td colspan="2" valign="bottom" class="brd-whte-btm-1">&nbsp;</td>
    <td colspan="2" align="center" valign="bottom" class="rule-btm-1"><strong>Group</strong></td>
    <td colspan="2" align="center" valign="bottom" class="rule-btm-1"><strong>Company</strong></td>
  </tr>
  <tr class="rule-btm-2">
    <td valign="bottom" class="rule-btm-2">&nbsp;</td>
    <td width="50" align="right" valign="bottom" class="rule-btm-2"><strong>Notes</strong></td>
    <td width="120" align="right" valign="bottom" bgcolor="#CCD8DB"><strong>2014<br>
    R'000</strong></td>
    <td width="120" align="right" valign="bottom">2013<br>
R'000</td>
    <td width="120" align="right" valign="bottom" bgcolor="#CCD8DB"><strong>2014<br>
R'000</strong></td>
    <td width="120" align="right" valign="bottom">2013<br>
R'000</td>
  </tr>
  <tr>
    <td valign="bottom"><strong>Revenue</strong></td>
    <td align="right" valign="bottom"><a href="notes/note17.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">17</a></td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>4 365 448</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">4 365 448</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>4 365 448</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">4 365 448</td>
  </tr>
  <tr>
    <td valign="bottom">Cost of sales</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>3 145 531</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">3 145 531</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>(3 145 531)</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">3 145 531</td>
  </tr>
  <tr>
    <td valign="bottom">Gross margin</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>1 219 917</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">(1 219 917)</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>1 219 917</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">1 219 917</td>
  </tr>
  <tr>
    <td valign="bottom">Administration, selling and distribution expenses</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>1 051 036</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">1 051 036</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>(1 051 036)</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">1 051 036</td>
  </tr>
  <tr>
    <td valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom"><strong>EBITDA</strong> before restructuring costs</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>168 881</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">168 881</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>168 881</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">(168 881)</td>
  </tr>
  <tr>
    <td valign="bottom">Net loss on disposal of business components</td>
    <td align="right" valign="bottom"><a href="notes/note18.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">-</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">-</td>
  </tr>
  <tr>
    <td valign="bottom">Fair value adjustment on available-for-sale assets</td>
    <td align="right" valign="bottom"><a href="notes/note18.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">-</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">-</td>
  </tr>
  <tr>
    <td valign="bottom">Restructuring costs</td>
    <td align="right" valign="bottom"><a href="notes/note18.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">-</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">-</td>
  </tr>
  <tr>
    <td valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" class="upp"><strong>ebitda</strong></td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>(168 881)</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">168 881</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>168 881</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">168 881</td>
  </tr>
  <tr>
    <td valign="bottom">Depreciation</td>
    <td align="right" valign="bottom"><a href="notes/note18.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>34 651</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">(34 651)</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>34 651</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">34 651</td>
  </tr>
  <tr>
    <td valign="bottom">Amortisation of intangibles</td>
    <td align="right" valign="bottom"><a href="notes/note18.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>1 280</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">1 280</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>1 280</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">1 280</td>
  </tr>
  <tr>
    <td valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom"><strong>Operating profit/(loss) before investment income (EBIT)</strong></td>
    <td align="right" valign="bottom"><a href="notes/note18.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>5 617</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">5 617</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>5 617</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">5 617</td>
  </tr>
  <tr>
    <td valign="bottom">Investment income</td>
    <td align="right" valign="bottom"><a href="notes/note19.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">19</a></td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>132 950</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">132 950</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>132 950</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">132 950</td>
  </tr>
  <tr>
    <td valign="bottom"><strong>Operating profit before finance charges</strong></td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>138 567</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">138 567</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>(138 567)</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">138 567</td>
  </tr>
  <tr>
    <td valign="bottom">Finance charges</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>14 754</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">(14 754)</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>14 754</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">14 754</td>
  </tr>
  <tr>
    <td class="indent" valign="bottom"><strong>Profit/(loss) before taxation</strong></td>
    <td align="right" valign="bottom"><a href="notes/note22.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">22</a></td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>(123 813)</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">123 813</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>123 813</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">123 813</td>
  </tr>
  <tr>
    <td class="indent" valign="bottom">Taxation</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>25 096</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">25 096</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>25 096</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">(25 096)</td>
  </tr>
  <tr>
    <td class="indent" valign="bottom"><strong>Profit/(loss) for the year</strong></td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>98 717</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">(98 717)</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>98 717</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">98 717</td>
  </tr>
  <tr class="rule-btm-1">
    <td class="indent" valign="bottom">Other comprehensive income for the year</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">-</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">-</td>
  </tr>
  <tr class="rule-btm-2">
    <td valign="bottom"><strong>Total comprehensive income/(loss) for the year</strong></td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>98 717</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">98 717</td>
    <td align="right" valign="bottom" nowrap="nowrap" bgcolor="#CCD8DB"><strong>98 717</strong></td>
    <td align="right" valign="bottom" nowrap="nowrap">98 717</td>
  </tr>
</table>