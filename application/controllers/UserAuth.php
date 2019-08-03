<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAuth extends CI_Controller {
  public function __construct(){
    parent::__construct();
      $this->load->model('UserModel');
  }
  public function register()
  {

      $this->form_validation->set_rules('username', 'Username','required|is_unique[users.username]');
      $this->form_validation->set_rules('email', 'email','required|is_unique[users.email]');
      $this->form_validation->set_rules('password1', 'Password','required');
      $this->form_validation->set_rules('password2', 'Konfirmasi Password','required|matches[password1]');

      if ($this->form_validation->run() === false) {
        $this->load->view('template/header');
        $this->load->view('register');
        $this->load->view('template/footer');
      }else{
        if(isset($_POST['submit'])){
          $uname = $this->input->post('username');
          $email  = $this->input->post('email');
          $this->load->helper('string');
          $pass  = password_hash($this->input->post('password1'),PASSWORD_DEFAULT);
          $_SESSION['token'] = random_string('alnum',16);
          $data = array(
            'username' => $uname,
            'email'    => $email,
            'password' => $pass,
            'token'    => $_SESSION['token']
          );
          if($this->UserModel->register($data))
          {
            die('bisa');
          }
        }
      }
  }
  public function login()
  {
    $this->form_validation->set_rules('username', 'Username','required');
    $this->form_validation->set_rules('password1', 'Password','required');

    if ($this->form_validation->run() === false) {
      $this->load->view('template/header');
      $this->load->view('login');
      $this->load->view('template/footer');
  }else{
    if(isset($_POST['submit']));
    {
      $pass  = $this->input->post('password1');
      $data= $this->UserModel->login($this->input->post('username'));
      $passdb = $data->password;

      if(password_verify($pass,$passdb)){
        if($this->UserModel->is_login()){
          redirect();
        }else{
          // session_start();
          $_SESSION['login'] = TRUE;
          redirect(base_url());
        }

      }else{
        echo 'gabisa';
      }
    }
  }
}
public function logout()
{
  session_destroy();
  redirect(base_url());
}
}
?>