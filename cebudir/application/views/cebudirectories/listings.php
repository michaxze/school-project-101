<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php
$exp_time = time()+60*60*24*30;  // 30 Days
if(!isset($_COOKIE["cdv"])) {
?>
<a href="#cdUpdate" id="cd-update">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
<div id="cdUpdate">
  <div style="float: right; margin-top: 140px; margin-right: 5px;">
  <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like-box href="http://www.facebook.com/cebudirectories" width="410" show_faces="true" border_color="#e6e7e3" stream="false" header="false"></fb:like-box>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
$("#cd-update").fancybox({
  'transitionIn'   : 'fade',
  'transitionOut'  : 'fade',
  'overlayOpacity' : 0.90,
  'overlayColor'   : '#000',
  'onStart' : function(){$("#cdUpdate").show();},
  'onCleanup' : function(){$("#cdUpdate").hide();}
}).trigger('click');
});
</script>
<?php 
setcookie("cdv", md5(time()), $exp_time,'/', 'cebudirectories.com');
} 
?>
<!-- Featured Listing 
<div style="background: #333333; padding: 5px 0px;">
	<span class="small" style="font-weight: bold; padding: 5px 15px; color: #FFF;">Featured</span>
</div>


<div class="listing-feature">
	<h5><a href="http://cebudirectories.com/posts/fete-dela-musique-2011" title="Fete Dela Musique 2011 Cebu"></a></h5>
	
</div>
-->
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
			//$clean      = str_replace(array("'"), "", $bus_name);
			//$turl 		= url::base() . str_replace(array('-','- ',' '), "-", $clean);

			// Quick fix for creating url while http://cebudirectories.com/ is not yet removed from the db
			$turl		= url::base() . str_replace('http://www.cebudirectories.com/','', $list['bus_page_url']);
			$turl_title = "{$list['cat_name']}: " . ucwords($list['bus_name']);
			$turl_html  = '<a href="' . $turl . '" title="' . $turl_title . '">' . ucwords($bus_name) . '</a>';
			
			echo '<div class="listing">';
    		echo '<h5>' . $turl_html . '<span class="listing-category" style="float: right;">' . $curl_html . '</span></h5>';

			if(strlen(trim($list['bus_address'])) > 0) {
				echo '<div class="details_container"><div class="details address"> ADDRESS:</div> <span class="details_text">' . $list['bus_address'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_telno'])) > 0) {
				echo '<div class="details_container"><div class="details telno"> TEL. NO: </div><span class="details_text">' . $list['bus_telno'] . '</span></div>';	
			}
			if(strlen(trim($list['bus_website'])) > 0 && $is_premium) {
				echo '<div class="details_container"><div class="details website"> WEBSITE: </div><span class="details_text"><a href="'. $list['bus_website'] . '" target="_blank">' . $list['bus_website'] . '</a></span></div>';	
			}
			if(strlen(trim($list['bus_email'])) > 0 && $is_premium) {
				echo '<div class="details_container"><div class="details email"> EMAIL: </div><span class="details_text"><a href="mailto:' . $list['bus_email'] . '">' . $list['bus_email'] . '</a></span>	</div>';	
			}
    		echo '</div>';
    	}
    ?>
    
</div>

<div class="listing-bottom title"></div>