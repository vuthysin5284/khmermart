<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->model('Auth_model', 'auth_m');
	}

	public function index(){
        $data['page_name'] = 'shop/index';
        $data["page_title"] = "shopping_list";
		$this->load->view('auth/index');
	}

	public function login(){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $result   = $this->auth_m->login($username,$password);
        if($result){
        	redirect(base_url());	
        }else{
        	$this->index();
        }
	}

	public function logout(){
		$this->session->unset_userdata('user');
		redirect('auth');
	}

}
