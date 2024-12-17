<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_rombel extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = ['title' => 'Data Rombel'];
		// var_dump($data['hitung_per_wilayah']);
		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/data_rombel/data_rombel', $data);
		$this->load->view('templates/footer_dashboard');
	}
}

/* End of file Data_rombel.php and path \application\controllers\Data_rombel.php */
