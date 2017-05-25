<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beverage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('beverage_model', 'beverage_m');
	}

	public function index(){
		$data['page_name'] = 'beverage/index';
		$data ['page_width'] = '50';
		$data["page_title"] = get_phrase("categories");
		$this->load->view("index",$data);
	}

    public function bakery(){
        $data["page_title"] = "bakery_bread";
        $this->load->view('beverage/bakery_bread',$data);
    }
	
}
