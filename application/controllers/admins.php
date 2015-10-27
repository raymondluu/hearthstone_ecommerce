<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

  public function admin_login()
  {
    $this->load->view('admin_login');
  }
  public function login()
  {
    // $email = $this->input->post('email');
    // $password = $this->input->post('password');
    // $user = $this->lg_model->login($email);
    // if($user && $user['password'] == $password)
    // {
    //   $user = array(
    //       'user_id' => $user['id'],
    //       'user_firstname' => $user['first_name'],
    //       'user_lastname' => $user['last_name'],
    //       'user_email' => $user['email']
    //     );
    //   $this->session->set_userdata($user);
      redirect("/admin_orders");
    // }
    // else
    // {
    //   $this->session->set_flashdata("login_error", "Invalid email or password.");
    //   redirect("/");
    // }
  }
  public function logout()
  {
    $this->session->sess_destroy();
    redirect("/");
  }
  public function admin_orders()
  {
    $this->load->view('admin_orders');
  }
  public function admin_orders_show()
  {
    $this->load->view('admin_orders_show');
  }
  public function admin_products()
  {
    $this->load->view('admin_products');
  }
    public function carts()
  {
    $this->load->view('carts');
  }

}