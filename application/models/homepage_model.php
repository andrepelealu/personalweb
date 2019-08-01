<?php


class Homepage_model EXTENDS CI_Model
{

   function ambil(){

     $query=$this->db->get('homepage');
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
