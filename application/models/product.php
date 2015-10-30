<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {
	public function get_all_cards() {
		return $this->db->query("SELECT * FROM cards")->result_array();
	}

	public function get_all_cards_limit($start) {
		return $this->db->query("SELECT * FROM cards LIMIT ?, 20", $start)->result_array();
	}

	public function get_hero_cards($type) {
		return $this->db->query("SELECT * FROM cards WHERE type = ?", $type)->result_array();
	}

	public function get_hero_cards_limit($type, $start) {
		return $this->db->query("SELECT * FROM cards WHERE type = ? LIMIT ?, 20", array($type, $start))->result_array();
	}

	public function get_all_cards_for_admin(){
		return $this->db->query("SELECT img, id, name, inventory_count, quantity_sold FROM cards")->result_array();
	}

	public function get_all_cards_admin_limit($start) {
		return $this->db->query("SELECT img, id, name, inventory_count, quantity_sold FROM cards LIMIT ?, 20", $start)->result_array();
	}

	// public function delete_card($card_id) {
	// 	$query  = "DELETE FROM cards WHERE id=?";
	// 	$values = $card_id;
	// 	return $this->db->query($query, $values);
	// }

	public function get_card_info($card_api_id) {
		return $this->db->query("SELECT * FROM cards WHERE api_id = ?", $card_api_id) -> row_array();
	}

	public function get_cards_set($cardType, $card_api_id) {
		$values = array($cardType, $card_api_id);
		return $this->db->query("SELECT * FROM cards WHERE type = ? AND api_id != ? LIMIT 9", $values) -> result_array();
	}

	public function get_single_card_for_admin($card_id) {
		$query  = "SELECT FROM cards WHERE id=?";
		$values = $card_id;
		return $this->db->query($query, $values);
	}

	public function add_cart($post, $session_id) {
		$query = "INSERT INTO cart (session_id, card_id, card_quantity)
		VALUES(?, ?, ?)";
		$values = array($session_id, $post['card_id'], $post['card_count']);
		$this->db->query($query, $values);

		$query2 = "SELECT SUM(cart.card_quantity) AS Cart_Total from cart
							WHERE session_id = ?";
		$values = $session_id;
		return $this->db->query($query2, $values)->row_array();
	}

	public function get_cart($session_id) {

		$query = "SELECT session_id, cart.id AS Cart_ID, cards.id AS Card_ID, SUM(card_quantity) AS card_quantity, cards.name, cards.price FROM cart
							JOIN cards
							ON cart.card_id = cards.id
							WHERE cart.session_id = ?
							GROUP BY cart.card_id";

		$value = $session_id;
		return $this->db->query($query, $value)->result_array();
	}
	public function remove_from_cart($session_id, $card_id)
	{
		$query = "DELETE FROM cart WHERE card_id = ? AND session_id = ?";
		$values = array($card_id, $session_id);
		$this->db->query($query, $values);

		$query2 = "SELECT SUM(cart.card_quantity) AS Cart_Total from cart
							WHERE session_id = ?";
		$values = $session_id;
		return $this->db->query($query2, $values)->row_array();
	}

}
