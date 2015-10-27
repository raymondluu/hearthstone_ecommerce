<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {
	public function get_all_cards()// $pageNum
	{
		return $this->db->query("SELECT * FROM cards")->result_array();

		// if(pageNum == 1){
		// 	return $this->db->query("SELECT * FROM cards LIMIT (0, 1)")->result_array();			
		// }
	}

	public function get_card($card_id)
	{

	}
}
