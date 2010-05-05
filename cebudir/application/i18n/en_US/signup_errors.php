<?php defined('SYSPATH') OR die('No direct access allowed.');

$lang = array
(
	// Change 'field' to the name of the actual field (e.g., 'email').
	'business_name' => array
	(
		'required' => 'Business Name cannot be blank.',
		'alpha'    => 'Only alphabetic characters are allowed.',
		'default'  => 'Invalid Input.',
	),
	
	'business_desc' => array
	(
		'required' => 'Business Description cannot be blank.',
		'alpha'    => 'Only alphabetic characters are allowed.',
		'default'  => 'Invalid Input.',
	),
	
	'business_street' => array
	(
		'required' => 'Business Street cannot be blank.',
		'alpha'    => 'Only alphabetic characters are allowed.',
		'default'  => 'Invalid Input.',
	),
	
	'email' => array
	(
		'required' => 'Email cannot be blank.',
		'alpha'    => 'Only alphabetic characters are allowed.',
		'default'  => 'Invalid Input.',
	),
	
	// Billing Specifics
	'billing_name' => array
	(
		'required' => 'Billing Name cannot be blank.',
		'alpha'    => 'Only alphabetic characters are allowed.',
		'default'  => 'Invalid Input.',
	),
	
	'billing_address' => array
	(
		'required' => 'Billing Address cannot be blank.',
		'alpha'    => 'Only alphabetic characters are allowed.',
		'default'  => 'Invalid Input.',
	),
);