<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('blog_m');
		$this->load->model('hp_model');
		$this->load->model('UserModel');
	}

	public function index()
	{
		/*pagination START*/
		$jml_data = $this->blog_m->jml_data('blog');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'blog/index/';
		$config['total_rows'] = $jml_data;
		$config['per_page'] = 5;
		$from =$this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['jml'] = $this->blog_m->data($config['per_page'],$from,'blog');
		/*pagination END*/
		$data['post'] = $this->blog_m->get_post("blog");
		$this->load->view('template/header');
		$this->load->view('blog',$data);
		$this->load->view('template/footer');
	}
	public function createpost()
	{
		if(!$this->UserModel->is_login())
		{
			redirect('login');
		}
		if(isset($_POST['submit']))
		{
			$judul		= $this->input->post('judul');
			$post 		= $this->input->post('isi');
			$slug			= str_replace(" ", "-",$judul);

			$post 		= array(
				'judul' => $judul,
				'post'	=> $post,
				'slug'	=> $slug
			);
			$simpan		= $this->hp_model->simpan('blog',$post);
			if ($simpan) {
				echo "<script type='text/javascript'>alert('Berhasil');</script>";
				redirect('/blog');
			}else{
				echo "<script type='text/javascript'>alert('Gagal');</script>";
				redirect('/blog/createpost');
			}

		}else{
			$this->load->view('template/header');
			$this->load->view('post');
			$this->load->view('template/footer');
		}

	}
	public function update($id,$lug){
		if(!$this->UserModel->is_login())
		{
			redirect('login');
		}
		$data['post'] = $this->blog_m->get_single_post("blog",$id);
		$this->load->view('template/header');
		$this->load->view('update',$data);
		$this->load->view('template/footer');
		if (isset($_POST['update'])) {
			$judul = $this->input->post('judul');
			$isi	 = $this->input->post('post');
			$data = array(
				'judul' => $judul,
				'post'	=> $isi
			);
			if($this->blog_m->update_blog($id,$data)){
				echo '<script>alert("berhasil di update")</script>';
				header("Refresh:0");
			}
		}
	}
	public function delete($id,$lug){
		if(!$this->UserModel->is_login())
		{
			redirect('login');
		}
			if($this->blog_m->delete_blog($id)){
				echo '<script>alert("berhasil di hapus")</script>';
				redirect('blog');
	}
}
	public function tampil($id,$slug)
	{
		$data['post'] = $this->blog_m->get_single_post("blog",$id);
		$this->load->view('template/header');
		$this->load->view('singlepage',$data);
		$this->load->view('template/footer');
	}
}
