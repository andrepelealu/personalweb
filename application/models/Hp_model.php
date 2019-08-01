<?php


class Hp_model EXTENDS CI_Model
{

   function ambil_header(){
      $query = $this->db->get('homepage');
     return $query->row();
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
