<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grocery extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Grocery_model', 'grocery_m');
	}

	public function index(){
		$data['page_name'] = 'grocery/index';
		$data["page_title"] = "grocery_list";
		$data['customers'] = $this->grocery_m->get_all();
		$this->theme->load_page($data);
	}

    public function bakery(){
        $data["page_title"] = "bakery_bread";
        $data['customers'] = $this->grocery_m->get_all();
        $this->theme->view('grocery/bakery_bread',$data);
    }
	
}
