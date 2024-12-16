<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_kelas extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) redirect('auth');
		$this->load->model('Data_kelas_model');
		$this->load->model('Data_lembaga_pendidikan_model');
	}

	public function index()
	{


		$data = [
			'title' => 'Data Kelas',
			'kelas' => $this->Data_kelas_model->lihat_kelas()->result()
		];

		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/data_kelas/data_kelas', $data);
		$this->load->view('templates/footer_dashboard');
	}


	public function tambah_kelas()
	{
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required', array('required' => '%s harus diisi'));
		$this->form_validation->set_rules('lembaga', 'Lembaga', 'required', array('required' => '%s harus diisi'));
		if ($this->form_validation->run() != false) {


			$data = array(
				'nama_kelas' => $this->input->post('nama_kelas'),
				'lembaga' => $this->input->post('lembaga')

			);

			$this->Data_kelas_model->tambah_kelas($data);
			redirect('data_kelas');
		} else {
			$data = [
				'title' => 'Tambah Data Kelas',
				'lembaga' => $this->Data_lembaga_pendidikan_model->lihat_lembaga()->result()

			];

			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('content/data_kelas/tambah_kelas', $data);
			$this->load->view('templates/footer_dashboard');
		}
	}
	public function ubah_kelas()
	{
	}
	public function hapus_kelas()
	{
	}
}

/* End of file Data_kelas.php and path \application\controllers\Data_kelas.php */
