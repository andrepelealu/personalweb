<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('blog_m');
		$this->load->model('homepage_model');
	}
	public function index()
	{
		/*pagination START*/
		$jml_data = $this->blog_m->jml_data('blog');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'blog/index/';
		$config['total_rows'] = $jml_data;
		$config['per_page'] = 10;
		$from =$this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['jml'] = $this->blog_m->data($config['per_page'],$from,'blog');
		/*pagination END*/
		$data['post'] = $this->blog_m->get_post("blog");
		$this->load->view('template/header_blog');
		$this->load->view('blog',$data);
		$this->load->view('template/footer_blog');
	}
	public function createpost()
	{
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
			$simpan		= $this->homepage_model->simpan('blog',$post);
			if ($simpan) {
				echo "<script type='text/javascript'>alert('Berhasil');</script>";
				redirect('/blog/createpost');
			}else{
				echo "<script type='text/javascript'>alert('Gagal');</script>";
				redirect('/blog/createpost');
			}

		}else{
			$this->load->view('template/header_blog');
			$this->load->view('post');
			$this->load->view('template/footer_blog');
		}

	}
	public function tampil($slug)
	{
		$data['post'] = $this->blog_m->get_single_post("blog",$slug);
		$this->load->view('template/header_blog');
		$this->load->view('singlepage',$data);
		$this->load->view('template/footer_blog');
	}
}
