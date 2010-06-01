<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div class="listing-top title"></div>

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
	if(strlen(trim($description) && $is_premium) > 0) {
		echo '<div id="content_container">' . $description . '</div>';
	}

    ?>
    
</div>


<fb:comments xid="http://cebudirectories.com/ipars-restaurante-y-bar-de-tapas" numposts="15" width="520"></fb:comments>

<div class="listing-bottom title"></div>