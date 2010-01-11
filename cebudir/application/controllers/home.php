<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * This is Home Controller for Cebu Directories. This is the homepage.
 *
 * @package    Core
 * @author     Paul Villacorta - Cebu Directories
 * @copyright  (c) 2006-2009 Cebu Directories
 */
class Home_Controller extends Controller {
	
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
		$page = new View('cebudirectories/home');
		$page->title = 'Cebu Directories Online Cebu Directory of Cebu City';
		
		$page->categories = $this->categories;
		$page->listings   = $this->listings;
		
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
		
		$page->categories = $this->categories;
		$page->listings   = $this->listings;
		
		$page->render(true);
	}
	
	function contactus($status = null)
    {
		$page = new View('cebudirectories/page_contactus');
		$page->title = 'Contact Us - Cebu Directories Online Cebu Directory of Cebu City';
		$page->menu  = 'contact';
		
		// Fetching of Categories
	    $cat = new Categories_Core;
	    $categories = $cat->get_categories();
		$page->categories = $categories;
		
		$page->ctypes = array('listing' => 'Listing Inquiry',
								  'events' => 'Event Inquiry',
								  'advertising' => 'Advertising Inquiry',
								  'feedback' => 'Feedbacks and Comments - Thank us',
								  'others' => 'Other concerns');
		
		// This is to check where a post submit has been made
		$posts = $this->input->post();

		if(!empty($posts)) {
			
			$posts = new Validation($_POST);

			// Initializing of Variables from POSTS
			$fname = $this->input->post('fname');
			$email = $this->input->post('femail');
			$url   = $this->input->post('fwebsite');
			$message = $this->input->post('fmessage');
			$type  = $this->input->post('ftype');

			// Adding rules to form fields
			$posts->add_rules('fname','required','standard_text');
			$posts->add_rules('femail','required',array('valid','email'));
			$posts->add_rules('fwebsite','url');
			$posts->add_rules('fmessage','required','standard_text');
			
			if($posts->validate()) {
				$date = date("Y-m-d H:i:s");
				
				//echo $fname . ' -- ' . $email . ' -- ' . $url . ' -- ' . $message . ' -- ' . $type;
								
				$db = new Database;
				$result = $db->insert("cebu_contactus", 
										array('name'=> $fname,
										      'address' => $url,
											  'report_type' => $type,
											  'report_message' => $message,
											  'report_email' => $email,
											  'report_datesent' => $date));
				print_r($result->insert_id());
			
				$to      = 'pwvillacorta@hostfortes.com';  // Address can also be array('to@example.com', 'Name')
				$from    = 'pwvillacorta@gmail.com';
				$subject = 'This is an example subject';
				$message = 'This is an <strong>example</strong> message';
				 
				email::send($to, $from, $subject, $message, TRUE);
				/*
				$swift = email::connect();
				
				$to = 'pwvillacorta@hostfortes.com'; //Kohana::config('cebudirectories.email_to');
				$from = 'pwvillacorta@gmail.com'; //Kohana::config('cebudirectories.email_from');
				$subject = '[[ CEBU DIRECTORIES ]]'; //Kohana::config('cebudirectories.email_subject_contactus');
				$message = $message; //Kohana::config('cebudirectories.email_message_contactus');
				$swift->send($message, $recipients, $from);*/
			} else {
				print_r($posts->errors());
			}
			//$page->status = true;
			/*
			$date = date("Y-m-d H:i:s");
			
			$to = Kohana::config('cebudirectories.email_to');
			$from = Kohana::config('cebudirectories.email_from');
			$subject = Kohana::config('cebudirectories.email_subject_contactus');
			$message = Kohana::config('cebudirectories.email_message_contactus');
			email::send($to, $from, $subject, $message);
			*/
		} 
		
		$page->categories = $this->categories;
		$page->listings   = $this->listings;
		
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

		$page->categories = $this->categories;
		$page->listings   = $this->listings;

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
		
		$page->categories = $this->categories;
		$page->listings   = $this->listings;
		
		$page->render(true);
	}
	
	function aboutus()
	{
		$page = new View('cebudirectories/page_about');
		$page->title = 'About Us - Cebu Directories Online Cebu Directory of Cebu City';
		
		$page->categories = $this->categories;
		$page->listings   = $this->listings;
		
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
	
	function termsofuse()
	{
		$page = new View('cebudirectories/page_terms_of_use');
		$page->title = 'Terms of Use - Cebu Directories Online Cebu Directory of Cebu City';
		
		$page->categories = $this->categories;
		$page->listings   = $this->listings;
		
		$page->render(true);
	}
	
	function privacypolicy()
	{
		$page = new View('cebudirectories/page_privacy_policy');
		$page->title = 'Privacy Policy - Cebu Directories Online Cebu Directory of Cebu City';
		
		$page->categories = $this->categories;
		$page->listings   = $this->listings;
		
		$page->render(true);
	}
	
} // End Home Controller
