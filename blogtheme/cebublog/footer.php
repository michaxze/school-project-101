<?php
	$urls = array(array('label' => 'Contact Us', 'url' => 'http://cebudirectories.com/contactus'),
				  array('label' => 'Advertise', 'url' => 'http://cebudirectories.com/advertise'),
				  array('label' => 'Services', 'url' => 'http://cebudirectories.com/services'),
				  array('label' => 'Blogs', 'url' => 'http://blogs.cebudirectories.com'),
				  array('label' => 'Events', 'url' => 'http://cebudirectories.com/events'),
				  array('label' => 'Listings', 'url' => 'http://cebudirectories.com/listings'),
				  array('label' => 'About Us', 'url' => 'http://cebudirectories.com/aboutus'),
				  array('label' => 'Home', 'url' => 'http://cebudirectories.com'));
						
?>  
   <div id="cd-footer">
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
        <p class="copyright">
        Copyright &copy; 2007-2009 Cebu Directories. <br />All rights reserved. <a href="<?php echo get_bloginfo('url'); ?>privacy-policy" title="Privacy Policy">Privacy Policy</a> | <a href="<?php echo get_bloginfo('url'); ?>terms-of-use" title="Terms of Use">Terms of Use</a>
        </p>
    </div>
    <!-- End of Footer -->
    
</div>
<div class="clear"> </div>
<?php wp_footer(); ?>
</body>
</html>
