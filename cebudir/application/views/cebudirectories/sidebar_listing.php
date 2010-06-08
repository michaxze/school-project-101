<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php

// Displays only is $more_listings has items
if(!empty($more_listings)) {
	
	$list_items = '';
	
	echo '<h5>More Listings from ' . $category . '</h5>';
	echo '<ul id="more_listings">';
	
	foreach($more_listings as $list) {
		$bus_name = strtolower($list['bus_name']);
		
		$clean      = str_replace(array("'"), "", $bus_name);
		$turl 		= url::base() . str_replace(array('-','- ',' '), "-", $clean);
		$turl_title = "{$list['cat_name']}: " . ucwords($list['bus_name']);
		$turl_html  = '<a href="' . $turl . '" title="' . $turl_title . '">' . ucwords($bus_name) . '</a>';
	
		$list_items .= '<li>';
		$list_items .= $turl_html;
		$list_items .= '</li>';
		$list_items .= "\n";
	}
	
	echo $list_items;
	echo '</ul>';
}
?>