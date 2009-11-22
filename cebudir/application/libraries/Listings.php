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
     * @param	int			$limit		set result limit (optional)
	 * @param	int/array 	$cat_id		get listing by category
     * @return  array		$result		listings
	 *
     * @author	Paul Villacorta		<pwvillacorta@cebudirectories.com>
     */
    public function get_listings($limit = null, $cat_id = null)
    {
        $this->db->from($this->table_name);
        
		if(isset($cat_id)) {
			if(is_array($cat_id)) {
				$this->db->in('bus_cat_id', $cat_id);
			} else {
				$this->db->where('bus_cat_id', $cat_id);	
			}
		}
		
        if(isset($limit)) {
        	$this->db->limit($limit);
        }
        
        $this->db->orderby('bus_date_added','DESC');
        $result = $this->db->get();

        return $result->result_array(FALSE);
    }
	
	public function get_listing($name)
	{
		$this->db->from($this->table_name);
		$this->db->where(array('bus_name' => $name));
		$result = $this->db->get();
		
		return $result->result_array(FALSE);
	}
} // End of Listings Core