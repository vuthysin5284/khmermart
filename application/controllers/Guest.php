<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('guest_model', 'guest_m');
	}

	public function index(){
		$data ['page_title'] = get_phrase('guest');
        $data ['page_width'] = '50';
        $data ['page_name'] = 'guest/index';

		$this->load->view("index",$data);
	}


    public function gift(){
        $data["page_title"] = "gift";
        $data ['customers'] = $this->guest_m->get_all();
        $this->load->view("guest/gift",$data);
    }

	
}
