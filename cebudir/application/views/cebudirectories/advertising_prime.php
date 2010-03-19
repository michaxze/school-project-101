<?php defined('SYSPATH') OR die('No direct access allowed.'); 

$images = array("images/banners/hostfortes-web-hosting.jpg",
				"images/banners/wheatgrass-easy.jpg");
?>

<div id="cd-banner"><img src="<?php echo url::base() . $images[rand(0, count($images)-1)]; ?>" /></div>
<div class="shadow"></div>