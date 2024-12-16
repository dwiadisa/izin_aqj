<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kelas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		 if (!is_login()) redirect('auth');
		 $this->load->model('Data_kelas_model');
    }

    public function index()
    {

		
        $data = [
            'title' => 'Data Kelas' ,
			'kelas' => $this->Data_kelas_model->lihat_kelas()->result()
        ];  
// var_dump($data['hitung_per_wilayah']);
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_kelas/data_kelas',$data);
        $this->load->view('templates/footer_dashboard');

        // var_dump($this->session->userdata());


    }
}

/* End of file Data_kelas.php and path \application\controllers\Data_kelas.php */
