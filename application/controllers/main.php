<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
  public function product_description()
  {
    $this->load->view('product_description');
  }
}
