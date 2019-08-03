<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page404 extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('homepage_model');
    $this->load->model('hp_model');
    $this->load->model('UserModel');

  }
  public function index()
  {
    $this->load->view('template/header');
    $this->load->view('page404_view');
    $this->load->view('template/footer');
  }

}
