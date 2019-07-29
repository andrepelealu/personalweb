<?php


class homepage_model EXTENDS CI_Model
{
  
   function ambil(){

     return $this->db->get('homepage');
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
