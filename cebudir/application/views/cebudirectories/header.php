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
    <link rel="stylesheet" href="<?php echo url::base(FALSE) ?>css/ads.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo url::base(FALSE) ?>css/thickbox.css" type="text/css" media="screen"/>

    <link rel="shortcut icon" href="<?php echo url::base(FALSE) ?>cebudirectories.png">

  	<script type="text/javascript" src="<?php echo url::base(FALSE) ?>javascript/jquery.min.js"></script>
  	<script type="text/javascript" src="<?php echo url::base(FALSE) ?>javascript/jquery.easing.js"></script>
  	<script type="text/javascript" src="<?php echo url::base(FALSE) ?>javascript/jquery.accordion.js"></script>
  	<script type="text/javascript" src="<?php echo url::base(FALSE) ?>javascript/jquery.cycle.all.2.72.js"></script>

    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAA5siaJWihF_VAT8BT4vobXBStf0SYYC-7HG1ciYzoNQSEcsM8DBSWFpsuxHWROz5rLWyuPpByYFEckQ&sensor=true" type="text/javascript"></script>

	<?php
	## Append Dynamic Javascripts
	$js_texts = '';
	if(isset($scripts)) {
		foreach($scripts as $js) {
			$js_texts .= "\t" . '<script type="text/javascript" src="' . $js . '"></script>' . "\n";
		}
	}
	?>


	
    <?php echo $js_texts; ?>

	<title><?php echo $title; ?></title>

	<?php echo (isset($active_script)) ? $active_script : ''; ?>


    
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
	
  $(document).ready(function() {
      $('.slideshow').cycle({
        fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
        timeout: 8000
      });
  });
	
	</script>



</head>

<?php if (isset($address)) { ?>
<body id="cd-body" onload="initialize()" onunload="GUnload()">
<?php }else {?>
<body id="cd-body">
<?php } ?>

  <?php
    $map_address = "";
    if (isset($address)) {
      $address = strtolower($address);
      $map_address = str_replace("cebu philippines", "", $address);
  ?>
    <script type="text/javascript">
        var map = null;
        var geocoder = null;

        function initialize() {
          if (GBrowserIsCompatible()) {
            map = new GMap2(document.getElementById("map_canvas"));
            map.addControl(new GLargeMapControl());
            map.setCenter(new GLatLng(10.3455617, 123.8969328), 15);
            geocoder = new GClientGeocoder();
            showAddress("<?= $map_address . " cebu philippines " ?>");
          }
        }

        function showAddress(address) {
          geocoder.getLatLng(
            address,
            function(point) {
              if (!point) {
                //alert(address + " not found");
              } else {
                map.setCenter(point, 15);
                var marker = new GMarker(point);
                map.addOverlay(marker);
                //marker.openInfoWindowHtml(address);
              }
            }
          );
        }
    </script>
  <?php } ?>

<div id="cd-wrapper">

	<div id="cd-header">
        <div style="margin-top: 10px;">
          <h1>Cebu Directory</h1>
          <img src="<?php echo url::base(); ?>images/logo.png" alt="Cebu Directories Home Page" title="Cebu Directories" />
          
		  <?php require_once(APPPATH . '/views/cebudirectories/search.php'); ?>
        
        </div>
        
        <div id="cd-navigation">
        	<ul>
            	<li id="home"><a href="<?php echo url::base(); ?>" title="Cebu Directories Home"></a></li>
            	<li id="listing<?php echo (isset($menu) && $menu == 'listing') ? "-sel" : ""; ?>"><a href="<?php echo url::base(); ?>listings"></a></li>
                <li id="event"<?php echo (isset($menu) && $menu == 'event') ? "-sel" : ""; ?>><a href="http://blogs.cebudirectories.com/category/cebu-events/"></a></li>
                <li id="blog"><a href="http://blogs.cebudirectories.com/"></a></li>
                <li id="services<?php echo (isset($menu) && $menu == 'services') ? "-sel" : ""; ?>"><a href="<?php echo url::base(); ?>services"></a></li>
                <li id="advertise<?php echo (isset($menu) && $menu == 'advertise') ? "-sel" : ""; ?>"><a href="<?php echo url::base(); ?>advertise"></a></li>
                <li id="contact<?php echo (isset($menu) && $menu == 'contact') ? "-sel" : ""; ?>"><a href="<?php echo url::base(); ?>contactus"></a></li>
            </ul>
        </div>
        
        <?php
		if($has_banner) {
			require_once(APPPATH . '/views/cebudirectories/advertising_prime.php');
		}
		?>
    </div>

	<?php //require_once(APPPATH . '/views/cebudirectories/search.php'); ?>
