<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {
	public function get_all_cards()
	{
		$query = "SELECT *
				  FROM cards";
		return $this->db->query($query)->result_array();
	}

	public function get_card($card_id)
	{

	}
}
