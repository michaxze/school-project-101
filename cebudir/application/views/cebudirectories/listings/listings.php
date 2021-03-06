<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<div id="listing-head">
	<span class="small">Latest Listings</span>
</div>

<!-- Latest Listings -->
<div class="listing-latest">
    
    <?php
		echo $pagination;
    	foreach($listings as $list) {
			$bus_name = strtolower($list['bus_name']);
			$is_premium = $list['is_pro_account'];
			
			// Category link
			$curl 	    = url::base() . 'category/' . strtolower(str_replace(" ","-",strtolower($list['cat_name'])));
			$curl_title = "View more Listing from " . $list['cat_name'] . " category";
    		$curl_html  = '<a href="' . $curl . '" title="' . $curl_title . '" >' . $list['cat_name'] . '</a>';
			
			// Title link
			//$clean      = str_replace(array("'"), "", $bus_name);
			//$turl 		= url::base() . str_replace(array('-','- ',' '), "-", $clean);
			
			// Quick fix for creating url while http://cebudirectories.com/ is not yet removed from the db
			$turl		= url::base() . str_replace('http://www.cebudirectories.com/','', $list['bus_page_url']);
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
				echo '<div class="details_container"><div class="details website"> WEBSITE: </div><span class="details_text"><a href="' . $list['bus_website'] . '" target="_blank">' . $list['bus_website'] . '</a></span></div>';	
			}
			if(strlen(trim($list['bus_email'])) > 0 && $is_premium) {
				echo '<div class="details_container"><div class="details email"> EMAIL: </div><span class="details_text"><a href="mailto:' . $list['bus_email'] . '">' . $list['bus_email'] . '</a></span>	</div>';	
			}
    		echo '</div>';
			/*echo '<pre>';
			print_r($list);
			echo '</pre>';*/
    	}
    ?>
    
</div>

<div class="listing-bottom title"></div>