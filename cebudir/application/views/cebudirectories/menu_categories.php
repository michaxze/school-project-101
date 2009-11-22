<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<div id="categories">
	<div class="header-top center title">Categories</div>
	<ul id="categorymenu">
	<?php
//    print_r($categories[4]['child']);
	for($i=0; $i<count($categories); $i++) {
		$c = $categories[$i];

		echo "<li>\n";
		  echo "<a class=\"head\" href=\"?p=" . $c['cat_id'] ."\">" . $c['cat_name'] . "</a>\n";
		  //echo $c['cat_name'] . "\n";
		  if ( count($categories[$i]['child']) > 0 ) {
			echo "<ul>";
            for($j=0; $j<count($categories[$i]['child']); $j++) {
	          //print_r($categories[$i]['child'][$j]);
	          echo "<li><a href=\"?p=" . $categories[$i]['cat_id'] . "." . $j . "\" title=\"" . $categories[$i]['child'][$j]['cat_name'] . "\">" . $categories[$i]['child'][$j]['cat_name'] . "</a></li>\n";
            }
            echo "</ul>\n";
          }
		
		echo "</li>\n";
	}
    	?>
    </ul>
	<div class="header-bottom"></div>
</div>