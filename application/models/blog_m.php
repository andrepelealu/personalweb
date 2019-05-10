<?php

class blog_m EXTENDS CI_Model{
  public function get_post($data){
    return $this->db->get($data);

  }
  public function jml_data($data){
    return $this->db->get($data)->num_rows();
    }
  public function data($number,$offset,$table){
    return $this->db->get($table,$number,$offset)->result();

  }
}
 ?>
