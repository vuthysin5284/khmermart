<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Food extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('food_model', 'beverage_m');
	}

	public function index(){
		$data['page_name'] = 'food/index';
		$data ['page_width'] = '50';
		$data["page_title"] = get_phrase("categories");
		$this->load->view("index",$data);
	}

    public function bakery(){
        $data["page_title"] = "food_list";
        $this->load->view('food/food_list',$data);
    }
	
}
