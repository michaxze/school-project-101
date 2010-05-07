<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once(APPPATH . 'views/cebudirectories/header.php'); ?>    

    <div id="cd-content">
    	<div id="cd-categories">
    		<?php require_once(APPPATH . '/views/cebudirectories/menu_categories.php'); ?>
        </div>
        
        <div id="cd-listing">
        	<?php 
			// Shows the default Listing page
			if(isset($listings)) {
				require_once('listings.php');
			// Shows only individual listing/business
			} elseif(isset($listing)) {
				require_once('page_listing.php');
			}
			?>
        </div>
        
        <div id="cd-advertise">
        	<?php require_once(APPPATH . '/views/cebudirectories/facebook_likebox.php'); ?>
        	<?php require_once(APPPATH . '/views/cebudirectories/advertising.php'); ?>
        </div>
        
        <div class="clear"></div>
    </div>

<?php require_once(APPPATH . '/views/cebudirectories/footer.php'); ?>