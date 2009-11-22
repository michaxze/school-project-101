<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package  Cebudirectories Core
 *
 * Sets the default pages to its corresponding pages
 */
$config['advertise'] = 'home/advertise';
$config['contactus'] = 'home/contactus';
$config['services']  = 'home/services';
$config['aboutus']   = 'home/aboutus';
$config['listings']  = 'listings/index';

/**
 * This will retain the url before of the Business Listings
 * e.g: http://cebudirectories.com/name-of-business
 */
$config['category/([0-9a-zA-z-]+)'] = 'listings/category/$1';
$config['([0-9a-zA-z-]+)'] = 'listings/show/$1';