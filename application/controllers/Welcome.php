<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('homepage_model');
	}
	public function index()
	{

		$this->load->view('template/header');
		$this->load->view('welcome_message');
		$this->load->view('template/footer');
	}
	public function send(){
		if(isset($_POST['button']))
		{
			$nama = $this->input->post('nama');
			$pesan = $this->input->post('isi');
			// $nama = $this->db->escape($nama);
			// $pesan = $this->db->escape($pesan);
			$data = array(
				'nama' => $nama,
				'pesan'=> $pesan
			);
			// var_dump($data);
			$simpan = $this->homepage_model->simpan('komen',$data);
			if($simpan){
				echo "<script type='text/javascript'>alert('Berhasil');</script>";
				redirect('/');
			}else{
				echo "<script type='text/javascript'>alert('Gagal');</script>";
				redirect('/');
			}
		}else{
			redirect('/');
		}

	}
}
