<?php


class homepage_model EXTENDS CI_Model
{
   function ambil(){
     return $this->db->get('homepage');
  }
}

 ?>
