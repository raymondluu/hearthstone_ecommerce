<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

  public function index() {
    $this->load->view('admin_login');
  }

  public function login($post) {
    // var_dump($this->input->post());
    // die();
    if($this->admin->login($this->input->post())) {
      // true: user found
      redirect("/admin_orders");
    } else {
      // false: user not found
      redirect("/admin_login");
    }
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect("/");
  }
  
  public function admin_orders_show() {
    $this->load->view('admin_orders_show');
  }
  
  
  public function carts() {
    $this->load->view('carts');
  }

}