<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_keperluan_izin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) redirect('auth');
		$this->load->model('Keperluan_izin_model');
	}

	public function index()
	{
		$data = [
			'title' => 'Data Keperluan Izin',
			'load_keperluan' => $this->Keperluan_izin_model->lihat_keperluan()->result()
		];
		// var_dump($data);
		// die();
		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/keperluan_izin/index', $data);
		$this->load->view('templates/footer_dashboard');
	}
}

/* End of file Data_keperluan_izin.php and path \application\controllers\Data_keperluan_izin.php */
