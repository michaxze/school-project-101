<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * This is Home Controller for Cebu Directories. This is the homepage.
 *
 * @package    Core
 * @author     Paul Villacorta - Cebu Directories
 * @copyright  (c) 2006-2009 Cebu Directories
 */
class Home_Controller extends Template_Controller {

	// Set the name of the template to use
	public $template = 'cebudirectories/home';
	
	public function index()
	{
	    $this->template->title = 'Cebu Directories Online Cebu Directory of Cebu City';
	
	    // Fetching of Categories
	    $cat = new Categories_Core;
	    $categories = $cat->get_categories();
	    $this->template->categories = $categories;
	
	    // Fetching of Latest Listing
	    $list = new Listings_Core;
	    $listings = $list->get_listings(5);
	    $this->template->listings = $listings;
	
	    // Fetching of Advertisers
	    // Fetching of Featured Listing
	    // Fetching of Banner
	    // too many fetching goes in this area
	}
	
	public function advertise()
	{
	    //echo "Pass Here i should be at advertise";	
	    //$page = new View('cebudirectories/home');
	    $this->template->title = 'Advertise - Cebu Directories Online Cebu Directory of Cebu City';
	}
	
} // End Home Controller