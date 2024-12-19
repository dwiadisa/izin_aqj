<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekspor_data extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) redirect('auth');
		$this->load->model('ekspor_data_model');
	}


	public function index()
	{

		$data = [
			'title' => 'Ekspor Data Santri',



		];


		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/ekspor_data/ekspor_santri', $data);
		$this->load->view('templates/footer_dashboard');
	}
	public function ekspor_perwilayah()
	{
	}
}

/* End of file Ekspor_data.php and path \application\controllers\Ekspor_data.php */
