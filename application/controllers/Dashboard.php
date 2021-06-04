<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{

		$data['title'] = "E - Zakat";
		$data['artikel'] = $this->db->query('SELECT * FROM artikel LIMIT 1')->result();
		$data['users'] = $this->users_model->tampil_data('users')->result();
		$data['post'] = $this->db->query("SELECT * FROM artikel a, users u WHERE a.id_users=u.id_users")->result();
		$data['pendapatan'] = $this->transaksi_model->pendapatan(); 
		$this->load->view('templates_charity/header',$data);
		$this->load->view('charity/index');	
		$this->load->view('templates_charity/footer');	
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */