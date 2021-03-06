<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	//load all cards to products page and get count of all cards as json obj
	public function get_cards_json() {
		$cards = $this->product->get_all_cards();
		$count = count($cards);
		$data = array("cards" => $cards, "count" => $count);
		echo json_encode($data);
	}

	//used for limiting number of cards per page
	public function get_cards_limit_json($start) {
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
    if($this->session->userdata['user_data'] != 'admin'){
    	$this->session->set_flashdata('admin', 'You must be an logged in admin to access that page.');
      redirect("/");
    }
    else
    {
	    $this->load->view('admin_products');
	  }
	}

	//get all cards for the admin products table as json obj
	public function products_table_json(){
		$cards = $this->product->get_all_cards_for_admin();
		$count = count($cards);
	    $data = array('cards' => $cards, 'count' => $count);
	    echo json_encode($data);
	}

	//also gets all cards but allows for limited viewing in pagination for ADMIN
	public function products_table_limit_json($start){
		$int = intval($start);
		$cards = $this->product->get_all_cards_admin_limit($int);
		$count = count($cards);
	    $data = array('cards' => $cards, 'count' => $count);
	    echo json_encode($data);

	}


	public function admin_products() {
		if($this->session->userdata['user_data'] != 'admin')
		{
    	$this->session->set_flashdata('admin', 'You must be an logged in admin to access that page.');
      redirect("/");
    }
    else
    {
		redirect('admin_products');
    }
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

		// $array = array('count' => $cart_total['Cart_Total']);
 	//  	$this->session->set_userdata($array);

		redirect("/product_description/".$api_id);
	}
	public function remove_item($Card_ID)
	{
		$session_id = $this->session->userdata['session_id'];
		$cart_total = $this->product->remove_from_cart($session_id, $Card_ID);
		$array = array('count' => $cart_total['Cart_Total']);
 	 	$this->session->set_userdata($array);
 	 	redirect("/carts");
	}
}
