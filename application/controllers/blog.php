<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index()
	{
		public __contruct(){
      $this->load->model('blog');
    }
    
		$this->load->view('welcome_message',$data);
	}
}
