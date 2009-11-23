<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * This is Home Controller for Cebu Directories. This is the homepage.
 *
 * @package    Core
 * @author     Paul Villacorta - Cebu Directories
 * @copyright  (c) 2006-2009 Cebu Directories
 */
class Home_Controller extends Controller {
  	
	function index()
	{	
	    // Fetching of Categories
	    $cat = new Categories_Core;
	    $categories = $cat->get_categories();
	
	    // Fetching of Latest Listing
	    $list = new Listings_Core;
	    $listings = $list->get_listings(5);
	
		$page = new View('cebudirectories/home');
		$page->title = 'Cebu Directories Online Cebu Directory of Cebu City';
		
		$page->categories = $categories;
		$page->listings   = $listings;
		
		$page->render(true);
	    // Fetching of Advertisers
	    // Fetching of Featured Listing
	    // Fetching of Banner
	    // too many fetching goes in this area
	}
	
	function advertise()
	{
	    $page = new View('cebudirectories/page_advertise');
	    $page->title = 'Advertise - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'advertise';
		$page->render(true);
	}
	
	function contactus()
	{
	    $page = new View('cebudirectories/page_contactus');
	    $page->title = 'Contact Us - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'contact';
		$page->ctypes = array('Listing Inquiry',
							  'Event Inquiry',
							  'Advertising Inquiry',
							  'Feedbacks and Comments - Thank us',
							  'Other concerns');
		$page->render(true);
	}
	
	function services()
	{
		$page = new View('cebudirectories/page_services');
	    $page->title = 'Services - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'services';
		$page->ctypes = array('Listing Inquiry',
							  'Event Inquiry',
							  'Advertising Inquiry',
							  'Feedbacks and Comments - Thank us',
							  'Other concerns');
		$page->render(true);
	}
	
	function aboutus()
	{
		$page = new View('cebudirectories/page_about');
		$page->title = 'About Us - Cebu Directories Online Cebu Directory of Cebu City';
		
		$page->render(true);
	}
	
} // End Home Controller
