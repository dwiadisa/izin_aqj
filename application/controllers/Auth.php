<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
		// is_login('dashboard');
	}

	public function index()
	{

		is_login('dashboard');
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Username wajib diisi!'));
		$this->form_validation->set_rules('password', 'Passsword', 'required',  array('required' => 'Password wajib diisi!'));

		if ($this->form_validation->run() != false) {


			$where = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'status' => 'AKTIF'
			);
			$cek_akun_pengurus = $this->Auth_model->login($where)->num_rows();
			// var_dump($cek_akun_pengurus, $where);
			if ($cek_akun_pengurus > 0) {
				$data =  $this->Auth_model->login($where)->row();
				$set_login = array(
					'id_user' => $data->id_user,
					'username' => $data->username,
					'level' => $data->level,
					'status_akun' => $data->status,
					'status' => 'logged_in'
				);

				$this->session->set_userdata($set_login);
				redirect('dashboard');
			} else {
				$data = [
					'title' => 'Login Sistem Informasi Pelayanan Pesantren PP. Al-Qodiri Jember'
				];
				$this->load->view('templates/header_auth', $data);
				$this->load->view('content/auth/auth');
				$this->load->view('templates/footer_auth');
			}

			//   echo "login sukses";
		} else {
			$data = [

				'title' => 'Login Sistem Informasi Pelayanan Pesantren PP. Al-Qodiri Jember'

			];
			$this->load->view('templates/header_auth', $data);
			$this->load->view('content/auth/auth');
			$this->load->view('templates/footer_auth');
		}






		// echo "ini auth";
		// echo base_url();
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}

/* End of file Auth.php and path \application\controllers\Auth.php */
