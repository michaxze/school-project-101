<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<div id="categories">
	<div class="header-top center title">Categories</div>
	<ul id="categorymenu">
	<?php
//    print_r($categories[4]['child']);
	for($i=0; $i<count($categories); $i++) {
		$c = $categories[$i];
		$curl = str_replace(" ","-",strtolower($c['cat_name']));

		echo "<li>\n";
		echo "<a class=\"head\" href=\"" . url::base() . "category/" . strtolower($curl) ."\">" . $c['cat_name'] . "</a>\n";
			
		if ( count($categories[$i]['child']) > 0 ) {
			echo "<ul>";
            for($j=0; $j<count($categories[$i]['child']); $j++) {
				// construct URL for sub child
			  	$url = str_replace(" ","-",strtolower($categories[$i]['child'][$j]['cat_name']));
	          	echo "<li><a href=\"" . url::base() . "category/" . $url . "\">" . $categories[$i]['child'][$j]['cat_name'] . "</a></li>\n";
            }
            echo "</ul>\n";
		}
		
		echo "</li>\n";
	}
    	?>
    </ul>
	<div class="header-bottom"></div>
</div>