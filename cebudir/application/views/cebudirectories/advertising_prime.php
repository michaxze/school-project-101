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
  <div id="cd-bannerbg"></div>
  <div id="cd-bannerfg"></div>
  <div class="clear"></div>
</div>
<div class="shadow"></div>

<div id="search_bar2">
	<ul>
    	<li class="search_image left" style="width: 225px;">&nbsp;</li>
    	<li class="search_w left"><b>What</b> <br/><?php echo form::input('q','',' class="searchF" style="width: 275px; font-size: 22px; padding: 3px;"') . "&nbsp;"; ?><br />
        (e.g. hotels, restaurants, spa)
        </li>
        <li class="search_w left"><b>Where</b> <br /><?php echo form::input('q','',' class="searchF" style="width: 275px; font-size: 22px; padding: 3px;"') . "&nbsp;"; ?><br />
        (e.g. Ayala Mall, Mandaue, Lapu-Lapu)
        </li>
        <li class="left"><br /><?php echo form::submit('submit', 'search',' class="searchB" style="font-size: 22px; padding: 3px;"'); ?></li>
    </ul>
    <div class="clear"></div>
</div>