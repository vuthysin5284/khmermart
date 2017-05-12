<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->db = $this->load->database('default', TRUE);
		if (! $this->session->userdata('logged')) {
            redirect('auth');
        }

	}
}
