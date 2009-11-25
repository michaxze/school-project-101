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
	
	function contact_send()
    {
		$date = date("Y-m-d H:i:s");
		$db = new Database;
		$result = $db->insert("cebu_contactus", array('name'=> $_POST['fname'],
													'address' => $_POST['faddress'],
													'report_type' => $_POST['ftype'],
													'report_message' => $_POST['fmessage'],
													'report_email' => $_POST['femail'],
													'report_datesent' => $date ));

		$to = Kohana::config('cebudirectories.email_to');
		$from = Kohana::config('cebudirectories.email_from');
		$subject = Kohana::config('cebudirectories.email_subject_contactus');
		$message = Kohana::config('cebudirectories.email_message_contactus');
		email::send($to, $from, $subject, $message);

		$page = new View('cebudirectories/page_contactus');
		$page->title = 'Contact Us - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'contact';
		$page->ctypes = array('listing' => 'Listing Inquiry',
							  'events' => 'Event Inquiry',
							  'advertising' => 'Advertising Inquiry',
							  'feedback' => 'Feedbacks and Comments - Thank us',
							  'others' => 'Other concerns');
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
	
	function termsofuse()
	{
		$page = new View('cebudirectories/page_terms_of_use');
		$page->title = 'Terms of Use - Cebu Directories Online Cebu Directory of Cebu City';
		
		$page->render(true);
	}
	
	function privacypolicy()
	{
		$page = new View('cebudirectories/page_privacy_policy');
		$page->title = 'Privacy Policy - Cebu Directories Online Cebu Directory of Cebu City';
		
		$page->render(true);
	}
	
} // End Home Controller