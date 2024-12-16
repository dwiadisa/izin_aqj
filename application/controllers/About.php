<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = [
			'title' => 'Tentang App',
			'hitung' => 'ini untuk hitung'
		];

		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/about/about', $data);
		$this->load->view('templates/footer_dashboard');
	}
}

/* End of file About.php and path \application\controllers\About.php */
