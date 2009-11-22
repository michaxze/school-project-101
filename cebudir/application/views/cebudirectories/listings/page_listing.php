<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="listing-top title"></div>

<!-- Latest Listings -->
<div class="listing-latest">
    <h1 style="font-weight:lighter; margin-bottom: 10px; "><?php echo ucwords(strtolower($business_name)); ?></h1>
    
    <?php
	if(strlen(trim($address)) > 0) {
		echo '<div class="details_container"><div class="details"> ADDRESS:</div> <span class="details_text">' . $address . '</span></div>';	
	}
	if(strlen(trim($telno)) > 0) {
		echo '<div class="details_container"><div class="details"> TEL. NO: </div><span class="details_text">' . $telno . '</span></div>';	
	}
	if(strlen(trim($website)) > 0) {
		echo '<div class="details_container"><div class="details"> WEBSITE: </div><span class="details_text">' . $website . '</span></div>';	
	}
	if(strlen(trim($email)) > 0) {
		echo '<div class="details_container"><div class="details"> EMAIL: </div><span class="details_text">' . $email . '</span></div>';	
	}
	if(strlen(trim($description)) > 0) {
		echo '<div class="details_container">' . $description . '</div>';
	}
    	//echo '<pre>';
		//print_r($listing);
		//echo '</pre>';
    ?>
    
</div>

<div class="listing-bottom title"></div>