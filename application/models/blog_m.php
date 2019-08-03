<?php

class Blog_m EXTENDS CI_Model{

  public function get_post($data){
    $this->db->order_by("id", "DESC");
    // $query = $this->db->get();
    // return $query->result();
     $query=$this->db->get($data);
    return $query->result_array();

  }
  public function update_blog($id,$data){
    $this->db->where('id',$id);
    $query = $this->db->update('blog',$data);
    if ($query) {
      return TRUE;
    }else{
      return FALSE;
    }
  }
  public function delete_blog($id){
    $this->db->where('id',$id);
    $query = $this->db->delete('blog');
    if ($query) {
      return TRUE;
    }else{
      return FALSE;
    }
  }
  public function get_single_post($data,$id){
     $query=$this->db->get_where($data, array('id' => $id));
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
