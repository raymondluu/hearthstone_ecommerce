<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
  public function product_description($card_api_id)
  {
    $card_info = $this->product->get_card_info($card_api_id);
    $related_cards = $this->product->get_cards_set($card_info['cardSet'], $card_api_id);
    $this->load->view('product_description', array(
      'card_info' => $card_info,
      'related_cards' => $related_cards) );
  }
  public function load_api_stuff()
  {
    $this->load->view('api_stuff');
  }
  public function show_cart()
  {
  $session_id = $this->session->userdata['session_id'];
  $cart_info = $this->product->get_cart($session_id);
  $this->load->view('carts', array('cart_info' => $cart_info));
  }
}
