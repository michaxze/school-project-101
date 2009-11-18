<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="listing-top title">Featured Listing</div>

<!-- Featured Listing -->
<div class="listing-feature">

</div>

<!-- Latest Listings -->
<div class="listing-latest">
    <h1 style="font-weight:lighter; margin-bottom: 10px; ">Latest Listings</h1>
    
    <?php
    	foreach($listings as $list) {
    		echo '<div class="listing">';
    		echo '<h5>' . ucwords(strtolower($list['bus_name'])) . '</h5>';
    		echo '<p><div src="" style="width: 50px; height: 50px; background: #999999; border: 3px solid #CCCCCC; float: left; margin-right: 5px;"></div>' . 
    			substr(strip_tags($list['bus_description']), 0, 300) . '</p>';
    		echo '<br class="clear" />';
    		echo '</div>';
    	}
    ?>
    
</div>

<div class="listing-bottom title"></div>