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

	/*public function create(){
		$data ['page_name'] = 'customer/create';
		if(!empty($this->input->post('submit'))){
			$customer['names'] = $this->input->post('names');
			$customer['businnes_type'] = $this->input->post('businnes_type');
			$customer['home'] = $this->input->post('home');
			$customer['address'] = $this->input->post('address');
			$customer['street'] = $this->input->post('street');
			$customer['phone'] = $this->input->post('phone');
			$customer['open_hour'] = $this->input->post('open_hour');
			$customer['lat'] = $this->input->post('lat');
			$customer['long'] = $this->input->post('long');
			$customer['logo'] = $this->input->post('logo');
			$customer['other'] = $this->input->post('other');
			$customer['social_type'] = $this->input->post('social_type');
			$this->customer->insert($customer);
			$this->index();
		}else{
			$this->load->module('business');
			$data ['business_types'] = $this->business->business_type();
			$this->load->view("index",$data);
		}
	}

	public function update($id){
		$data ['page_name'] = 'customer/edit';
		if(!empty($this->input->post('submit'))){
			$customer['names'] = $this->input->post('names');
			$customer['businnes_type'] = $this->input->post('businnes_type');
			$customer['home'] = $this->input->post('home');
			$customer['address'] = $this->input->post('address');
			$customer['street'] = $this->input->post('street');
			$customer['phone'] = $this->input->post('phone');
			$customer['open_hour'] = $this->input->post('open_hour');
			$customer['lat'] = $this->input->post('lat');
			$customer['long'] = $this->input->post('long');
			$customer['logo'] = $this->input->post('logo');
			$customer['other'] = $this->input->post('other');
			$customer['social_type'] = $this->input->post('social_type');
			$this->customer->upate($customer, $id);
			$this->index();
		}else{
			$this->load->module('business');
			$data['customers'] = $this->customer->find_id($id);
			$data ['business_types'] = $this->business->business_type();
            $this->load->view("index",$data);
		}
	}*/
	
}
