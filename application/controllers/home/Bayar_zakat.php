<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayar_zakat extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('email_users')){
			$this->session->set_flashdata('pesan','
				<div style="color: red;" class="alert alert-danger alert-dismissible fade show" role="alert">
				Anda Belum <strong>Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('auth/login');
			
		}
		$data['title'] = "E - Zakat | Bayar Zakat";
		$this->load->view('templates_charity/header',$data);
		$this->load->view('charity/bayar_zakat');	
		$this->load->view('templates_charity/footer');	
		
		
	}

	public function bayar_zakat_aksi()
	{
		$id_users 		= $this->session->userdata('id_users');
		$no_transaksi 	= $this->input->post('no_transaksi');
		$nama 			= htmlspecialchars($this->input->post('nama'));
		$jenis_zakat 	= htmlspecialchars($this->input->post('jenis_zakat'));
		$tgl_pembayaran = $this->input->post('tgl_pembayaran');;
		// $jumlah_bayar 	= htmlspecialchars($this->input->post('jumlah_bayar'));


		$data = array(
			'id_users' 		=> $id_users,
			'no_transaksi' 	=> $no_transaksi,
			'nama' 			=> $nama,
			'tgl_pembayaran' => $tgl_pembayaran,
			'jenis_zakat' 	=> $jenis_zakat
			// 'jumlah_bayar' 	=> $jumlah_bayar,
		);

		$this->bayar_zakat_model->insert_bayar_zakat($data,'bayar_zakat');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible show fade">
			Transaksi Zakat Berhasil di <strong>Konfirmasi!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			');
		redirect('home/bayar_zakat/transaksi_zakat');
	}

	public function transaksi_zakat()
	{
		if(!$this->session->userdata('email_users')){
			$this->session->set_flashdata('pesan','
				<div style="color: red;" class="alert alert-danger alert-dismissible fade show" role="alert">
				Anda Belum <strong>Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('auth/login');
			
		}
		$users = $this->session->userdata('id_users');
		$data['title'] = "E - Zakat | Pembayaran Zakat";
		$data['bayar_zakat'] = $this->db->query("SELECT * FROM bayar_zakat bz WHERE bz.id_users='$users'")->result();
		$this->load->view('templates_charity/header',$data);
		$this->load->view('charity/transaksi_zakat');	
		$this->load->view('templates_charity/footer');	
		
		
	}

	public function konfirmasi_zakat($id)
	{
		if(!$this->session->userdata('email_users')){
			$this->session->set_flashdata('pesan','
				<div style="color: red;" class="alert alert-danger alert-dismissible fade show" role="alert">
				Anda Belum <strong>Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('auth/login');
			
		}
		$data['title'] = "E - Zakat | Konfirmasi Zakat";
		$data['konfirmasi'] = $this->bayar_zakat_model->ambil_id_bayar_zakat($id);
		$this->load->view('templates_charity/header',$data);
		$this->load->view('charity/konfirmasi_zakat');	
		$this->load->view('templates_charity/footer');	
		
		
	}

	public function konfirmasi_zakat_aksi()
	{
		$id_bayar_zakat 	= $this->input->post('id_bayar_zakat');
		$jumlah_zakat 		= $this->input->post('jumlah_zakat');
		$harga 				= $this->input->post('harga');

		$data = array(
			'jumlah_zakat' 		=> $jumlah_zakat,
			'harga' 			=> $harga,
		);		

		$where = array('id_bayar_zakat' => $id_bayar_zakat);

		$this->bayar_zakat_model->update_data($where,$data,'bayar_zakat');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible show fade">
			Transaksi Zakat Berhasil di <strong>Konfirmasi!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			'); 
		redirect('home/bayar_zakat/transaksi_zakat');

	}


	public function bayar($id)
	{
		if(!$this->session->userdata('email_users')){
			$this->session->set_flashdata('pesan','
				<div style="color: red;" class="alert alert-danger alert-dismissible fade show" role="alert">
				Anda Belum <strong>Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('auth/login');
			
		}
		$result = $this->bank_model->get_site_data()->row_array();
		$data['id_bank'] = $result['id_bank'];
		$data['nomor_rekening'] = $result['nomor_rekening'];
		$data['nama_rekening'] = $result['nama_rekening'];
		$data['nama_bank'] = $result['nama_bank'];
		$data['title'] = "E - Zakat | Bayar Zakat";
		$data['bayar'] = $this->bayar_zakat_model->ambil_id_bayar_zakat($id);
		$this->load->view('templates_charity/header',$data);
		$this->load->view('charity/bayar');	
		$this->load->view('templates_charity/footer');	
		
		
	}


	public function pembayaran_zakat_aksi()
	{
		
		$id_bayar_zakat			= $this->input->post('id_bayar_zakat');
		$nama_bank 				= htmlspecialchars($this->input->post('nama_bank'));
		$nama_rekening 			= htmlspecialchars($this->input->post('nama_rekening'));
		$nomor_rekening 		= htmlspecialchars($this->input->post('nomor_rekening'));
		$jumlah_transfer 		= $this->input->post('jumlah_transfer');
		$bukti_pembayaran 				= $_FILES['bukti_pembayaran']['name'];

		if($bukti_pembayaran){
			$config ['upload_path'] = './assets/uploads/bukti_pembayaran';
			$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

			$this->load->library('upload', $config);

			if( $this->upload->do_upload('bukti_pembayaran') ){
				$bukti_pembayaran = $this->upload->data('file_name');
				$this->db->set('bukti_pembayaran',$bukti_pembayaran);
			}else{
				echo "Photo Bukti Pembayaran Gagal Diupload!";

			}
		}



		$data = array(
			'nama_bank' 		=> $nama_bank,
			'nama_rekening' 	=> $nama_rekening,
			'nomor_rekening' 	=> $nomor_rekening,
			'jumlah_transfer' 	=> preg_replace("/[^0-9]/", "", $jumlah_transfer),
			'status_pembayaran' => 2,
		);
		

		$where = array('id_bayar_zakat' => $id_bayar_zakat);

		$this->bayar_zakat_model->update_data($where,$data,'bayar_zakat');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-success alert-dismissible show fade">
			Transaksi Berhasil di <strong>Konfirmasi!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			'); 
		redirect('home/bayar_zakat/transaksi_zakat');

	}


	public function batal_transaksi($id)
	{
		$where = array('id_bayar_zakat' => $id);
		$this->bayar_zakat_model->hapus_data($where,'bayar_zakat');
		$this->session->set_flashdata('pesan','
			<div class="alert alert-danger alert-dismissible show fade">
			Transaksi Berhasil di <strong>Batalkan!</strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			');
		redirect('home/bayar_zakat/transaksi_zakat');
	}





}

/* End of file Hitung_zakat.php */
/* Location: ./application/controllers/home/Hitung_zakat.php */