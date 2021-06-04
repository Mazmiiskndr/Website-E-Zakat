<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct()
	{
		parent::__construct();  
		cek_login();
		cek_user();
	}

	public function index()
	{
		$data['title'] = "E - Zakat | Data Contact";
		$data['contact'] = $this->users_model->tampil_data('contact')->result();
		

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/contact');	
		$this->load->view('templates_admin/footer');		
	}

	public function delete_contact($id)
	{
		$where = array('id_contact' => $id);
		$this->users_model->hapus_data($where,'contact');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible show fade">
			Data Contact Berhasil di <strong>Hapus!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			');
		redirect('admin/contact');
	}

	public function detail_contact($id)
	{
		$data['title'] = "E - Zakat | Data Contact";
		$data['detail'] = $this->db->query("SELECT * FROM contact WHERE contact.id_contact='$id' ORDER BY id_contact DESC")->result();
		

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/detail_contact');	
		$this->load->view('templates_admin/footer');		
	}

}

/* End of file Muzakki.php */
/* Location: ./application/controllers/admin/Muzakki.php */