<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
	
<?php
	$urls = array(array('label' => 'Contact Us', 'url' => url::base() . 'contactus'),
				  array('label' => 'Advertise', 'url' => url::base() . 'advertise'),
				  array('label' => 'Services', 'url' => url::base() . 'services'),
				  array('label' => 'Blogs', 'url' => 'http://blogs.cebudirectories.com'),
				  array('label' => 'Events', 'url' => url::base() . '#'),
				  array('label' => 'Listings', 'url' => url::base() . 'listings'),
				  array('label' => 'About Us', 'url' => url::base() . 'aboutus'),
				  array('label' => 'Home', 'url' => url::base()));
						
?>
	<div id="cd-footer">
      
   	<div id="cd-sitemap" style="padding:5px">
      		<span class="stitle">Connect with us!</span><br style="margin-bottom: 5px;"/>
            <?php 
			
			if(!isset($show_facebook_like)) {
				require_once(APPPATH . '/views/cebudirectories/facebook_likebox.php');
			}
			
			?>
            <a href="http://twitter.com/cebudirectories"><img src="<?php echo url::base(); ?>images/twitter.png" title="Follow Cebu Directories on Twitter!" alt="Follow us on Twitter!" /></a>
  			<div class="clear"></div>
	</div>
        
    <div id="logo-footer">
    	<ul id="footer-urls">
            	<?php
				foreach($urls as $u) {
					echo '<li><a href="' . $u['url'] . '" title="' . $u['label'] . '">' . $u['label'] . '</a></li>';	
				}
				?>
        </ul>
            
    </div>
    <div class="clear"></div>
    <p>
    Copyright &copy; 2007-2009 Cebu Directories Co. <br />All rights reserved. <a href="<?php echo url::base(); ?>privacy-policy" title="Privacy Policy">Privacy Policy</a> | <a href="<?php echo url::base(); ?>terms-of-use" title="Terms of Use">Terms of Use</a>
    </p>
</div>
<!-- End of Footer -->

</div>
<!-- End of Wrapper -->

</body>
</html>
<script type="text/javascript">
function bgChanger()
{
   var bgs = new Array(5);
   bgs[0] = "xpat";
   bgs[1] = "xpat2";
   bgs[2] = "xpat3";
   bgs[3] = "xpat4";
   bgs[4] = "xpat5";
   
   var adjustedHigh = (parseFloat(bgs.length) - parseFloat(0)) + 1;
   var numRand = Math.floor(Math.random()*adjustedHigh) + parseFloat(0);
   var background = 'images/background/' + bgs[numRand] + '.png';
   $("#cd-body").blur().css('background-image', 'url(' + background + ')');
}

setInterval("bgChanger()", 15000);
</script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-2373151-2");
pageTracker._initData();
pageTracker._trackPageview();
</script>