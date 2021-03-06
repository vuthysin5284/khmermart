<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('location_model', 'location_m');
	}

	public function index(){
		$data ['page_title'] = get_phrase('location');
        $data ['page_width'] = '50';
        $data ['page_name'] = 'location/index';

		$this->load->view("index",$data);
	}

    /*
   *	$page_name		=	The name of page
   */
    function new_room($param1 = '',$param2 = '',$param3 = '')
    {
        $obj = new stdClass();
        /*$obj->room_id = $param1;*/
        $page_data["room_detail"] = "";//$this->room_m->get_room_detail($obj);
        $page_data["crud"] = $param2;
        $this->load->view('customer/modal_new_room' ,$page_data);
    }

	
}
