<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['title'] = "E - Zakat | Contact Us";
		$this->load->view('templates_charity/header',$data);
		$this->load->view('charity/contact');	
		$this->load->view('templates_charity/footer');	
	}


	public function contact_aksi()
	{
		
		$nama 		= htmlspecialchars($this->input->post('nama'));
		$email 		= htmlspecialchars($this->input->post('email'));
		$no_telp 	= htmlspecialchars($this->input->post('no_telp'));
		$deskripsi 	= htmlspecialchars($this->input->post('deskripsi'));
		


		$data = array(
			'nama' 		=> $nama,
			'email' 	=> $email,
			'no_telp' 	=> $no_telp,
			'deskripsi' => $deskripsi
		);

		$this->contact_model->insert_contact($data,'contact');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible show fade">
			Terima kasih telah menghubungi <strong>Kami!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			');
		redirect('home/contact');
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/home/Contact.php */