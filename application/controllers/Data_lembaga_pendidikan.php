<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_lembaga_pendidikan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
          if (!is_login()) redirect('auth');
           $this->Access_block_model->block_pengurus();
        $this->load->model('data_lembaga_pendidikan_model');
    }

    public function index()
    {

          $data = [
            'title' => 'Data Lembaga Pendidikan' ,
            'lembaga' => $this->data_lembaga_pendidikan_model->lihat_lembaga()->result()
        ];  
        // var_dump($data);


        // var_dump($data);
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_lembaga/data_lembaga',$data);
        $this->load->view('templates/footer_dashboard');
    }

    public function tambah_lembaga(){

        $data = [
            'title' => 'Tambah Data Lembaga Pendidikan'
        ];



        $this->form_validation->set_rules('kode_lembaga' , 'Kode Lembaga Pendidikan' , 'required' ,  array('required' => 'Kode Lembaga Pendidikan Wajib diisi!'));
        $this->form_validation->set_rules('nama_lembaga' , 'Nama Lembaga Pendidikan' , 'required' , array('requred' => 'Nama Lembaga Pendidikan Wajib diisi!'));

        if ($this->form_validation->run() !=false) {
           $data = array(
            'singkatan_lembaga' => $this->input->post('kode_lembaga'),
            'nama_lembaga' => $this->input->post('nama_lembaga')
           );

           $this->data_lembaga_pendidikan_model->tambah_lembaga($data);
           redirect('data_lembaga_pendidikan');
        } else {
        //    echo validation_errors();
         $this->load->view('templates/header_dashboard' , $data);
         $this->load->view('content/data_lembaga/tambah_data_lembaga',$data);
        $this->load->view('templates/footer_dashboard');
        }
        



    }

        public function ubah_lembaga($id_lembaga){
            $where = array('id_lembaga' => $id_lembaga);
            $data = [
                'title' => 'Ubah Data Lembaga Pendidikan',
                'lembaga' => $this->data_lembaga_pendidikan_model->ubah_lembaga($where)->row()
            ];

            $this->form_validation->set_rules('kode_lembaga', 'Kode Lembaga Pendidikan', 'required', array('required' => 'Kode Lembaga Pendidikan Wajib diisi!'));
            $this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga Pendidikan', 'required', array('required' => 'Nama Lembaga Pendidikan Wajib diisi!'));

            if ($this->form_validation->run() != false) {
                $data_update = array(
                    'singkatan_lembaga' => $this->input->post('kode_lembaga'),
                    'nama_lembaga' => $this->input->post('nama_lembaga')
                );

                $this->data_lembaga_pendidikan_model->update_lembaga($where, $data_update);
                redirect('data_lembaga_pendidikan');
            } else {
                $this->load->view('templates/header_dashboard', $data);
                $this->load->view('content/data_lembaga/ubah_data_lembaga', $data);
                $this->load->view('templates/footer_dashboard');
            }
        }
        public function hapus_lembaga($id_lembaga){
            $where = array('id_lembaga' => $id_lembaga);
            $this->data_lembaga_pendidikan_model->hapus_lembaga($where);
            redirect('data_lembaga_pendidikan');
        }

}


/* End of file Data_lembaga_pendidikan.php and path \application\controllers\Data_lembaga_pendidikan.php */
