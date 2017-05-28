<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends MY_Model {
 
	function __construct(){
		parent::__construct();
        $this->db = $this->load->database('default', TRUE);
		$this->table = 'users';
	}

	public function login($username, $password){
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->from($this->table);
        $result = $this->db->get();
        if($result->num_rows() > 0){
            $user = $result->row();
            $userdata['user'] = array('username' =>$user->username,'id' =>$user->id);
            $this->session->set_userdata($userdata);
            return true;
        }else{
            return false;
        }
    }

    public function update($data, $id){
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }

    public function get_by_cookie($cookie){
        $this->db->where('cookie', $cookie);
        return $this->db->get($this->table);
    }
}
