<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {
 
	var $table = "";
 
    function __construct(){
        parent::__construct();
    }

    function insert($data){
        if($this->db->insert($this->table, $data)){
            return $this->db->insert_id();
        }
        return false;
    }

    function update($id, $data){
        $this->db->where('id', $id);
        if($this->db->update($this->table, $data)){
            return true;
        }
        return false;
    }
 
    function find_id($id){
    	if ($id == NULL){
        	return NULL;
      	}
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function get_all($sort = 'id', $order = 'asc'){
        $this->db->order_by($sort, $order);
        return $this->db->get($this->table)->result();
    }

    function delete($id){
        if ($id != NULL){
            $this->db->where('id', $id);
            if($this->db->delete($this->table)){
                return true;
            }                    
            return false;                        
        }
    }
}