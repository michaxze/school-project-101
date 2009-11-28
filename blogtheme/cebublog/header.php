<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
   	<?php $url = "http://localhost/cebudirectories/"; ?>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="shortcut icon" type="image/ico" href="<?php echo $url; ?>cebudirectories.png" />

	<!-- leave this for stats -->
	<link rel="stylesheet" href="<?php echo $url; ?>css/main.css" type="text/css" media="screen" />
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- title here -->
	<title> <?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
</head>

<body>

<div id="cd-wrapper">
	
    <div id="cd-header">
    	<div id="logo"></div>
        <div id="cd-navigation">
        	<ul>
            	<li id="listing"><a href="<?php echo $url; ?>listings"></a></li>
                <li id="event"><a href="<?php echo $url; ?>events"></a></li>
                <li id="blog-sel"><a href="<?php echo $url; ?>blog"></a></li>
                <li id="services"><a href="<?php echo $url; ?>services"></a></li>
                <li id="advertise"><a href="<?php echo $url; ?>advertise"></a></li>
                <li id="contact"><a href="<?php echo $url; ?>contactus"></a></li>
            </ul>
        </div>
        
        <div id="cd-banner"><img src="<?php echo $url; ?>images/banner.jpg" /></div>
        <div class="shadow"></div>
    </div>
    
    