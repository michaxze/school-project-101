<?php defined('SYSPATH') OR die('No direct access allowed.');
/**   
 * This is listings Controller for Cebu Directories. This is the listings.
 *
 * @package    Listings
 * @author     Paul Villacorta - Cebu Directories
 * @copyright  (c) 2006-2009 Cebu Directories
 */
class Listings_Controller extends Controller {
	
	var $lists;
	var $cat;
	
	function __construct()
	{
		$this->lists = new Listings_Core;
		$this->cat   = new Categories_Core;
		
		parent::__construct();
	}
	
	function index()
	{	
	    // Fetching of Categories
		$categories = $this->cat->get_categories();
	
	    // Fetching of Latest Listing
	    $listings = $this->lists->get_listings(15);
		
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
		$listing = $this->lists->get_listing($business_name);
		$listing = $listing[0];
		// Fetching of Categories
		$categories = $this->cat->get_categories();
		
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
	}
	
	function category($category)
	{
		// replace "-" to space " "
		$category = str_replace("-", " ", $category);
		$cat_var = $this->cat->get_category_by_name($category);
		
		if(!empty($cat_var)) {
			foreach($cat_var as $cat) {
				$cids[] = $cat['cat_id'];	
			}
			
			// Fetching of Categories
			$categories = $this->cat->get_categories();
			
			// Fetching of Listings by Category
			$listing = $this->lists->get_listings(15, $cids);
			
			$page = new View('cebudirectories/listings/index');
			$page->title = $cat_var[0]['cat_name'] . ' - Cebu Directories Online Cebu Directory of Cebu City';
			$page->menu  = 'listing';
			
			$page->categories = $categories;
			$page->listings   = $listing;
			
			$page->render(true);
		}
		
		
	}
} // End Home Controller
