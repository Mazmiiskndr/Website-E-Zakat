<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		cek_login();
		cek_user();
	}

	public function index()
	{
		$data['title'] = "E - Zakat | Data Transaksi";
		$data['transaksi'] = $this->db->query('SELECT * FROM bayar_zakat')->result();
		

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/transaksi');	
		$this->load->view('templates_admin/footer');		
	}

	public function cek_pembayaran($id)
	{
		$data['title'] = "E - Zakat | Cek Pembayaran";
		$data['detail'] = $this->bayar_zakat_model->ambil_id_bayar_zakat($id);
		

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/cek_pembayaran');	
		$this->load->view('templates_admin/footer');		
	}

	public function cek_pembayaran_aksi()
	{
		$id_bayar_zakat 			= $this->input->post('id_bayar_zakat');
		$status_pembayaran 		= $this->input->post('status_pembayaran');

		$data = array('status_pembayaran' 	=> $status_pembayaran,);		

		$where = array('id_bayar_zakat' => $id_bayar_zakat);

		$this->transaksi_model->update_data($where,$data,'bayar_zakat');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible show fade">
			Pembayaran Berhasil di <strong>Konfirmasi!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			'); 
		redirect('admin/transaksi');

	}

	public function download_bukti_pembayaran($id)
	{ 
		$this->load->helper('download');
		$filePembayaran = $this->transaksi_model->downloadPembayaran($id);
		$file = 'assets/uploads/bukti_pembayaran/'.$filePembayaran['bukti_pembayaran'];
		force_download($file, null);
	}

	public function delete_transaksi($id)
	{
		$where = array('id_transaksi' => $id);
		$this->transaksi_model->hapus_data($where,'transaksi');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible show fade">
			Data Transaksi Berhasil di <strong>Hapus!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			');
		redirect('admin/transaksi');
	}
}

/* End of file Transaksi.php */
/* Location: ./application/controllers/admin/Transaksi.php */