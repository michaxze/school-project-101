<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<div id="search_bar">
<?php
	/*
	print form::open(url::base() . 'search', array('method'=>'get'));
	print form::input('q', '', ' style="font-size: 16px; padding: 5px 10px; width: 500px;"');
	print form::submit('submit', 'Search');
	print form::close();
	*/
	echo form::open(url::base() . 'search', array('method' => 'get'));
	echo form::label("Find a business : &nbsp;") ;
	echo form::input('q','',' class="searchF" style="width: 300px; font-size: 14px; padding: 3px;"') . "&nbsp;";
	echo form::submit('submit', 'search',' class="searchB" style="width: 80px; font-size: 13px; padding: 3px;"');
	echo form::close();
?>
</div>