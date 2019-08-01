<?php


class Hp_model EXTENDS CI_Model
{

   function ambil_header(){
      $query = $this->db->get('homepage');
     return $query->row();
  }

  function edit_header($tabel,$data){
    $query = $this->db->update($tabel, $data);
    if($query){
      return TRUE;
    }else{
      return FALSE;
    }
  }
  public function simpan_komen($data){

  }
  function simpan($tabel,$data)
  {
    $simpan=$this->db->insert($tabel,$data);
    if($simpan){
      return true;
    }else{
      return false;
    }
  }
}

 ?>
