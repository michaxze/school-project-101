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
    public function get_listings($limit = null, $cat_id = null, $offset = 0)
    {
      $this->db->from('cebu_business as cb', 'cebu_categories as cc');

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

		$this->db->offset($offset);
		$this->db->where('cc.cat_id = cb.bus_cat_id');
		$this->db->orderby('bus_date_added','DESC');
		$result = $this->db->get();
		
		return $result->result_array(FALSE);
    }

    public function search_listing($search_string, $limit = null, $cat_id = null, $offset = 0)
    {
      $this->db->from('cebu_business as cb', 'cebu_categories as cc');
      $this->db->like('bus_name', "%$search_string%", FALSE);
      $this->db->offset($offset);
      $this->db->orderby('bus_date_added','DESC');
      $this->db->where('cc.cat_id = cb.bus_cat_id');
      if(isset($limit)) {
        $this->db->limit($limit);
      }

      $result = $this->db->get();
      return $result->result_array(FALSE);
    }

	/**
	 * Returns a specific Business record
	 *
	 * @param	string	$name	The name of the listing in clean form
	 * @returns	record			The record of the listing
	 * @author	Paul Villacorta		<pwvillacorta@cebudirectories.com>
	 */
	public function get_listing($name)
	{
		$cond = sprintf("REPLACE(cb.bus_name,\"%s\",'') = '%s'", "'", $name);
		//$this->db->from($this->table_name);
		$this->db->from('cebu_business as cb', 'cebu_categories as cc');
		$this->db->where('cc.cat_id = cb.bus_cat_id');
		$this->db->where($cond);
		$result = $this->db->get();
		
		return $result->result_array(FALSE);
	}
	
	public function get_listings_total($cat_id=NULL)
	{
		$this->db->from('cebu_business');
		
		if(isset($cat_id)) {
			if(is_array($cat_id)) {
				$this->db->in('bus_cat_id', $cat_id);
			} else {
				$this->db->where('bus_cat_id', $cat_id);	
			}
		}
		
		$result = $this->db->get();
		
		return $result->count();
	}

	public function get_provinces()
	{
		$this->db->from("cebu_location");
		$this->db->orderby('loc_name', 'ASC');
		$result = $this->db->get();
		$rows = $result->result_array(FALSE);
		$newrows = array();
		for($i=0; $i<count($rows); $i++){
		  $newrows[$rows[$i]['loc_id']] = $rows[$i]['loc_name'];
		}
		return $newrows;
	}
	
	public function get_query($q, $limit=NULL)
	{
		$q = strtolower(trim($q));
		$this->db->from('cebu_business');
		
		if(isset($limit)) {
        	$this->db->limit($limit);
        }
		
		$this->db->like('bus_name', $q);
		$this->db->orlike('bus_description', $q);
		
		$this->db->groupby('bus_id');
		//$this->db->orderby('cb.bus_no_of_views');
		$result = $this->db->get();
		
		return $result->result_array(FALSE);
	}

} // End of Listings Core