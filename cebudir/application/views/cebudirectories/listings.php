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
<div id="listing-head">
	<span class="small">Latest Listings</span>
</div>

<div class="listing-latest">    
    <?php
    	foreach($listings as $list) {
			$bus_name = strtolower($list['bus_name']);
			$is_premium = $list['is_pro_account'];
			
			// Category link
			$curl 	    = url::base() . 'category/' . strtolower(str_replace(" ","-",strtolower($list['cat_name'])));
			$curl_title = "View more Listing from " . $list['cat_name'] . " category";
    		$curl_html  = '<a href="' . $curl . '" title="' . $curl_title . '" >' . $list['cat_name'] . '</a>';
			
			// Title link
			$turl 		= url::base() . str_replace(" ", "-", $bus_name);
			$turl_title = "{$list['cat_name']}: " . ucwords($list['bus_name']);
			$turl_html  = '<a href="' . $turl . '" title="' . $turl_title . '">' . ucwords($bus_name) . '</a>';
			
			echo '<div class="listing">';
    		echo '<h5>' . $turl_html . '<span class="listing-category" style="float: right;">' . $curl_html . '</span></h5>';
				 
			if(strlen(trim($list['bus_description'])) > 0 && $is_premium) {
    			//echo '<p>' . substr(strip_tags($list['bus_description']), 0, 200) . '</p>';
			}
			if(strlen(trim($list['bus_address'])) > 0) {
				echo '<div class="details_container"><div class="details address"> ADDRESS:</div> <span class="details_text">' . $list['bus_address'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_telno'])) > 0) {
				echo '<div class="details_container"><div class="details telno"> TEL. NO: </div><span class="details_text">' . $list['bus_telno'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_website'])) > 0 && $is_premium) {
				echo '<div class="details_container"><div class="details website"> WEBSITE: </div><span class="details_text">' . $list['bus_website'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_email'])) > 0 && $is_premium) {
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
