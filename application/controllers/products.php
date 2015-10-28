<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function get_cards_json() {
		$cards = $this->product->get_all_cards();
		$count = count($cards);
		$data = array("cards" => $cards, "count" => $count);
		echo json_encode($data);
	}

	public function get_cards_by_type_json($type) {
		$cards = $this->product->get_hero_cards($type);
		$count = count($cards);
		$data  = array("cards" => $cards, "count" => $count);
		echo json_encode($data);
	}

	public function admin_products_view() {
		$cards = $this->product->get_all_cards_for_admin();
	    $this->load->view('admin_products', array('cards' => $cards));
	}

	// NEEDS TESTING
	public function delete_card($card_id) {
		echo "done";
	// 	$card =$this->product->delete_card($card_id);
	// 	if(delete_card($card_id)) {
	// 		return json_encode(array("success" => true));
	// 	} 
	}

	public function admin_edit_single_card($card_id) {
		$cards = get_single_card_for_admin($card_id);
		$this->load->view('admin_products_edit', array('cards' => $cards));
	}
}
