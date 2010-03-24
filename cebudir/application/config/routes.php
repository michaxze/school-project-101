<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * @package  Cebudirectories Core
 *
 * Sets the default pages to its corresponding pages
 */
$config['advertise'] = 'home/advertise';
$config['contactus'] = 'home/contactus';
$config['aboutus']   = 'home/aboutus';
$config['terms-of-use'] = 'home/termsofuse';
$config['privacy-policy'] = 'home/privacypolicy';
$config['listings']  = 'listings/index';

$config['search']	 = 'listings/search';

$config['services']  = 'services/index';
$config['services/web-development'] = 'services/webdevelopment';
$config['signup']  = 'home/signup';

/**
 * This will retain the url before of the Business Listings
 * e.g: http://cebudirectories.com/name-of-business
 */
$config['category/([0-9a-zA-z-]+)'] = 'listings/category/$1';
$config['category/([0-9a-zA-z-]+)/([0-9]+)'] = 'listings/category/$1/$2';
$config['([0-9a-zA-z-]+)'] = 'listings/show/$1';