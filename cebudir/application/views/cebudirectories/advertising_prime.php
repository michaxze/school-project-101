<?php defined('SYSPATH') OR die('No direct access allowed.'); 
if ($_SERVER['DOCUMENT_ROOT'] == "/Users/michaxze/Sites") {
  $ads_site = "http://localhost:3002";
}else{
  $ads_site = "http://ads.cebudirectories.com";
}
$ads = array();
$ads[] = array("2", "wheatgrass-easy.jpg");
$ads[] = array("1", "hostfortes-web-hosting.jpg");
$ads[] = array("3", "numbers-emergency.jpg");
$ads[] = array("4", "banner.jpg");
$ads[] = array("5", "banner3.jpg");

shuffle($ads);
?>

<div id="cd-banner">
  <div class="slideshow"  >
  <?php
  foreach ($ads as $ad) {
    ?>
    <a href="<?php echo $ads_site;?>/advertisements/view/<?php echo $ad[0];?>">
    <img src="<?php echo url::base()?>images/banners/<?php echo $ad[1];?>" />
    </a>
    <?php } ?>
  </div>
</div>
<div class="shadow"></div>