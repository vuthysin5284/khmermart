<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends MY_Model {
 
	function __construct(){
		parent::__construct();
		$this->table = 'users';
	}

	public function login($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        return $this->db->get($this->table);
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
