<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) redirect('auth');
		$this->load->model('Dashboard_model');
	}

	public function index()
	{
		// echo "ini halaman dashboard";

		$data = [
			'title' => 'Dashboard',
			'hitung_aktif' => $this->Dashboard_model->hitung_santri_aktif(),
			'hitung_nonaktif' => $this->Dashboard_model->hitung_santri_nonaktif(),
			'hitung_riyadhoh' => $this->Dashboard_model->hitung_santri_riyadhoh(),
			'hitung_per_wilayah' => $this->Dashboard_model->hitung_santri_per_wilayah()->result(),
			'hitung_izin' => $this->Dashboard_model->hitung_santri_izin()
		];
		// var_dump($data['hitung_per_wilayah']);
		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/dashboard', $data);
		$this->load->view('templates/footer_dashboard');

		// var_dump($this->session->userdata());
	}
}

/* End of file Dashboard.php and path \application\controllers\Dashboard.php */
