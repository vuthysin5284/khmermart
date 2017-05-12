<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('shop_model', 'shop_m');
	}

    public function index(){
        $data['page_name'] = 'shop/index';
        $data["page_title"] = "shopping_list";
        $data['customers'] = $this->shop_m->get_all();
        $this->load->view('index',$data);
    }
    public function flower(){
        $data["page_title"] = "flower";
        $data ['customers'] = $this->shop_m->get_all();
        $this->load->view("shop/flower",$data);
    }
    public function cake(){
        $data["page_title"] = "cake";
        $data ['customers'] = $this->shop_m->get_all();
        $this->load->view("shop/cake",$data);
    }
    public function gift(){
        $data["page_title"] = "gift";
        $data ['customers'] = $this->shop_m->get_all();
        $this->load->view("shop/gift",$data);
    }

	
}
