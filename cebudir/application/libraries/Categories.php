<?php defined('SYSPATH') or die('No direct script access.');
/**
 * This is the Core Class for Categories
 *
 * @package	categories
 * @version	0.1
 * @author	Paul Villacorta	 <pwvillacorta@cebudirectories.com>
 * @website	http://www.cebudirectories.com
 */

/**
 * A simple function to sort array names
 * @url	http://www.the-art-of-web.com/php/sortarray/
 */
function compare($a, $b) 
{ 
    return strcmp($a['cat_name'], $b['cat_name']); 
} 

class Categories_Core {

    public function __construct()
    {
    	$this->db         = new Database;
        $this->table_name = 'cebu_categories';
        $this->columns    = array('cat_id','cat_name','cat_description',
                                  'cat_header','cat_parent_id','cat_url',
                                  'is_shown');
    }

    

    /**
     * Retrieves All Categories
     *
     * @param	int	$limit		set result limit (optional)
     * @return  array	$result		categories
     * @author	Paul Villacorta		<pwvillacorta@cebudirectories.com>
     */
    public function get_categories($parent_only = false, $limit = null)
    {
        $this->db->from($this->table_name);
        
        if($parent_only == true) {
            $this->db->where('cat_id=cat_parent_id');
            $this->db->orderby('cat_name','ASC');
        } else {
            $this->db->orderby('cat_parent_id','ASC');
        }
        
        if(isset($limit)) {
            $this->db->limit($limit);
        }
        
        $result     = $this->db->get();
	$categories = $result->result_array(FALSE);

	if($parent_only == true) {
	    return $categories;
        }
        
        $newCat = array();
        $j = 0;
        
        // This will format categories into Parent -> array(Childs)
        for($i=0; $i<count($categories); $i++) {
            if($categories[$i]['cat_parent_id'] == $categories[$i]['cat_id']) {
            	$newCat[$j] = $categories[$i];
                $newCat[$j]['child'] = array();
            	$j+=1;
            } else {          
            	$newCat[$j-1]['child'][] = $categories[$i];
            }
        }
        
        // This will sort the array as well as the child 
        // of the parent categories
        usort($newCat, "compare");
        for($i=0; $i<count($newCat); $i++) {
            if(isset($newCat[$i]['child'])) {
                usort($newCat[$i]['child'], "compare");
            }
        }
        
        return $newCat;
    }
    
    /**
     * Get specific Category
     * 
     * @param	int	$id		category id
     * @return 	array	$result		category details
     * @author	Paul Villacorta		<pwvillacorta@cebudirectories.com>
     */
    public function get_category($id)
    {
    	$this->db->from($this->table_name);
    	$this->db->where('id', $id);
    	
    	return $result->result_array(FALSE);
    }
}