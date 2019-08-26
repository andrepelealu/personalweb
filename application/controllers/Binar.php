<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Binar extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('blog_m');
		$this->load->model('hp_model');
		$this->load->model('UserModel');
	}

	public function index()
	{
	    $this->load->view('binar');
    }
}