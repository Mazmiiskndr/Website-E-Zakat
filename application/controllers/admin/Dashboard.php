<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		cek_login();
		cek_user();
	}

	public function index()
	{
		$data['pendapatan'] = $this->transaksi_model->pendapatan();
		$data['jumlah_transaksi'] = $this->transaksi_model->get_jumlah_transaksi();
		$data['jumlah_users'] = $this->users_model->get_jumlah_users();
		$data['jumlah_mustahiq'] = $this->mustahiq_model->get_jumlah_mustahiq();
		$data['muzakki'] = $this->users_model->tampil_data('users')->result();
		$data['transaksi'] = $this->db->query('SELECT * FROM bayar_zakat')->result();
		$data['mustahiq'] = $this->db->query('SELECT * FROM mustahiq m, users u WHERE m.id_users=u.id_users')->result();
		$data['contact'] = $this->users_model->tampil_data('contact')->result();
		$data['title'] = "E - Zakat | Dashboard";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/dashboard');	
		$this->load->view('templates_admin/footer');		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */