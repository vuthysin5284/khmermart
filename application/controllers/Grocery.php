<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grocery extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Grocery_model', 'grocery_m');
	}

	public function index(){
		$data['page_name'] = 'grocery/index';
		$data["page_title"] = get_phrase("grocery_list");
		$this->load->view("index",$data);
	}

    public function bakery(){
        $data["page_title"] = "bakery_bread";
        $this->load->view('grocery/bakery_bread',$data);
    }
	
}
