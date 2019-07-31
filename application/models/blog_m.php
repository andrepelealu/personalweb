<?php

class Blog_m EXTENDS CI_Model{

  public function get_post($data){
    $this->db->order_by("id", "DESC");
    // $query = $this->db->get();
    // return $query->result();
     $query=$this->db->get($data);
    return $query->result_array();

  }
  public function get_single_post($data,$slug){
     $query=$this->db->get_where($data, array('slug' => $slug));
    return $query->row_array();

  }
  public function jml_data($data){
    return $this->db->get($data)->num_rows();
    }
  public function data($number,$offset,$table){
    return $this->db->get($table,$number,$offset)->result();

  }
}
 ?>
