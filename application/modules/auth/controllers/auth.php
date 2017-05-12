<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		$this->load->view('index');
	}

	public function login(){
		$user_session = array('logged'  => TRUE);
		$this->session->set_userdata($user_session);
		redirect(base_url());
	}

	public function logout(){
		$this->session->unset_userdata('logged');
		redirect('auth');
	}

}
