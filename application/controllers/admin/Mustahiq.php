<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mustahiq extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		cek_login();
		cek_user();
	}

	public function index()
	{
		$data['title'] = "E - Zakat | Data Mustahiq";
		$data['mustahiq'] = $this->db->query('SELECT * FROM mustahiq m, users u WHERE m.id_users=u.id_users')->result();
		

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/mustahiq');	
		$this->load->view('templates_admin/footer');		
	}

	public function tambah_data_mustahiq()
	{
		$data['title'] = "E - Zakat | Tambah Data Mustahiq";

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/tambah_mustahiq');	
		$this->load->view('templates_admin/footer');		
	}


	public function tambah_mustahiq_aksi()
	{

		
		$id_users 			= $this->input->post('id_users');
		$nama_penerima 		= htmlspecialchars($this->input->post('nama_penerima'));
		$nama_yayasan 		= htmlspecialchars($this->input->post('nama_yayasan'));
		$alamat_mustahiq 	= htmlspecialchars($this->input->post('alamat_mustahiq'));
		$jumlah_zakat 		= htmlspecialchars($this->input->post('jumlah_zakat'));
		$tgl_penyaluran 	= $this->input->post('tgl_penyaluran');

		$data = array(
			'id_users' 			=> 1,
			'nama_penerima' 	=> $nama_penerima,
			'nama_yayasan' 		=> $nama_yayasan,
			'alamat_mustahiq' 	=> $alamat_mustahiq,
			'jumlah_zakat' 		=> $jumlah_zakat,
			'tgl_penyaluran' 	=> $tgl_penyaluran



		);

		$this->mustahiq_model->insert_mustahiq($data,'mustahiq');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible show fade">
			Data Mustahiq Berhasil di <strong>Tambahkan!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			');
		redirect('admin/mustahiq');

	}

	public function edit_mustahiq($id)
	{
		$data['title'] = "E - Zakat | Edit Data Artikel";
		$data['detail'] = $this->db->query("SELECT * FROM mustahiq m WHERE id_mustahiq='$id' ORDER BY id_mustahiq DESC")->result();

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/edit_mustahiq');	
		$this->load->view('templates_admin/footer');		
	}


	public function update_mustahiq_aksi()
	{
		$id_mustahiq 			= $this->input->post('id_mustahiq');
		$id_users 			= $this->input->post('id_users');
		$nama_penerima 		= htmlspecialchars($this->input->post('nama_penerima'));
		$nama_yayasan 		= htmlspecialchars($this->input->post('nama_yayasan'));
		$alamat_mustahiq 	= htmlspecialchars($this->input->post('alamat_mustahiq'));
		$jumlah_zakat 		= htmlspecialchars($this->input->post('jumlah_zakat'));
		$tgl_penyaluran 	= $this->input->post('tgl_penyaluran');

		$data = array(
			'id_users' 			=> 1,
			'nama_penerima' 	=> $nama_penerima,
			'nama_yayasan' 		=> $nama_yayasan,
			'alamat_mustahiq' 	=> $alamat_mustahiq,
			'jumlah_zakat' 		=> $jumlah_zakat,
			'tgl_penyaluran' 	=> $tgl_penyaluran



		);		

		$where = array('id_mustahiq' => $id_mustahiq);

		$this->mustahiq_model->update_data($where,$data,'mustahiq');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible show fade">
			Data Mustahiq Berhasil di <strong>Update!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			'); 
		redirect('admin/mustahiq');

	}



	public function delete_mustahiq($id)
	{
		$where = array('id_mustahiq' => $id);
		$this->mustahiq_model->hapus_data($where,'mustahiq');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible show fade">
			Data Mustahiq Berhasil di <strong>Hapus!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			');
		redirect('admin/mustahiq');
	}

}

/* End of file Muzakki.php */
/* Location: ./application/controllers/admin/Muzakki.php */