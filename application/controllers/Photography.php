<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photography extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('photography_model', 'photography_m');
	}
    public function index(){
        $data ['page_title'] = get_phrase('photography');
        $data ['page_width'] = '50';
        $data ['page_name'] = 'photography/index';

        $this->load->view("index",$data);
    }

    public function photograph(){
        $data ['page_name'] = 'photography/photograph';
        $data["page_title"] = "photographer";
        $data ['customers'] = $this->photography_m->get_all();
        $this->theme->load_page($data);
    }
    public function videographer(){
        $data ['page_name'] = 'photography/videographer';
        $data["page_title"] = "videographer";
        $data ['customers'] = $this->photography_m->get_all();
        $this->theme->load_page($data);
    }
    public function entertainment(){
        $data ['page_name'] = 'photography/entertainment';
        $data["page_title"] = "entertainment";
        $data ['customers'] = $this->photography_m->get_all();
        $this->theme->load_page($data);
    }
    public function music(){
        $data ['page_name'] = 'photography/music';
        $data["page_title"] = "music";
        $data ['customers'] = $this->photography_m->get_all();
        $this->theme->load_page($data);
    }
	
}
