<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function add(){
		$data = array(
		   "id"  => $this->input->post('id'),
		   "name"  => "ABC",
		   "qty"  => 1,
		   "price"  => 23
		);
		$this->cart->insert($data); //return rowid 
		echo count($this->cart->contents());
	}

	public function remove(){
		$row_id = 1;
		$data = array(
			'id'  => $row_id,
			'qty'  => 0
		);
		$this->cart->update($data);
	}

	public function clear(){
  		$this->cart->destroy();
	}

    /*
   *	$view_item
   */
    function view_item($param1 = '',$param2 = '',$param3 = '')
    {
        $obj = new stdClass();
        /*$obj->room_id = $param1;*/
        $page_data["room_detail"] = "";
        $this->load->view('cart/modal_view_item' ,$page_data);
    }


}
