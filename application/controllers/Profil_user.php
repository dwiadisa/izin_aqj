<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) redirect('auth');
		$this->load->model('Profil_user_model');
	}

	public function index()
	{

		$data = [
			'title' => 'Profil User',
			'load_user' => $this->Profil_user_model->lihat_profile(),
		];
		//  var_dump($data);
		//  die;
		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/profil_user/profil_user', $data);
		$this->load->view('templates/footer_dashboard');
	}

	public function ubah_profil()
	{
		//   $this->form_validation->set_rules('id_user' , 'Id_user' , 'required', array('required' => 'Username Wajib diisi!',));
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Username Wajib diisi!',));
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email', array(
			'required' => 'Email Wajib diisi!',

			'valid_email' => 'Email yang anda masukkan tidak valid'
		));
		// $this->form_validation->set_rules('password' , 'Password' , 'required', array('required' => 'Password wajib diisi!'));
		//    $this->form_validation->set_rules('konfir_password' , 'Konfirmasi Password', 'required|matches[password]' , array('required' => 'Konfirmasi Password wajib diisi!',
		//     'matches' => 'Password yang diisi tidak sama!'));
		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required', array('required' => 'Nama lengkap wajib diisi!'));
		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required', array('required' => 'Nomor HP wajib diisi! '));
		// $this->form_validation->set_rules('level' , 'Level' , 'required' , array('required' => 'Level Wajib ditentukan!'));
		// $this->form_validation->set_rules('status' , 'Status' , 'required', array('required' => 'Status Wajib ditentukan!'));


		if ($this->form_validation->run() != false) {
			$where = array('id_user' => $this->input->post('id_user'));

			// jika inputan password kosong maka abaikan form password
			if ($this->input->post('password') == '') {

				$data = array(
					// 'id_user' => $this->input->post('id_user') ,
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					// 'password' => md5($this->input->post('password')),
					'nama_lengkap' => $this->input->post('nama_lengkap'),
					'no_hp' => $this->input->post('no_hp'),
					// 'level' => $this->input->post('level'),
					// 'status' => $this->input->post('status')
				);
			} else {
				$data = array(
					// 'id_user' => $this->input->post('id_user') ,
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
					'password' => md5($this->input->post('password')),
					'nama_lengkap' => $this->input->post('nama_lengkap'),
					'no_hp' => $this->input->post('no_hp'),
					// 'level' => $this->input->post('level'),
					// 'status' => $this->input->post('status')
				);
			}
			//   var_dump($data);  
			$this->Profil_user_model->update_profile($data);
			redirect('profil_user');
		} else {

			$data = [
				'title' => 'Profil User',
				'load_user' => $this->Profil_user_model->lihat_profile(),
			];
			//  var_dump($data);
			//  die;
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('content/profil_user/profil_user', $data);
			$this->load->view('templates/footer_dashboard');
		}
	}
}

/* End of file Profil_user.php and path \application\controllers\Profil_user.php */
