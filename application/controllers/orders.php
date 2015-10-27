<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function index() {
    $this->load->view('admin_orders_show');
  }

	public function admin_orders() {
	    //NEED TO LOAD ALL ORDERS
	    $orders['orders'] = $this->order->get_all_orders();
	    // var_dump($orders);
	    $this->load->view('admin_orders', $orders);
  	}

  	public function show_order($order_id) {
  		$order = $this->order->get_one_order_for_show($order_id);
  		$this->load->view('admin_orders_show', array("order_info" => $order));
  	}
  	// public function set_status_shipped($order_id){
  		
  	// }

  	// public function set_status_in_process($order_id){

  	// } 

  	// public function set_status_cancelled($order_id){

  	// }


}