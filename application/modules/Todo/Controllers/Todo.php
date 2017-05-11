<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Todo_model', 'todo_m');
	}

    public function todo_list(){
        $data ['page_name'] = 'todo/todo';
        $data["page_title"] = "todo";
        $data ['customers'] = $this->todo_m->get_all();
        $this->theme->load_page($data);
    }
    public function schedule(){
        $data ['page_name'] = 'todo/schedule';
        $data["page_title"] = "schedule";
        $data ['customers'] = $this->todo_m->get_all();
        $this->theme->load_page($data);
    }

	public function create(){
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
			$this->theme->load_page($data);
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
			$this->theme->load_page($data);
		}
	}
	
}
