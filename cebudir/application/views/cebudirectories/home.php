<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once('header.php'); ?>    

    <div id="cd-content">
    	<div id="cd-categories">
    		<?php require_once('menu_categories.php'); ?>
            <?php require_once(APPPATH . '/views/cebudirectories/advertising_left.php'); ?>
            <?php require_once(APPPATH . '/views/cebudirectories/facebook_likebox.php'); ?>
        </div>
        
        <div id="cd-listing">
        	<?php require_once('listings.php'); ?>
        </div>
        
        <div id="cd-advertise">
        	<?php require_once('advertising.php'); ?>
        </div>
        
        <div class="clear"></div>
    </div>

<?php require_once('footer.php'); ?>