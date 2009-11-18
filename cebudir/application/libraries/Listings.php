<?php defined('SYSPATH') or die('No direct script access.');
/**
 * This is the Core Class for Listings
 *
 * @package	listings
 * @version	0.1
 * @author	Paul Villacorta	 <pwvillacorta@cebudirectories.com>
 * @website	http://www.cebudirectories.com
 */ 
class Listings_Core {

    public function __construct()
    {
    	$this->db         = new Database;
        $this->table_name = 'cebu_business';
    }

    /**
     * Retrieves All Listings
     *
     * @param	int	$limit		set result limit (optional)
     * @return  array	$result		listings
     * @author	Paul Villacorta		<pwvillacorta@cebudirectories.com>
     */
    public function get_listings($limit = null)
    {
        $this->db->from($this->table_name);
               
        if(isset($limit)) {
        	$this->db->limit($limit);
        }
        
        $this->db->orderby('bus_date_added','DESC');
        $result = $this->db->get();

        return $result->result_array(FALSE);
    }
} // End of Listings Core