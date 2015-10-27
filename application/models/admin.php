<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model
{


	public function login($post)
	{
  			// var_dump($this->input->post());
		// die();
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|md5");
		// RUN VALIDATIONS
		if($this->form_validation->run() === false) {
			// send back errors
			// var_dump(validation_errors());
			// die();
			$this->session->set_flashdata("login_errors", validation_errors());
		} else {
			// select the admin
			$query = "SELECT id FROM admin WHERE email = ? AND password = ?";
			$values = array($post["email"], $post["password"]);
			$admin = $this->db->query($query,$values)->row_array();
			if(!empty($admin)) {
				// admin found - set userdata
				$this->session->set_userdata("id", $admin["id"]);
				return true;
			} else {
				// no admin found
				$this->session->set_flashdata("login_errors", "<p>Invalid credentials.</p>");
				return false;
			}
		}
	}

}


