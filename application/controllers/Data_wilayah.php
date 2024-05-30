<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_wilayah extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_wilayah_model');
    }

    public function index()
    {
         $data = [
            'title' => 'Data Wilayah/Rayon',
            'wilayah' => $this->data_wilayah_model->lihat_wilayah()
        ];
    // var_dump($data);
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_wilayah', $data);
        $this->load->view('templates/footer_dashboard');
      


    }

    public function tambah_wilayah(){

  $data = [
            'title' => 'Data Wilayah/Rayon',
            
        ];


        $this->form_validation->rules('kode_wilayah' , 'Kode Wilayah' , 'required' ,array('required' => 'Kode Wilayah wajib diisi'));
        $this->form_validation->rules('nama_wilayah' , 'nama Wilayah' , 'required' ,array('required' => 'Nama Wilayah wajib diisi'));

        if ($this->form_validation->run() !=false) {
            // jika dia berhasil input
                


        } else {
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/tambah_data_wilayah', $data);
        $this->load->view('templates/footer_dashboard');
        }
        


        // echo "ini tambah wilayah";


    }
}

/* End of file Data_wilayah.php and path \application\controllers\Data_wilayah.php */
