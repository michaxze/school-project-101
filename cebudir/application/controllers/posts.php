<?php defined('SYSPATH') OR die('No direct access allowed.');
/**   
 * This is posts Controller for Cebu Directories. This is the posts.
 *
 * @package    Posts
 * @author     Paul Villacorta - Cebu Directories
 * @copyright  (c) 2006-2010 Cebu Directories
 */
class Posts_Controller extends Controller {
	
	//var $lists;
	//var $cat;
	var $paging;
	
	function __construct()
	{
		//$this->lists = new Listings_Core;
		//$this->cat   = new Categories_Core;
		/*$this->paging= new Pagination(array('base_url'		 => '/listings/page/',
											'uri_segment'	 => 3,
											'total_items'	 => $this->lists->get_listings_total(),
											'items_per_page' => 10,
											'style'			 => 'digg',
											'sql_limit'		 => 10));
		*/
		parent::__construct();
	}
	
	function index($post_name = NULL)
	{	
		// Construct Pagination
		//$this->paging->initialize();

		$page = new View('cebudirectories/posts/index');
		$page->title = 'Waaazzzzzuuup?!?! - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = '';
		$page->has_banner = FALSE;
		
		$post = new Post_Model;
		
		if(isset($post_name)) {
			$name = str_replace('posts/', '', url::current());
			$t[] = $post->get_posts_by_name($name);
			$page->title = $t[0]['title'] . ' &raquo; Cebu Directories Online Cebu Directory of Cebu City';
		} else {
			$posts = $post->get_posts();
		
			foreach($posts as $p) {
				$t[] = array("id" => $p->id,
							 "title" => $p->title,
							 "content" => $p->content,
							 "url" => url::base() . 'posts/' . $p->post_name,
							 "date_created" => $p->date_created);
			}
		}
		
		$page->posts = $t;
		
		//$page->pagination = $this->paging->render();
		
		$page->render(true);
	}
	
	/*function search()
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
	}*/

} // End Home Controller
