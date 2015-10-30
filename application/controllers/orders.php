<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function admin_orders() {

    if($this->session->userdata['user_data'] != 'admin'){
      $this->session->set_flashdata('admin', 'You must be an logged in admin to access that page.');
      redirect("/");
    }
    else
    {
	   $orders = $this->order->get_all_orders();
     // var_dump($orders);
     // die();
	   $this->load->view('admin_orders', array('orders' => $orders));
    }
  }
  public function show_order($session_id) {
    if($this->session->userdata['user_data'] != 'admin'){
      $this->session->set_flashdata('admin', 'You must be an logged in admin to access that page.');
      redirect("/");
    }
    else
    {
  	$order = $this->order->get_one_order_for_show($session_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
    }
  }
  public function set_status_shipped($session_id){
    if($this->session->userdata['user_data'] != 'admin'){
      $this->session->set_flashdata('admin', 'You must be an logged in admin to access that page.');
      redirect("/");
    }
    else
    {
  	$this->order->set_status_shipped($session_id);
  	$order = $this->order->get_one_order_for_show($session_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
    }
  }
  public function set_status_in_process($session_id){
    if($this->session->userdata['user_data'] != 'admin'){
      $this->session->set_flashdata('admin', 'You must be an logged in admin to access that page.');
      redirect("/");
    }
    else
    {
  	$this->order->set_status_in_process($session_id);
  	$order = $this->order->get_one_order_for_show($session_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
    }
  }
  public function set_status_cancelled($session_id){
    if($this->session->userdata['user_data'] != 'admin'){
      $this->session->set_flashdata('admin', 'You must be an logged in admin to access that page.');
      redirect("/");
    }
    else
    {
  	$this->order->set_status_cancelled($session_id);
  	$order = $this->order->get_one_order_for_show($session_id);
  	$this->load->view('admin_orders_show', array("order_info" => $order));
    }
  }
  public function submit_billing() {
    $session_id = $this->session->userdata['session_id'];
    $post = $this->input->post();
    $cust_cart = $this->product->get_cart($session_id);
    $this->order->add_order($post, $cust_cart);
  }
}