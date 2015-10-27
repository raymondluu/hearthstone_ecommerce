<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function get_cards_json()
	{
		$cards = $this->product->get_all_cards();
		$count = count($cards);
		$data = array("cards" => $cards, "count" => $count); 
		echo json_encode($data);
	}

	public function get_cards_by_type_json($type)
	{
		$cards = $this->product->get_hero_cards($type);
		$count = count($cards);
		$data = array("cards" => $cards, "count" => $count);
		echo json_encode($data);
	}
}