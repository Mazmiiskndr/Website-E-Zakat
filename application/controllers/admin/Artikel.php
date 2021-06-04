<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		cek_login();
		cek_user();
	}

	public function index()
	{
		
		$data['title'] = "E - Zakat | Data Artikel";
		$data['artikel'] = $this->db->query('SELECT * FROM artikel a, mustahiq m, users u WHERE a.id_users=u.id_users AND a.nama_mustahiq=a.nama_mustahiq')->result();

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/artikel');	
		$this->load->view('templates_admin/footer');		
	}

	public function tambah_data_artikel()
	{
		$data['title'] = "E - Zakat | Tambah Data Artikel";
		$data['mustahiq'] = $this->mustahiq_model->tampil_data('mustahiq')->result();

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/tambah_artikel');	
		$this->load->view('templates_admin/footer');		
	}

	public function tambah_artikel_aksi()
	{

		$id_users 				= '1';
		$judul_artikel 			= htmlspecialchars($this->input->post('judul_artikel'));

		$slug_artikel 			= $this->input->post('slug_artikel');
		$deskripsi_artikel 		= $this->input->post('deskripsi_artikel');
		$nama_mustahiq 			= htmlspecialchars($this->input->post('nama_mustahiq'));

		$gambar 		= $_FILES['gambar']['name'];

		if($gambar){
			$config ['upload_path'] = './assets/uploads/artikel';
			$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('gambar') ){
				$gambar = $this->upload->data('file_name');
				$this->db->set('gambar',$gambar);
			}else{
				echo "Photo Artkel Gagal Diupload!";

			}
		}



		$data = array(
			'id_users' 			=> 1,
			'judul_artikel' 	=> $judul_artikel,
			'slug_artikel' 		=> $slug_artikel,
			'deskripsi_artikel' => $deskripsi_artikel,
			'nama_mustahiq' 	=> $nama_mustahiq,
			'gambar' 			=> $gambar,
		);

		$this->artikel_model->insert_artikel($data,'artikel');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible show fade">
			Data Artikel Berhasil di <strong>Tambahkan!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			');
		redirect('admin/artikel');
	}


	public function edit_artikel()
	{
		$data['title'] = "E - Zakat | Edit Data Artikel";
		$data['detail'] = $this->db->query('SELECT * FROM artikel a, mustahiq m, users u WHERE a.id_users=u.id_users AND a.nama_mustahiq=a.nama_mustahiq')->result();
		$data['mustahiq'] = $this->mustahiq_model->tampil_data('mustahiq')->result();

		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');	
		$this->load->view('admin/edit_artikel');	
		$this->load->view('templates_admin/footer');		
	}


	public function update_artikel_aksi()
	{
		
		$id_artikel				= $this->input->post('id_artikel');
		$id_users 				= '1';
		$judul_artikel 			= htmlspecialchars($this->input->post('judul_artikel'));

		$slug_artikel 			= $this->input->post('slug_artikel');
		$deskripsi_artikel 		= $this->input->post('deskripsi_artikel');
		$nama_mustahiq 			= htmlspecialchars($this->input->post('nama_mustahiq'));

		$gambar 				= $_FILES['gambar']['name'];

		if($gambar){
			$config ['upload_path'] = './assets/uploads/artikel';
			$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('gambar') ){
				$gambar = $this->upload->data('file_name');
				$this->db->set('gambar',$gambar);
			}else{
				echo "Photo Artkel Gagal Diupload!";

			}
		}



		$data = array(
			'id_users' 			=> 1,
			'judul_artikel' 	=> $judul_artikel,
			'slug_artikel' 		=> $slug_artikel,
			'deskripsi_artikel' => $deskripsi_artikel,
			'nama_mustahiq' 	=> $nama_mustahiq,
		);
		

		$where = array('id_artikel' => $id_artikel);

		$this->artikel_model->update_data($where,$data,'artikel');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible show fade">
			Data Artikel Berhasil di <strong>Update!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			'); 
		redirect('admin/artikel');

	}



	public function delete_artikel($id)
	{
		$where = array('id_artikel' => $id);
		$this->artikel_model->hapus_data($where,'artikel');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible show fade">
			Data Artikel Berhasil di <strong>Hapus!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			');
		redirect('admin/artikel');
	}



}

/* End of file Artikel.php */
/* Location: ./application/controllers/admin/Artikel.php */