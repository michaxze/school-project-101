<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="listing-top title">Latest Listing</div>

<!-- Latest Listings -->
<div class="listing-latest">
    
    <?php
    	foreach($listings as $list) {
    		echo '<div class="listing">';
    		echo '<h5>' . ucwords(strtolower($list['bus_name'])) . '</h5>';
			if(strlen(trim($list['bus_description'])) > 0) {
    			echo '<p>' . substr(strip_tags($list['bus_description']), 0, 200) . '</p>';
			}
			if(strlen(trim($list['bus_address'])) > 0) {
				echo '<div class="details_container"><div class="details"> ADDRESS:</div> <span class="details_text">' . $list['bus_address'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_telno'])) > 0) {
				echo '<div class="details_container"><div class="details"> TEL. NO: </div><span class="details_text">' . $list['bus_telno'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_website'])) > 0) {
				echo '<div class="details_container"><div class="details"> WEBSITE: </div><span class="details_text">' . $list['bus_website'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_email'])) > 0) {
				echo '<div class="details_container"><div class="details"> EMAIL: </div><span class="details_text">' . $list['bus_email'] . '</span>	</div>';	
			}
    		echo '</div>';
			/*echo '<pre>';
			print_r($list);
			echo '</pre>';*/
    	}
    ?>
    
</div>

<div class="listing-bottom title"></div>