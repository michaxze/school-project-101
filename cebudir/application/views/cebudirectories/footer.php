<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
	
<?php
	$urls = array(array('label' => 'Contact Us', 'url' => url::base() . 'contactus'),
				  array('label' => 'Advertise', 'url' => url::base() . 'advertise'),
				  array('label' => 'Services', 'url' => url::base() . 'services'),
				  array('label' => 'Blogs', 'url' => 'http://blogs.cebudirectories.com'),
				  array('label' => 'Events', 'url' => url::base() . 'events'),
				  array('label' => 'Listings', 'url' => url::base() . 'listings'),
				  array('label' => 'About Us', 'url' => url::base() . 'aboutus'),
				  array('label' => 'Home', 'url' => url::base()));
						
?>
	<div id="cd-footer">
   	  <div id="cd-sitemap">
   		<ul id="sitemaps">
            	<li>
                	<span class="stitle">Home</span><br />
                    About Us<br />
                    Events<br /><br />
                    <span class="stitle">Services</span><br />
                    Listings<br />
                    Advertising<br />
                    Web Design & Development<br />
                    Domain & Web Hosting<br />
                </li>
                <li>
                	<span class="stitle">Categories</span><br />
                    <?php
					for($i=0; $i<count($categories); $i++) {
						echo $categories[$i]['cat_name'] . "<br />\n";
					}
					?>
                </li>
                <li>
                	<span class="stitle">Blogs</span><br />
                    Cebu Events<br />
                    Our Updates<br />
                    Featured Products<br />
					Featured Company<br />
					Seminars<br />
					Sports Events<br />
                </li>
                <li>
                	<span class="stitle">Connect with us!</span><br style="margin-bottom: 5px;"/>
                    <a href="#"><img src="<?php echo url::base(); ?>images/twitter.png" title="Follow Cebu Directories on Twitter!" alt="Follow us on Twitter!" /></a><br />
                    <a href="#"<img src="<?php echo url::base(); ?>images/facebook.png" title="Add Cebu Directories on Facebook!" alt="Add us on Facebook!" /></a><br />
                </li>
     			<div class="clear"></div>
          </ul>
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
        Copyright &copy; 2007-2009 Cebu Directories. <br />All rights reserved. <a href="<?php echo url::base(); ?>privacy-policy" title="Privacy Policy">Privacy Policy</a> | <a href="<?php echo url::base(); ?>terms-of-use" title="Terms of Use">Terms of Use</a>
        </p>
    </div>
    <!-- End of Footer -->

</div>
<!-- End of Wrapper -->

</body>
</html>