<?php defined('SYSPATH') OR die('No direct access allowed.');
/**   
 * This is Services Controller for Cebu Directories. This is the Services.
 *
 * @package    Services
 * @author     Paul Villacorta - Cebu Directories
 * @copyright  (c) 2006-2009 Cebu Directories
 */
class Services_Controller extends Controller {
	
	var $cat;
	var $lists;
	var $categories;
	var $listings;
	
	function __construct()
	{
		$this->lists = new Listings_Core;
		$this->cat   = new Categories_Core;
		
		$this->categories = $this->cat->get_categories();
		$this->listings   = $this->lists->get_listings(5);
		
		parent::__construct();
	}
	
	function index()
	{	
	    $page = new View('cebudirectories/services/index');
	    $page->title = 'Services - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'services';
		$page->has_banner = TRUE;
		
		$page->categories = $this->categories;
		//$page->listings   = $this->listings;
		
		$page->render(true);
	}
	
	function listings()
	{
		$page = new View('cebudirectories/services/page_listing');
	    $page->title = 'Listings - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'services';
		$page->has_banner = FALSE;
		
		$page->scripts = array(url::base(FALSE) . "javascript/jquery.flow.1.2.js",
							   url::base(FALSE) . "javascript/thickbox-min.js");
		$page->active_script = <<<ACTIVESCRIPT
<script type="text/javascript">
	$(function() {
		$("div#controller").jFlow({
			slides: "#slides"
		});
	});
	</script>

ACTIVESCRIPT;

		$page->categories = $this->categories;
		
		$page->render(true);
	}
	
	function webdevelopment()
	{
		echo "Hello again!";	
	}
	
	function advertising()
	{
		echo "Wassssup!!";	
	}
} // End Home Controller
