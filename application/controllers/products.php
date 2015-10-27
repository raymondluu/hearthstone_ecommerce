<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {
	public function get_cards_json()
	{
		$data = $this->product->get_all_cards();
		echo json_encode($data);
	}
}