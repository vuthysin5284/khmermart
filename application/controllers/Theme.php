<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('index');
	}

	public function load_page($data){
		$this->load->view('index', $data);
	}
    public function view($view,$data){
        $this->load->view($view, $data);
    }
}
