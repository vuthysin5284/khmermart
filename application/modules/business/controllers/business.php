<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class business extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('business_model', 'business');
	}

	public function index(){
		$data ['page_name'] = 'business/index';
		$data ['business'] = $this->business->get_all();
		$this->theme->load_page($data);
	}

	public function create(){
		$data ['page_name'] = 'business/create';
		if(!empty($this->input->post('submit'))){
			$business['names'] = $this->input->post('names');
			
		}else{
			$this->theme->load_page($data);
		}
	}

	public function business_type(){
		$this->db->select('id, names');
        $query = $this->db->get('business');
        return $query->result();
	}

	public function delete($id){
		$this->gender->delete($id);
	}
}
