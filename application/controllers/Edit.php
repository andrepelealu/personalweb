<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('homepage_model');
    $this->load->model('hp_model');
    $this->load->model('UserModel');

  }

  public function index()
  {
    if (!$this->UserModel->is_login()) {
      redirect('login');
    }else{
      if(isset($_POST['submit']))
      {
        $title_header		     = $this->input->post('title_utama');
        $subtitle_header 		 = $this->input->post('sub_title');
        $desctitle_header     = $this->input->post('desc_title');
        $teks_header       	 = $this->input->post('teks');
        ///content section
        $title_perkenalan  	 = $this->input->post('title_perkenalan');
        $sec_title        	 = $this->input->post('sec_title');
        $content_perkenalan	 = $this->input->post('content_perkenalan');
        $title_sec2          	 = $this->input->post('title_sec2');
        $content_quotes   	 = $this->input->post('content_quotes');
        $title_sec3       	 = $this->input->post('title_sec3');
        $content_sec3   	     = $this->input->post('content_sec3');

        $post 		           = array(
          'title_header'      => $title_header,
          'subtitle_header'	  => $subtitle_header,
          'desc_header'	      => $desctitle_header,
          'teks_header'       => $teks_header,
          'title_perkenalan'  => $title_perkenalan,
          'sec_title'         => $sec_title,
          'content_perkenalan'=> $content_perkenalan,
          'title_sec2'        => $title_sec2,
          'content_quotes'    => $content_quotes,
          'title_sec3'        => $title_sec3,
          'content_sec3'      => $content_sec3
        );
  $edit = $this->hp_model->edit_header('homepage',$post);
  if ($edit) {
  echo '<script>alert("Berhasil di update !");</script>';

  }else{
  echo '<script>alert("Gagal di update !");</script>';
  }
  }
    //
    $data['content'] = $this->homepage_model->ambil();
    $this->load->view('template/header');
    $this->load->view('edit_header',$data);
    $this->load->view('template/footer');
  }
    }

}
