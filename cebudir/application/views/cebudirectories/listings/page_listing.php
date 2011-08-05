<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class=""></div>

<!-- Latest Listings -->
<div class="listing-latest">
    <h1 style="font-weight:lighter; margin-bottom: 10px; "><?php echo ucwords(strtolower($business_name)); ?></h1>
    
    <?php	
	if(strlen(trim($address)) > 0) {
		echo '<div class="details_container"><div class="details address"> ADDRESS:</div> <span class="details_text">' . $address . '</span></div>';	
	}
	if(strlen(trim($telno)) > 0) {
		echo '<div class="details_container"><div class="details telno"> TEL. NO: </div><span class="details_text">' . $telno . '</span></div>';	
	}
	if(strlen(trim($website)) > 0 && $is_premium) {
		echo '<div class="details_container"><div class="details website"> WEBSITE: </div><span class="details_text"><a href="' . $website . '" target="_blank">' . $website . '</a></span></div>';	
	}
	if(strlen(trim($email)) > 0 && $is_premium) {
		echo '<div class="details_container"><div class="details email"> EMAIL: </div><span class="details_text"><a href="mailto:' . $email . '">' . $email . '</a> </span></div>';	
	}
	if(strlen(trim($bus_description) && $is_premium) > 0) {
		echo '<div id="content_container">' . $bus_description . '</div>';
	}

    ?>
    
</div>

<div class="">
  <center><div id="map_canvas" style="width: 500px; height: 300px;"></div></center>
</div>


<h4>Comments </h4>
<center>
<div id="fb-root"></div>
<script src="http://connect.facebook.net/en_US/all.js#appId=224390210914276&amp;xfbml=1"></script>
<fb:like href="<?php echo $bus_url; ?>" send="false" layout="button_count" width="500" show_faces="true" font=""></fb:like><br /><br />

<fb:comments href="<?php echo $bus_url; ?>" num_posts="15" width="500"></fb:comments>

</center>