<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function get_cards_json()
	{
		$cards = $this->product->get_all_cards();
		$count = count($cards);
		$data = array("cards" => $cards, "count" => $count);
		echo json_encode($data);
	}
	public function get_cards_limit_json($start)
	{
		$int = intval($start);

		$cards = $this->product->get_all_cards_limit($int);
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
	public function get_cards_by_type_limit_json($type, $start) {
		$int = intval($start);

		$cards = $this->product->get_hero_cards_limit($type, $int);
		$count = count($cards);
		$data  = array("cards" => $cards, "count" => $count);
		echo json_encode($data);
	}
	public function admin_products_view() {
		$cards = $this->product->get_all_cards_for_admin();
	    $this->load->view('admin_products', array('cards' => $cards));
	    // echo json_encode($cards);
	}
	public function admin_products() {
		redirect('admin_products');
	}
	public function admin_edit_single_card($card_id) {
		$cards = get_single_card_for_admin($card_id);
		$this->load->view('admin_products_edit', array('cards' => $cards));
	}
	public function add_card_to_cart($api_id)
	{
		$session_id = $this->session->userdata['session_id'];
		$post = $this->input->post();
		$cart_total = $this->product->add_cart($post, $session_id);
		$this->session->set_flashdata('added', 'Item added to cart.');
		$array = array('count' => $cart_total['Cart_Total']);
 	 	$this->session->set_userdata($array);
		redirect("/product_description/".$api_id);
	}
	public function remove_item($cart_id)
	{
		$session_id = $this->session->userdata['session_id'];
		$cart_total = $this->product->remove_from_cart($session_id, $cart_id);
		$array = array('count' => $cart_total['Cart_Total']);
 	 	$this->session->set_userdata($array);
 	 	redirect("/carts");
	}
}
