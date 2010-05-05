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
                    <a href="http://twitter.com/cebudirectories"><img src="<?php echo url::base(); ?>images/twitter.png" title="Follow Cebu Directories on Twitter!" alt="Follow us on Twitter!" /></a>
                    <a href="http://www.facebook.com/pages/Cebu-Directories/281222139431"><img src="<?php echo url::base(); ?>images/facebook.png" title="Add Cebu Directories on Facebook!" alt="Add us on Facebook!" /></a>
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
