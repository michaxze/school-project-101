<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once(APPPATH . 'views/cebudirectories/header.php'); ?>
	
    <div id="cd-content">
    
        <div style="padding: 2px 10px; margin-top: 10px; margin-bottom: 10px; border-bottom: 3px solid #CCCCCC;">
            <?php #Results 1-<?php echo count($results);  of about <?php echo $results_count;  for "<b><?php echo $query; . (<?php echo $elapsed_time;  seconds) </b> ?>
            <?php echo "Results of about <b> $total </b> for <b> $query </b>( <b>$elapsed_time</b> seconds )"; ?>
        </div>
    
    	<div id="cd-search">
                
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
                $turl 		= url::base() . str_replace(array(" ", ",","."), "-", $bus_name);
                $turl_title = ucwords($list['bus_name']);
                $turl_html  = '<a href="' . $turl . '" title="' . $turl_title . '">' . ucwords($bus_name) . '</a>';
                
                echo '<div class="listing" style="border-bottom: none;">';
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
				
				echo '<span class="details_container" style="margin-left: 10px; border-bottom: 1px dotted #333;"><a href="' . $turl . '" title="Go to ' . $turl_title . ' page">' . $turl . '</a></span>';
                echo '</div>';
            }
            ?>
        	</div>
		</div>
        
        <div id="cd-advertise">
        	<?php require_once(APPPATH . '/views/cebudirectories/facebook_likebox.php'); ?>
        	<?php require_once(APPPATH . '/views/cebudirectories/advertising.php'); ?>
        </div>
        
        <div class="clear"></div>
        
    </div>

<?php require_once(APPPATH . '/views/cebudirectories/footer.php'); ?>