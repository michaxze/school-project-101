<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="listing-top title">Latest Listing</div>

<!-- Latest Listings -->
<div class="listing-latest">
    
    <?php
    	foreach($listings as $list) {
			$bus_name = strtolower($list['bus_name']);
			$tmp_url  = url::base() . str_replace(" ", "-", $bus_name);
    		echo '<div class="listing">';
    		echo '<h5><a href="' . $tmp_url . '" title="' . $bus_name . '">' . ucwords($bus_name) . '</a></h5>';
			if(strlen(trim($list['bus_description'])) > 0) {
    			//echo '<p>' . substr(strip_tags($list['bus_description']), 0, 200) . '</p>';
			}
			if(strlen(trim($list['bus_address'])) > 0) {
				echo '<div class="details_container"><div class="details address"> ADDRESS:</div> <span class="details_text">' . $list['bus_address'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_telno'])) > 0) {
				echo '<div class="details_container"><div class="details telno"> TEL. NO: </div><span class="details_text">' . $list['bus_telno'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_website'])) > 0) {
				echo '<div class="details_container"><div class="details website"> WEBSITE: </div><span class="details_text">' . $list['bus_website'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_email'])) > 0) {
				echo '<div class="details_container"><div class="details email"> EMAIL: </div><span class="details_text">' . $list['bus_email'] . '</span>	</div>';	
			}
    		echo '</div>';
			/*echo '<pre>';
			print_r($list);
			echo '</pre>';*/
    	}
    ?>
    
</div>

<div class="listing-bottom title"></div>