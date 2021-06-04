<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung_zakat extends CI_Controller {

	public function index()
	{
		$data['title'] = "E - Zakat | Zakat Emas";
		$this->load->view('templates_charity/header',$data);
		$this->load->view('charity/zakat_emas');	
		$this->load->view('templates_charity/footer');	
	}

}

/* End of file Hitung_zakat.php */
/* Location: ./application/controllers/home/Hitung_zakat.php */