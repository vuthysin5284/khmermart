<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Todo_model extends CI_Model {
 
	function __construct(){
		parent::__construct();
		$this->table = 'customers';
	}
}
