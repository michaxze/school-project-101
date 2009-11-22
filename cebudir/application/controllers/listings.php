<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * This is listings Controller for Cebu Directories. This is the listings.
 *
 * @package    Listings
 * @author     Paul Villacorta - Cebu Directories
 * @copyright  (c) 2006-2009 Cebu Directories
 */
class Listings_Controller extends Controller {
	
	function index()
	{	
	    // Fetching of Categories
		$cat = new Categories_Core;
		$categories = $cat->get_categories();
	
	    // Fetching of Latest Listing
	    $list = new Listings_Core;
	    $listings = $list->get_listings(15);
	
		$page = new View('cebudirectories/listings/index');
		$page->title = 'Listings - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'listing';
		
		$page->categories = $categories;
		$page->listings   = $listings;
		
		$page->render(true);
	}
	
	function show($business)
	{
		$business_name = strtolower(str_replace('-',' ',$business));
		$list = new Listings_Core;
		$listing = $list->get_listing($business_name);
		$listing = $listing[0];
		// Fetching of Categories
		$cat = new Categories_Core;
		$categories = $cat->get_categories();
		
		$page = new View('cebudirectories/listings/index');
		$page->title = ucwords(strtolower($listing['bus_name'])) . ' - Cebu Directories';
		$page->menu  = 'listing';
		
		$page->categories = $categories;
		
		// Listing Variables
		$page->listing 		 = $listing;
		$page->business_name = $listing['bus_name'];
		$page->address		 = $listing['bus_address'];
		$page->website		 = $listing['bus_website'];
		$page->email		 = $listing['bus_email'];
		$page->telno		 = $listing['bus_telno'];
		$page->mobile		 = $listing['bus_mobile_no'];
		$page->description	 = $listing['bus_description'];
		
		$page->render(true);
		//echo '<pre>';
		//print_r($listing);
		//echo '</pre>';
	}
	
} // End Home Controller