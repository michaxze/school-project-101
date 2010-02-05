<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="Distribution" content="Global" />
	<meta name="verify-v1" content="HPFKZjNDMP2X6Vq/j7socoRtksdjGX1tyvzKPo4Qbn0=" />
	<meta name="Robots" content="index,follow" />
	<meta name="Description" content="Cebu Directories is an online cebu directory listing that caters to the needs of Cebu businesses, organizations, and other entities who are seeking to publish information about themselves, their products, or their services on the World Wide Web." />
	<meta name="Keywords" content="cebu directory, cebu directories, cebu business directory, directory" />

	<link rel="stylesheet" href="<?php echo url::base(FALSE) ?>css/main.css" type="text/css" media="screen"/>
    <link rel="shortcut icon" href="<?php echo url::base(FALSE) ?>cebudirectories.png">

	<script type="text/javascript" src="<?php echo url::base(FALSE) ?>javascript/jquery.js"></script>
	<script type="text/javascript" src="<?php echo url::base(FALSE) ?>javascript/jquery.easing.js"></script>
	<script type="text/javascript" src="<?php echo url::base(FALSE) ?>javascript/jquery.accordion.js"></script>

	<title><?php echo $title; ?></title>

	<script type="text/javascript">
	jQuery().ready(function(){
		
		// second simple accordion with special markup
		jQuery('#categorymenu').accordion({
			active: true,
			header: '.head',
			navigation: true,
			event: 'mouseover',
			autoheight: false,
			animated: 'bounceslide'
		});
		
	});
	</script>

</head>
<body id="cd-body">

<div id="cd-wrapper">

	<div id="cd-header">
    	<div id="logo" style="cursor:pointer" onclick="location.href='<?php echo url::base(); ?>'"><a href="<?php echo url::base(); ?>" title="Home"><div id="home"></div></a></div>
    
        <div id="cd-navigation">
        	<ul>
            	<li id="listing<?php echo (isset($menu) && $menu == 'listing') ? "-sel" : ""; ?>"><a href="<?php echo url::base(); ?>listings"></a></li>
                <li id="event"<?php echo (isset($menu) && $menu == 'event') ? "-sel" : ""; ?>><a href="<?php echo url::base(); ?>events"></a></li>
                <li id="blog"><a href="<?php echo url::base(); ?>blog"></a></li>
                <li id="services<?php echo (isset($menu) && $menu == 'services') ? "-sel" : ""; ?>"><a href="<?php echo url::base(); ?>services"></a></li>
                <li id="advertise<?php echo (isset($menu) && $menu == 'advertise') ? "-sel" : ""; ?>"><a href="<?php echo url::base(); ?>advertise"></a></li>
                <li id="contact<?php echo (isset($menu) && $menu == 'contact') ? "-sel" : ""; ?>"><a href="<?php echo url::base(); ?>contactus"></a></li>
            </ul>
        </div>
        
        <div id="cd-banner"><img src="<?php echo url::base(); ?>images/banners/banner2.jpg" /></div>
        <div class="shadow"></div>
    </div>
