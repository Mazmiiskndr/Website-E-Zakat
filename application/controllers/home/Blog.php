<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{

		$data['title'] = "E - Zakat | Blog";
		
		$data['artikel'] = $this->db->query('SELECT * FROM artikel a, users u WHERE a.id_users=u.id_users')->result();
		$this->load->view('templates_charity/header',$data);
		$this->load->view('charity/blog');	
		$this->load->view('templates_charity/footer');	
	}


	public function detail_blog($slug)
	{

		$data['title'] = "E - Zakat | Blog";
		
		$data['detail'] = $this->db->query("SELECT * FROM artikel a, users u WHERE a.id_users=u.id_users AND a.slug_artikel='$slug' ORDER BY id_artikel DESC")->result();
		$this->load->view('templates_charity/header',$data);
		$this->load->view('charity/detail_blog');	
		$this->load->view('templates_charity/footer');	
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/home/Blog.php */