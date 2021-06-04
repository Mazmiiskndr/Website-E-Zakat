<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		cek_login();
		cek_user();
	}

	public function index()
	{
		$result = $this->bank_model->get_site_data()->row_array();
		$data['id_bank'] = $result['id_bank'];
		$data['nomor_rekening'] = $result['nomor_rekening'];
		$data['nama_rekening'] = $result['nama_rekening'];
		$data['nama_bank'] = $result['nama_bank'];
		$data['title'] = "Data Bank | Rental Mobil";
		$data['title'] = "E - Zakat | Data Bank";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/bank');	
		$this->load->view('templates_admin/footer');
	}


	public function update_bank_aksi()
	{
		$id_bank 			= $this->input->post('id_bank');
		$nama_bank 			= htmlspecialchars($this->input->post('nama_bank'));
		$nama_rekening 		= htmlspecialchars($this->input->post('nama_rekening'));
		$nomor_rekening 	= htmlspecialchars($this->input->post('nomor_rekening'));

		$data = array(
			'nama_bank' 		=> $nama_bank,
			'nama_rekening' 	=> $nama_rekening,
			'nomor_rekening' 	=> $nomor_rekening,



		);		

		$where = array('id_bank' => $id_bank);

		$this->bank_model->update_data($where,$data,'bank');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible show fade">
			Data Bank Berhasil di <strong>Update!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			'); 
		redirect('admin/bank');

	}

}

/* End of file Bank.php */
/* Location: ./application/controllers/admin/Bank.php */