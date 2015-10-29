<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function index() {
    $this->load->view('admin_orders_show');
  }
	public function admin_orders() {
	   $orders['orders'] = $this->order->get_all_orders();
	   $this->load->view('admin_orders', $orders);
  }
  public function show_order($order_id) {
  	$order = $this->order->get_one_order_for_show($order_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
  }
  public function set_status_shipped($order_id){
  	$this->order->set_status_shipped($order_id);
  	$order = $this->order->get_one_order_for_show($order_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
  }
  public function set_status_in_process($order_id){
  	$this->order->set_status_in_process($order_id);
  	$order = $this->order->get_one_order_for_show($order_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
  }
  public function set_status_cancelled($order_id){
  	$this->order->set_status_cancelled($order_id);
  	$order = $this->order->get_one_order_for_show($order_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
  }
  public function submit_billing() {
    var_dump($this->input->post());
    var_dump($this->session->userdata['session_id']);
  }
}