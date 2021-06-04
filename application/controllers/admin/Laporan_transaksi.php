<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		cek_login();
		cek_user();
	}


	public function index()
	{
		
		$dari 		= $this->input->post('dari');
		$sampai 	= $this->input->post('sampai');

		$this->_rules();

		if($this->form_validation->run() == false){
			$data['title'] = "E - Zakat | Laporan Transaksi";
			$this->load->view('templates_admin/header',$data);
			$this->load->view('templates_admin/sidebar');	
			$this->load->view('admin/laporan_transaksi');	
			$this->load->view('templates_admin/footer');	
		}else{
			$data['laporan'] = $this->db->query("SELECT * FROM bayar_zakat tr, users usr WHERE tr.id_users=usr.id_users AND date(tgl_pembayaran) >= '$dari' AND date(tgl_pembayaran) <= '$sampai'")->result();

			$data['title'] = "E - Zakat | Laporan Transaksi";
			$this->load->view('templates_admin/header',$data);
			$this->load->view('templates_admin/sidebar');	
			$this->load->view('admin/tampilkan_laporan_transaksi');	
			$this->load->view('templates_admin/footer');	
		}

	}

	public function print_laporan()
	{
		$dari = $this->input->get('dari');
		$sampai = $this->input->get('sampai');
		$data['title'] = "E - Zakat | Print Laporan Transaksi";
		$data['laporan'] = $this->db->query("SELECT * FROM bayar_zakat tr, users usr WHERE tr.id_users=usr.id_users AND date(tgl_pembayaran) >= '$dari' AND date(tgl_pembayaran) <= '$sampai'")->result();
		


		
		$this->load->view('admin/print_laporan',$data);
		
	}


	public function _rules()
	{
		$this->form_validation->set_rules('dari','Dari Tanggal','required');
		$this->form_validation->set_rules('sampai','Sampai Tanggal','required');
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/admin/Laporan.php */