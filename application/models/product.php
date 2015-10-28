<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {
	public function get_all_cards() {
		return $this->db->query("SELECT * FROM cards")->result_array();

		// if(pageNum == 1){
		// 	return $this->db->query("SELECT * FROM cards LIMIT (0, 1)")->result_array();			
		// }
	}

	public function get_hero_cards($type) {
		return $this->db->query("SELECT * FROM cards WHERE type = ?", $type)->result_array();
	}

	public function get_all_cards_for_admin(){
		return $this->db->query("SELECT imgGold, id, name, inventory_count, quantity_sold FROM cards")->result_array();
	}

	public function delete_card($card_id) {
		$query  = "DELETE FROM cards WHERE id=?";
		$values = $card_id;
		return $this->db->query($query, $values);
	}

}
