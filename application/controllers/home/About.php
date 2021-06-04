<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['title'] = "E - Zakat | About";
		$this->load->view('templates_charity/header',$data);
		$this->load->view('charity/about');	
		$this->load->view('templates_charity/footer');	
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/home/Blog.php */