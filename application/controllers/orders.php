<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function index() {
    $this->load->view('admin_orders_show');
  }
	public function admin_orders() {
    if($this->session->userdata['user_data'] != 'admin'){
      redirect("/");
    }
    else
    {
	   $orders = $this->order->get_all_orders();
	   $this->load->view('admin_orders', array('orders' => $orders));
    }
  }
  public function show_order($order_id) {
    if($this->session->userdata['user_data'] != 'admin'){
      redirect("/");
    }
    else
    {
  	$order = $this->order->get_one_order_for_show($order_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
    }
  }
  public function set_status_shipped($order_id){
    if($this->session->userdata['user_data'] != 'admin'){
      redirect("/");
    }
    else
    {
  	$this->order->set_status_shipped($order_id);
  	$order = $this->order->get_one_order_for_show($order_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
    }
  }
  public function set_status_in_process($order_id){
    if($this->session->userdata['user_data'] != 'admin'){
      redirect("/");
    }
    else
    {
  	$this->order->set_status_in_process($order_id);
  	$order = $this->order->get_one_order_for_show($order_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
    }
  }
  public function set_status_cancelled($order_id){
    if($this->session->userdata['user_data'] != 'admin'){
      redirect("/");
    }
    else
    {
  	$this->order->set_status_cancelled($order_id);
  	$order = $this->order->get_one_order_for_show($order_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
    }
  }
  public function submit_billing() {
    if($this->session->userdata['user_data'] != 'admin'){
      redirect("/");
    }
    else
    {
    $session_id = $this->session->userdata['session_id'];
    $post = $this->input->post();
    $cust_cart = $this->product->get_cart($session_id);
    $this->order->add_order($post, $cust_cart);
    }
  }
}