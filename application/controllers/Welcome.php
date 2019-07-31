<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('hp_model');
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
			$simpan = $this->hp_model->simpan('komen',$data);
			if($simpan){
				ini_set( 'display_errors', 1 );
		    error_reporting( E_ALL );
		    $from = "kontak-andrepelealu@andrepelealu.com";
		    $to = "andre02.9d@gmail.com";
		    $subject = "[AndrePelealu.com]Ada Pesan baru dari website";
		    $message = "Nama Pengirim :".$nama."| Pesan: ".$pesan;
		    $headers = "From:" . $from;
		    $kirim = mail($to,$subject,$message, $headers);
		    echo "<script type='text/javascript'>alert('Pesan Berhasil Dikirim');</script>";
				if($kirim)
				{
					redirect(base_url());
				}

			}else{
				echo "<script type='text/javascript'>alert('Gagal');</script>";
				redirect('/');
			}
		}else{
			redirect('/');
		}

	}
}
