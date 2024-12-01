<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_tahun_ajaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		 if (!is_login()) redirect('auth');
		$this->load->model('Tahun_ajaran_model');
    }

    public function index()
    {
		

		$data =[
			'title' => 'Data Tahun Ajaran',
			'tahun_ajaran' => $this->Tahun_ajaran_model->lihat_tahun_ajaran()
		];


		var_dump($data);
		die;
			   // die;
        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_tahun_ajaran/data_tahun_ajaran', $data);
        $this->load->view('templates/footer_dashboard');
		
    }
	public function tambah_tahun_ajaran(){
		$data =[
			'title' => 'Tambah Tahun Ajaran',
		];

		$this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_tahun_ajaran/tambah_tahun_ajaran', $data);
        $this->load->view('templates/footer_dashboard');

	}

	public function ubah_tahun_ajaran(){
		$data = [
			'title' => 'Ubah Tahun Ajaran',
			];


			


		

	}

	public function hapus_tahun_ajaran(){





	}


}

/* End of file Data_tahun_ajaran.php and path \application\controllers\Data_tahun_ajaran.php */
