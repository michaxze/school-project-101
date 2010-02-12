<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div style="background: #333333; padding: 5px 0px;">
	<span class="small" style="font-weight: bold; padding: 5px 15px; color: #FFF;">Featured</span>
</div>

<!-- Featured Listing -->
<div class="listing-feature">
	<h5><a href="">Personal Awareness and Leadership Seminar</a></h5>
	<img style="margin: 0px 10px;" src="images/featured/personal-awareness-and-leadership-seminar.jpg" alt="Personal Awareness and Leadership Seminar" title="Personal Awareness and Leadership Seminar" align="left"/>
    
    <p>
    Get the results you want in life... more money... better relationship... new relationships!!! 
    Increase your self esteem and confidence.  The Personal Awareness and Leadership seminar (PALs) 
    is a life-enhancing seminar that you must attend to discover the leader in you, 
    re-discover your greatness and be ALL that YOU can BE.
    </p>
 	<p>
    Attend this 3 day experiential seminar and discover your personal potential and
	break out of your self-limiting beliefs!<br /><br />
	Facilitator Joey Reyes<br />
    </p>
</div>

<!-- Latest Listings -->
<div style="background: #b0c061; padding: 5px 0px;">
	<span class="small" style="font-weight: bold; padding-left: 15px; color: #FFF;">Latest Listings</span>
    <div class="clear"></div>
</div>
<div class="listing-latest">    
    <?php
    	foreach($listings as $list) {
			$bus_name = strtolower($list['bus_name']);
			$tmp_url  = url::base() . str_replace(" ", "-", $bus_name);
    		echo '<div class="listing">';
    		echo '<h5><a href="' . $tmp_url . '" title="' . $bus_name . '">' . ucwords($bus_name) . '</a></h5>';
			if(strlen(trim($list['bus_description'])) > 0) {
    			echo '<p>' . substr(strip_tags($list['bus_description']), 0, 200) . '</p>';
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
    	}
    ?>
    
</div>

<div class="listing-bottom title"></div>
