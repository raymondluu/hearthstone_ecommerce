<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function get_cards()
	{
		$cards = $this->product->get_all_cards();
		echo json_encode($cards);
	}
}