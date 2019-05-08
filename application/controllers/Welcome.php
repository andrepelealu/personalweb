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
			$data = array(
				'nama' => $nama,
				'pesan'=> $pesan
			);
			var_dump($data);
			$simpan = $this->homepage_model->simpan('komen',$data);
			if($simpan){
				echo "<script type='text/javascript'>alert('Berhasil');</script>";
				$komen = true;
				redirect('/',$komen);
			}else{
				var_dump($simpan);
				echo 'gagal';
			}
		}else{
			redirect('/');
		}

	}
}
