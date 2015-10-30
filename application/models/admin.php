<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model
{


	public function login($post)
	{
  			// var_dump($this->input->post());
		// die();
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		// RUN VALIDATIONS
		if($this->form_validation->run() === false) {
			// send back errors
			// var_dump(validation_errors());
			// die();
			$this->session->set_flashdata("login_errors", validation_errors());
			redirect('/admin_login');
		} else {
			// select the admin
			$query = "SELECT id, email FROM admins WHERE email = ? AND password = ?";
			$values = array($post["email"], $post["password"]);
			$admin = $this->db->query($query,$values)->row_array();
			if(!empty($admin)) {
				// admin found - set userdata
				$userdata = array('user_data' => 'admin');
				$this->session->set_userdata($userdata);
				// $this->session->set_userdata($admin["email"], $admin["id"]);
				return true;
			} else {
				// no admin found
				$this->session->set_flashdata("login_errors", "<p>Invalid credentials.</p>");
				return false;
			}
		}
	}

}


