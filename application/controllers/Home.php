<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data ['page_title'] = 'Home';
        $data ['page_width'] = '50';
        $data ['page_name'] = 'home/index';
		$this->load->view("index",$data);
	}
}
