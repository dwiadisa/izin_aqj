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


        $this->form_validation->set_rules('kode_wilayah' , 'Kode Wilayah' , 'required' ,array('required' => 'Kode Wilayah wajib diisi'));
        $this->form_validation->set_rules('nama_wilayah' , 'nama Wilayah' , 'required' ,array('required' => 'Nama Wilayah wajib diisi'));

        if ($this->form_validation->run() !=false) {
            
            $data = array(
                'singkatan_wilayah' => $this->input->post('kode_wilayah'),
                'nama_wilayah' =>   $this->input->post('nama_wilayah')
            );

                    $this->data_wilayah_model->tambah_wilayah($data);
                    redirect('data_wilayah');
         
        } else {
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/tambah_data_wilayah', $data);
        $this->load->view('templates/footer_dashboard');
        }
        


        // echo "ini tambah wilayah";


    }
    public function ubah_wilayah($id){

    }

    public function hapus_wilayah($id){

    }
}

/* End of file Data_wilayah.php and path \application\controllers\Data_wilayah.php */
