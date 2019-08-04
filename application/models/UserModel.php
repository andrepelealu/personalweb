<?php

class UserModel EXTENDS CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function register($data){
    $query = $this->db->insert('users',$data);
    if($query){
      return TRUE;
    }else{
      return FALSE;
    }
  }
  public function login($username){
    $query = $this->db->get_where('users',array('username' => $username));
    return $query->row();
  }
  public function is_login(){
    if(isset($_SESSION['login']))
    {
      return true;
    }else{
      return false;
    }
  }
  public function get_user($key,$uname){
    $query = $this->db->get_where('users',array($key=>$uname));
    return $query->row();
  }
  public function UpdateRole($uname){
    $this->db->set('role','1');
    $this->db->where('username',$uname);
    $query = $this->db->update('users');
    if($query)
    {
      return TRUE;
    }else{
      return FALSE;
    }
  }
}
?>
