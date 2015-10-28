<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {
	public function get_all_cards()// $pageNum
	{
		return $this->db->query("SELECT * FROM cards")->result_array();

		// if(pageNum == 1){
		// 	return $this->db->query("SELECT * FROM cards LIMIT (0, 1)")->result_array();
		// }
	}

	public function get_hero_cards($type)
	{
		return $this->db->query("SELECT * FROM cards WHERE type = ?", $type)->result_array();
	}
	public function get_card_info($card_api_id)
	{
		return $this->db->query("SELECT * FROM cards WHERE api_id = ?", $card_api_id) -> row_array();
	}
	public function get_cards_set($cardSet, $card_api_id){
		$values = array($cardSet, $card_api_id);
		return $this->db->query("SELECT * FROM cards WHERE cardSet = ? AND api_id != ? LIMIT 5", $values) -> result_array();

	}
}
