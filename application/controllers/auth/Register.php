<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('email_users')){
			redirect('');
		}
		// $data['title'] = 'Halaman Register';
		// $this->load->view('templates_auth/header',$data);
		// $this->load->view('auth/register');
		// $this->load->view('templates_auth/footer');


		$this->_rules();
		$data['title'] = 'Halaman Register';
			if( $this->form_validation->run() == FALSE ){
			
				$this->load->view('templates_auth/header',$data);
				$this->load->view('auth/register');
				$this->load->view('templates_auth/footer');
			}else{
				$nama_users			= $this->input->post('nama_users');
				$email_users		= $this->input->post('email_users');
				$password			= MD5($this->input->post('password'));
				$alamat_users		= $this->input->post('alamat_users');
				$no_telp			= $this->input->post('no_telp');
				$gambar_users 		= 'users.png';
				$role_id			= 2;

				$data = array(
					'nama_users'	=> $nama_users,
					'email_users'	=> $email_users,
					'password'		=> $password,
					'alamat_users'	=> $alamat_users,
					'no_telp'		=> $no_telp,
					'gambar_users'	=> $gambar_users,
					'role_id'		=> $role_id
				);

				$this->login_model->insert_data($data,'users');

				$this->session->set_flashdata('pesan','
				<div style="color: green;" class="alert alert-success alert-dismissible fade show" role="alert">
				  Registrasi <strong>Berhasil!</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth/login');
			}

	}


	// public function register_proses()
	// {

	// 		$this->_rules();
	// 		if( $this->form_validation->run() == FALSE ){
	// 			$data['title'] = 'Halaman Register';
	// 			$this->load->view('templates_auth/header',$data);
	// 			$this->load->view('auth/register');
	// 			$this->load->view('templates_auth/footer');
	// 		}else{
	// 			$name				= $this->input->post('name');
	// 			$username			= $this->input->post('username');
	// 			$email				= $this->input->post('email');
	// 			$password			= MD5($this->input->post('password'));
	// 			$role_id			= 2;
	// 			$is_active			= 0;

	// 			$data = array(
	// 				'name'			=> $name,
	// 				'username'		=> $username,
	// 				'email'			=> $email,
	// 				'gambar'		=> $gambar,
	// 				'password'		=> $password,
	// 				'role_id'		=> $role_id,
	// 				'is_active'		=> $is_active
	// 			);

	// 			$this->login_model->insert_data($data,'users');

	// 			$this->session->set_flashdata('pesan','
	// 			<div class="alert alert-success alert-dismissible fade show col-sm-5" role="alert">
 //  					Register <strong>Berhasil!</strong>
 //  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 //    					<span aria-hidden="true">&times;</span>
 //  					</button>
	// 			</div>
	// 			');
	// 			redirect('auth/login');
	// 		}


	// }

	public function _rules()
		{
			$this->form_validation->set_rules('nama_users','Nama','required',
				['required' => 'Nama Lengkap tidak boleh kosong!']
			);
			$this->form_validation->set_rules('no_telp','No. Telepon','required',
				['required' => 'No. Telepon tidak boleh kosong!']
			);
			
			$this->form_validation->set_rules('alamat_users','Alamat Lengkap','required',
				['required' => 'Alamat Lengkap tidak boleh kosong!']
			);
		
			$this->form_validation->set_rules('email_users','Email','required|valid_email|is_unique[users.email_users]',
				[
					'is_unique' => 'Email ini sudah terdaftar!',
					'required' => 'Email tidak boleh kosong!'
				]
		);
			$this->form_validation->set_rules('password','Password','required',
				['required' => 'Password tidak boleh kosong!']
		);
		}




}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */