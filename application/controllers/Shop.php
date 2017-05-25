<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('shop_model', 'shop_m');
	}

    public function index(){
        $data['page_name'] = 'shop/index';
        $data["page_title"] = get_phrase("shopping_list");
        $data['customers'] = $this->shop_m->get_all();
        $this->load->view('index',$data);
    }
    public function caterer(){
        $data["page_title"] = "caterer";
        $data ['customers'] = $this->shop_m->get_all();
        $this->load->view("shop/caterer",$data);
    }
    public function cake(){
        $data["page_title"] = "cake";
        $data ['customers'] = $this->shop_m->get_all();
        $this->load->view("shop/cake",$data);
    }

	
}
