<script>
$(document).ready(function(e) {
    $(".popup-content .popup-link").click(function(e){
			var $newSource = $(this).attr("href");
			var $head = $(this).data("title");
			$(".popup-content").load($newSource);
			$(".popup-heading").html($head+'<a class="close-popup">&#xe02c;</a>');
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
    <td align="right" valign="bottom"><a href="notes/example.php" data-title="Lorem ipsum dolor sit amet - note 17" class="popup-link">17</a></td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>4 365 448</strong></td>
    <td align="right" valign="bottom">4 365 448</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>4 365 448</strong></td>
    <td align="right" valign="bottom">4 365 448</td>
  </tr>
  <tr>
    <td valign="bottom">Cost of sales</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>3 145 531</strong></td>
    <td align="right" valign="bottom">3 145 531</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>(3 145 531)</strong></td>
    <td align="right" valign="bottom">3 145 531</td>
  </tr>
  <tr>
    <td valign="bottom">Gross margin</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>1 219 917</strong></td>
    <td align="right" valign="bottom">(1 219 917)</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>1 219 917</strong></td>
    <td align="right" valign="bottom">1 219 917</td>
  </tr>
  <tr>
    <td valign="bottom">Administration, selling and distribution expenses</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>1 051 036</strong></td>
    <td align="right" valign="bottom">1 051 036</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>(1 051 036)</strong></td>
    <td align="right" valign="bottom">1 051 036</td>
  </tr>
  <tr>
    <td valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom"><strong>EBITDA</strong> before restructuring costs</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>168 881</strong></td>
    <td align="right" valign="bottom">168 881</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>168 881</strong></td>
    <td align="right" valign="bottom">(168 881)</td>
  </tr>
  <tr>
    <td valign="bottom">Net loss on disposal of business components</td>
    <td align="right" valign="bottom"><a href="notes/example.php" data-title="Lorem ipsum dolor sit amet - note 18" class="popup-link">18</a></td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom">-</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom">-</td>
  </tr>
  <tr>
    <td valign="bottom">Fair value adjustment on available-for-sale assets</td>
    <td align="right" valign="bottom"><a href="notes/example.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom">-</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom">-</td>
  </tr>
  <tr>
    <td valign="bottom">Restructuring costs</td>
    <td align="right" valign="bottom"><a href="notes/example.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom">-</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom">-</td>
  </tr>
  <tr>
    <td valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom" class="upp"><strong>ebitda</strong></td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>(168 881)</strong></td>
    <td align="right" valign="bottom">168 881</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>168 881</strong></td>
    <td align="right" valign="bottom">168 881</td>
  </tr>
  <tr>
    <td valign="bottom">Depreciation</td>
    <td align="right" valign="bottom"><a href="notes/example.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>34 651</strong></td>
    <td align="right" valign="bottom">(34 651)</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>34 651</strong></td>
    <td align="right" valign="bottom">34 651</td>
  </tr>
  <tr>
    <td valign="bottom">Amortisation of intangibles</td>
    <td align="right" valign="bottom"><a href="notes/example.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>1 280</strong></td>
    <td align="right" valign="bottom">1 280</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>1 280</strong></td>
    <td align="right" valign="bottom">1 280</td>
  </tr>
  <tr>
    <td valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB">&nbsp;</td>
    <td align="right" valign="bottom">&nbsp;</td>
  </tr>
  <tr>
    <td valign="bottom"><strong>Operating profit/(loss) before investment income (EBIT)</strong></td>
    <td align="right" valign="bottom"><a href="notes/example.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">18</a></td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>5 617</strong></td>
    <td align="right" valign="bottom">5 617</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>5 617</strong></td>
    <td align="right" valign="bottom">5 617</td>
  </tr>
  <tr>
    <td valign="bottom">Investment income</td>
    <td align="right" valign="bottom"><a href="notes/example.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">19</a></td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>132 950</strong></td>
    <td align="right" valign="bottom">132 950</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>132 950</strong></td>
    <td align="right" valign="bottom">132 950</td>
  </tr>
  <tr>
    <td valign="bottom"><strong>Operating profit before finance charges</strong></td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>138 567</strong></td>
    <td align="right" valign="bottom">138 567</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>(138 567)</strong></td>
    <td align="right" valign="bottom">138 567</td>
  </tr>
  <tr>
    <td valign="bottom">Finance charges</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>14 754</strong></td>
    <td align="right" valign="bottom">(14 754)</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>14 754</strong></td>
    <td align="right" valign="bottom">14 754</td>
  </tr>
  <tr>
    <td class="indent" valign="bottom"><strong>Profit/(loss) before taxation</strong></td>
    <td align="right" valign="bottom"><a href="notes/example.php" data-title="Lorem ipsum dolor sit amet" class="popup-link">22</a></td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>(123 813)</strong></td>
    <td align="right" valign="bottom">123 813</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>123 813</strong></td>
    <td align="right" valign="bottom">123 813</td>
  </tr>
  <tr>
    <td class="indent" valign="bottom">Taxation</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>25 096</strong></td>
    <td align="right" valign="bottom">25 096</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>25 096</strong></td>
    <td align="right" valign="bottom">(25 096)</td>
  </tr>
  <tr>
    <td class="indent" valign="bottom"><strong>Profit/(loss) for the year</strong></td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>98 717</strong></td>
    <td align="right" valign="bottom">(98 717)</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>98 717</strong></td>
    <td align="right" valign="bottom">98 717</td>
  </tr>
  <tr class="rule-btm-1">
    <td class="indent" valign="bottom">Other comprehensive income for the year</td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom">-</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>-</strong></td>
    <td align="right" valign="bottom">-</td>
  </tr>
  <tr class="rule-btm-2">
    <td valign="bottom"><strong>Total comprehensive income/(loss) for the year</strong></td>
    <td align="right" valign="bottom">&nbsp;</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>98 717</strong></td>
    <td align="right" valign="bottom">98 717</td>
    <td align="right" valign="bottom" bgcolor="#CCD8DB"><strong>98 717</strong></td>
    <td align="right" valign="bottom">98 717</td>
  </tr>
</table>
