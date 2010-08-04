<?php defined('SYSPATH') OR die('No direct access allowed.'); 
if ($_SERVER['DOCUMENT_ROOT'] == "/Users/michaxze/Sites") {
  $ads_site = "http://localhost:3002";
}else{
  $ads_site = "http://ads.cebudirectories.com";
}
$ads = array();
$ads[] = array("3", "numbers-emergency.jpg");
$ads[] = array("4", "banner.jpg");
//$ads[] = array("5", "banner3.jpg");
//$ads[] = array("8", "8-nude-sandals.jpg");
$ads[] = array("10", "10-mandaue-run-for-life2.jpg");
$ads[] = array("11", "11-one-cebu-business-summit.jpg");

shuffle($ads);
?>

<div id="cd-banner">
  <div class="slideshow"  >
  <?php
  foreach ($ads as $ad) {
    ?>
    <a href="<?php echo $ads_site;?>/advertisements/view/<?php echo $ad[0];?>">
    <img src="<?php echo url::base()?>images/ads/<?php echo $ad[1];?>" />
    </a>
    <?php } ?>
  </div>
</div>
<div class="shadow"></div>
