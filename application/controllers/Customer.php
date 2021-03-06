<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('customer_model', 'customer');
	}

	public function customer_list(){
        $page_data['page_title'] = get_phrase('store_list');
        $page_data ['customers'] = $this->customer->get_all();
        $this->load->view('customer/index',$page_data);
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
