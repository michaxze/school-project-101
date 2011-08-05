<?php defined('SYSPATH') OR die('No direct access allowed.');
/**   
 * This is posts Model for Cebu Directories. This is the posts.
 *
 * @package    Posts
 * @author     Paul Villacorta - Cebu Directories
 * @copyright  (c) 2006-2010 Cebu Directories
 */
class Post_Model extends ORM {
	
	public function __construct($post_name = NULL)
	{
		//$this->db = new Database;
		parent::__construct($post_name);
	}
	
	/**
	 * Get all posts
	 * 
	 * @param	integer		$limit		number of posts to get (defalt null)
	 * @param	integer		$offset		offset where to start
	 */
	public function get_posts($limit = NULL, $offset = 0) 
	{
		return ORM::factory('post')->find_all();
	}
	
	public function get_posts_by_name($name, $type = 'post')
	{
		$return = array();
		
		$post = ORM::factory('post')->where('post_name', $name)->where('type', $type)->find();
		
		$return = array("id" => $post->id,
						"title" => $post->title,
						"content" => $post->content,
						"url" => $post->post_name,
						"date_created" => $post->date_created,
						"user_id" => $post->user_id,
						"primary_image" => $post->primary_image,
						"status" => $post->status);
		return $return;
	}
} 
 ?>