<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('hp_model');
  }

  public function editheader()
  {
    if(isset($_POST['submit']))
    {
      $title_header		     = $this->input->post('title_utama');
      $subtitle_header 		 = $this->input->post('sub_title');
      $desctitle_header    = $this->input->post('desc_title');
      $teks_header       	 = $this->input->post('teks');
      $post 		           = array(
        'title_header'     => $title_header,
        'subtitle_header'	 => $subtitle_header,
        'desc_header'	     => $desctitle_header,
        'teks_header'      => $teks_header

      );
    $edit= $this->hp_model->edit_model->editheader('homepage',$post);
    $this->load->view('template/header');
    $this->load->view('edit_header');
    $this->load->view('template/footer');
  }
  public function editcontent()
  {

  }
}
