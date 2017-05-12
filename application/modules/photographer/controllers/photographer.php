<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class photographer extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('photographer_model', 'photographer_m');
	}

    public function photograph(){
        $data ['page_name'] = 'photographer/photograph';
        $data["page_title"] = "photographer";
        $data ['customers'] = $this->photographer_m->get_all();
        $this->theme->load_page($data);
    }
    public function videographer(){
        $data ['page_name'] = 'photographer/videographer';
        $data["page_title"] = "videographer";
        $data ['customers'] = $this->photographer_m->get_all();
        $this->theme->load_page($data);
    }
    public function entertainment(){
        $data ['page_name'] = 'photographer/entertainment';
        $data["page_title"] = "entertainment";
        $data ['customers'] = $this->photographer_m->get_all();
        $this->theme->load_page($data);
    }
    public function music(){
        $data ['page_name'] = 'photographer/music';
        $data["page_title"] = "music";
        $data ['customers'] = $this->photographer_m->get_all();
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
