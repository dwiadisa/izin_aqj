<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_psb extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!is_login())
			redirect('auth');
		$this->load->model('Psb_model');
		$this->load->model('Data_santri_model');
		// $this->load->database('db_psb', TRUE);
		// $this->db2 = $this->load->database('db', TRUE);

	}

	public function index()
	{
		$data = [
			'title' => 'Data Pendaftaran Santri Baru',
			'data_psb' => $this->Psb_model->lihat_santri_baru(),
			// 'isi' => 'psb/data_psb/index'
		];
		// var_dump($data);
		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/data_psb/index', $data);
		$this->load->view('templates/footer_dashboard');



	}
	public function lihat_santri($id)
	{
		$where = $id;
		$data = [
			'title' => 'Lihat Data Santri',
			'load_user' => $this->Psb_model->lihat_santri_baru_by_id($id)->result()


		];

		var_dump($data);

		// $this->load->view('templates/header_dashboard', $data);
		// $this->load->view('content/data_psb/lihat_santri', $data);
		// $this->load->view('templates/footer_dashboard');


	}

	public function tambah_santri()
	{


	}


}

/* End of file Data_psb.php and path \application\controllers\Data_psb.php */
