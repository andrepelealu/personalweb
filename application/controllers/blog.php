<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('blog_m');
	}
	public function index()
	{
		/*pagination START*/
		$jml_data = $this->blog_m->jml_data('homepage');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'blog/index/';
		$config['total_rows'] = $jml_data;
		$config['per_page'] = 10;
		$from =$this->uri->segment(3);
		$this->pagination->initialize($config);
		$data['jml'] = $this->blog_m->data($config['per_page'],$from,'homepage');
		/*pagination END*/
		$data['post'] = $this->blog_m->get_post("homepage")->result();
		$this->load->view('template/header_blog');
		$this->load->view('blog',$data);
		$this->load->view('template/footer_blog');
	}
}
