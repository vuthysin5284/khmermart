<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends MY_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data ['page_title'] = 'dashboard';
        $data ['page_name'] = 'dashboard/index';
		$this->theme->load_page($data);
	}
}
