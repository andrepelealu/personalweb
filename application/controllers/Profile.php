<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{

		$this->load->view('template/header');
		$this->load->view('welcome_message');
		$this->load->view('template/footer');
	}
}