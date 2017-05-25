<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vegetable extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('vegetable_model', 'vegetable_m');
	}

	public function index(){
		$data['page_name'] = 'vegetable/index';
		$data ['page_width'] = '50';
		$data["page_title"] = get_phrase("categories");
		$this->load->view("index",$data);
	}

    public function bakery(){
        $data["page_title"] = "bakery_bread";
        $this->load->view('vegetable/bakery_bread',$data);
    }
	
}
