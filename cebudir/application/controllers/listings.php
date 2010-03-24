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
	var $paging;
	
	function __construct()
	{
		$this->lists = new Listings_Core;
		$this->cat   = new Categories_Core;
		$this->paging= new Pagination(array('base_url'		 => '/listings/page/',
											'uri_segment'	 => 3,
											'total_items'	 => $this->lists->get_listings_total(),
											'items_per_page' => 10,
											'style'			 => 'digg',
											'sql_limit'		 => 10));
		
		parent::__construct();
	}
	
	function index()
	{	
		// Construct Pagination
		$this->paging->initialize();

	    // Fetching of Categories
		$categories = $this->cat->get_categories();
	
	    // Fetching of Latest Listing
	    $listings = $this->lists->get_listings($this->paging->items_per_page);
		
		$page = new View('cebudirectories/listings/index');
		$page->title = 'Listings - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'listing';
		$page->has_banner = TRUE;
		
		$page->categories = $categories;
		$page->listings   = $listings;
		$page->pagination = $this->paging->render();
		
		$page->render(true);
	}
	
	function search()
	{
		$this->paging->initialize();
		
		$query = $this->input->get('q');
		
		// Start timer for Elapsed Time
		list($usec, $sec) = explode(' ', microtime());
		$script_start = (float) $sec + (float) $usec;
		
		$listings = $this->lists->search_listing($query, $this->paging->items_per_page);
		$total    = count($this->lists->search_listing($query));
		
		// End timer for Elapsed Time
		list($usec, $sec) = explode(' ', microtime());
   		$script_end = (float) $sec + (float) $usec;
		
		$page = new View('cebudirectories/listings/page_search');
		$page->title = 'Listings - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'listing';
		$page->has_banner = TRUE;
		
		$page->listings   = $listings;
		$page->query 	  = $query;
		$page->total	  = $total;
		$page->elapsed_time = round($script_end - $script_start, 3);
		$page->pagination = $this->paging->render();
		$page->render(true);
	}

	function page($page)
	{
		// Construct Pagination
		$this->paging->initialize();

	    // Fetching of Categories
		$categories = $this->cat->get_categories();
	
	    // Fetching of Latest Listing
		$offset   = ($this->paging->items_per_page * $page);
	    $listings = $this->lists->get_listings($this->paging->items_per_page, NULL, $offset);
		
		$page = new View('cebudirectories/listings/index');
		$page->title = 'Listings - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'listing';
		$page->has_banner = TRUE;
		
		$page->categories = $categories;
		$page->listings   = $listings;
		$page->pagination = $this->paging->render();
		
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
		$page->has_banner = TRUE;
		
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
		$page->is_premium	 = $listing['is_pro_account'];
		
		$page->render(true);
	}
	
	function category($category, $page=NULL)
	{
		// replace "-" to space " "
		$category = str_replace("-", " ", $category);
		$cat_var = $this->cat->get_category_by_name($category);
		
		if(!empty($cat_var)) {
			foreach($cat_var as $cat) {
				$cids[] = $cat['cat_id'];	
			}
			
			// Construct Pagination
			$this->paging= new Pagination(array('base_url'		 => '/category/' . $category,
												'uri_segment'	 => 3,
												'total_items'	 => $this->lists->get_listings_total($cids),
												'items_per_page' => 10,
												'auto_hide'		 => true,
												'style'			 => 'classic'));
			$this->paging->initialize();
			
			// Fetching of Categories
			$categories = $this->cat->get_categories();
			
			// Fetching of Listings by Category
			$offset  = isset($page) ? ($page*$this->paging->items_per_page) : 0;
			$listing = $this->lists->get_listings($this->paging->items_per_page, $cids, $offset);
			
			$page = new View('cebudirectories/listings/index');
			$page->title = $cat_var[0]['cat_name'] . ' - Cebu Directories Online Cebu Directory of Cebu City';
			$page->menu  = 'listing';
			$page->has_banner = TRUE;
			
			$page->categories = $categories;
			$page->listings   = $listing;
			$page->pagination = $this->paging->render();
			
			$page->render(true);
		}
		
		
	}
} // End Home Controller
