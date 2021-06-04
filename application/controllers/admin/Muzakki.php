<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muzakki extends CI_Controller {
	public function __construct()
	{
		parent::__construct();  
		cek_login();
		cek_user();
	}

	public function index()
	{
		$data['title'] = "E - Zakat | Data Muzakki";
		$data['muzakki'] = $this->users_model->tampil_data('users')->result();
		

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/muzakki');	
		$this->load->view('templates_admin/footer');		
	}

	public function delete_users($id)
	{
		$where = array('id_users' => $id);
		$this->users_model->hapus_data($where,'users');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible show fade">
			Data Muzakki Berhasil di <strong>Hapus!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			');
		redirect('admin/muzakki');
	}

}

/* End of file Muzakki.php */
/* Location: ./application/controllers/admin/Muzakki.php */