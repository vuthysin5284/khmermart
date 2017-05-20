<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('overview_model', 'overview_m');
	}
    public function index(){
        $data ['page_title'] = get_phrase('overview');
        $data ['page_width'] = '50';
        $data ['page_name'] = 'overview/index';

        $this->load->view("index",$data);
    }

    public function todo_list(){
        $data ['page_name'] = 'overview/todo';
        $data["page_title"] = "todo";
        $data ['todo'] = $this->overview_m->get_all();
        $this->load->view('overview/todo',$data);
    }
    public function schedule(){
        $data ['page_name'] = 'overview/schedule';
        $data["page_title"] = "schedule";
        $data ['schedule'] = $this->overview_m->get_all();
        $this->load->view('overview/schedule',$data);
    }
    public function coordination(){
        $data ['page_name'] = 'overview/coordination';
        $data["page_title"] = "coordination";
        $data ['coordination'] = $this->overview_m->get_all();
        $this->load->view('overview/coordination',$data);
    }

	
}
