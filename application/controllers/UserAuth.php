<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAuth extends CI_Controller {
  public function __construct(){
    parent::__construct();
      $this->load->model('UserModel');
  }
  public function register()
  {
    if (!$this->UserModel->is_login()) {
      redirect('login');
    }else{
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
          $token = $_SESSION['token'] = random_string('alnum',16);
          $data = array(
            'username' => $uname,
            'email'    => $email,
            'password' => $pass,
            'token'    => $token
          );
          if($this->UserModel->register($data))
          {
            // echo 'bisa';
            $this->load->library('email');
            $this->email->from('register@andrepelealu.com','Andre Aditya');
            $this->email->to('andre02.9d@gmail.com');
            $this->email->subject('AndrePelealu.com | New User Register');
            $this->email->message("Silahkan Verifikasi user $uname <br>
            <a href='http://andrepelealu.com/verify/$uname/$token'>Klik</a>
            ");
            $this->email->set_mailtype('html');
            if ($this->email->send()) {
              redirect(base_url());
            }else{
              redirect(base_url());
            }
          }
        }
      }
  }
}
  public function verify($uname,$token)
  {
    $data=$this->UserModel->get_user('username',$uname);
    $tokenDB = $data->token;
    $unameDB = $data->username;
    if($tokenDB==$token){
      if($this->UserModel->UpdateRole($unameDB)){
        echo 'bisa';
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
        $cekrole = $this->UserModel->get_user('username',$this->input->post('username'));
        $cekrole = $cekrole->role;
        if($cekrole==1){
          $_SESSION['login'] = TRUE;
          redirect();
          // echo $cekrole;
        }else{
        //   echo 'akun anda belum disetujui oleh Andre';
          // session_start();
          // $_SESSION['login'] = TRUE;
          redirect(base_url());
        }

      }else{
        echo 'pass salah';
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
