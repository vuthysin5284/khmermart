<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Style extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('style_model', 'style_m');
	}

	public function index(){
		$data ['page_title'] = get_phrase('style');
        $data ['page_width'] = '50';
        $data ['page_name'] = 'style/index';

		$this->load->view("index",$data);
	}

    public function attire(){
        $page_data['page_title'] = get_phrase('attire');
        $page_data ['attire'] = $this->style_m->get_all();
        $this->load->view('style/attire',$page_data);
    }
    public function flower(){
        $page_data['page_title'] = get_phrase('flower');
        $page_data ['flower'] = $this->style_m->get_all();
        $this->load->view('style/flower',$page_data);
    }
    public function hair_makeup(){
        $page_data['page_title'] = get_phrase('hair_makeup');
        $page_data ['hair_makeup'] = $this->style_m->get_all();
        $this->load->view('style/hair_makeup',$page_data);
    }

	
}
