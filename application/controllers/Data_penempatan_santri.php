<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penempatan_santri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
          if (!is_login()) redirect('auth');
        $this->load->model('data_penempatan_model');
        $this->load->model('data_wilayah_model');
        $this->load->model('data_santri_model');
		
    }

    public function index()
    {
       $data =[
            'title' => 'Kelola Penempatan Santri',
            'lihat_penempatan' => $this->data_penempatan_model->lihat_penempatan()->result(),
            'load_wilayah' => $this->data_wilayah_model->lihat_wilayah()->result()
         

       ];
            // var_dump($data);
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_penempatan/lihat_penempatan', $data);
        $this->load->view('templates/footer_dashboard');


    }


    // untuk jquery

    public function get_kamar(){
        $id_wilayah = $this->input->post('id');
        $data = $this->data_wilayah_model->get_kamar($id_wilayah);
        echo json_encode($data);
        // echo json_decode($data);
    }

public function tambah_penempatan_santri(){

    $data = [
        'title' => 'Tambah Penempatan Santri',
        'load_santri' => $this->data_penempatan_model->santri_tidak_terdaftar()->result(),
        'load_wilayah' => $this->data_wilayah_model->lihat_wilayah()->result(),
        'load_kamar' => $this->data_wilayah_model->lihat_kamar()->result()
    ];

        $this->form_validation->set_rules('pilih_santri', 'Santri', 'required', array('required' => 'Santri harus dipilih.'));
        $this->form_validation->set_rules('pilih_wilayah', 'Wilayah', 'required', array('required' => 'Wilayah harus dipilih.'));
        $this->form_validation->set_rules('pilih_kamar', 'Kamar', 'required', array('required' => 'Kamar harus dipilih.'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header_dashboard', $data);
            $this->load->view('content/data_penempatan/tambah_penempatan', $data);
            $this->load->view('templates/footer_dashboard');
        } else {
            $data_penempatan = array(
                'id_santri' => $this->input->post('pilih_santri'),
                'id_wilayah' => $this->input->post('pilih_wilayah'),
                'id_kamar' => $this->input->post('pilih_kamar')
            );

            $this->data_penempatan_model->tambah_penempatan($data_penempatan);
            redirect('Data_penempatan_santri');
        }






        // $this->load->view('templates/header_dashboard' , $data);
        // $this->load->view('content/data_penempatan/tambah_penempatan', $data);
        // $this->load->view('templates/footer_dashboard');

}

        public function pindah_penempatan($id_penghuni){
            $data = [
                'title' => 'Pindah Penempatan Santri',
                'load_penempatan' => $this->data_penempatan_model->lihat_penempatan_by_id($id_penghuni),
                'load_wilayah' => $this->data_wilayah_model->lihat_wilayah()->result(),
                'load_kamar' => $this->data_wilayah_model->lihat_kamar()->result()
            ];

            $this->form_validation->set_rules('pilih_wilayah', 'Wilayah Baru', 'required', array('required' => 'Wilayah baru harus dipilih.'));
            $this->form_validation->set_rules('pilih_kamar', 'Kamar Baru', 'required', array('required' => 'Kamar baru harus dipilih.'));

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header_dashboard', $data);
                $this->load->view('content/data_penempatan/pindah_penempatan', $data);
                $this->load->view('templates/footer_dashboard');
            } else {
                $data_penempatan_baru = array(
                    'id_wilayah' => $this->input->post('pilih_wilayah'),
                    'id_kamar' => $this->input->post('pilih_kamar')
                );

                $this->data_penempatan_model->ubah_penempatan($id_penghuni, $data_penempatan_baru);
                redirect('Data_penempatan_santri');
            }
        }


        public function hapus_penempatan($id_penghuni){
            $this->data_penempatan_model->hapus_penempatan($id_penghuni);
            redirect('Data_penempatan_santri');
        }
    public function testing(){
        
        $data = [

            
            'load_kamar' => $this->data_wilayah_model->lihat_kamar()->result(),
          
        ];
        $wilayah =   $this->data_wilayah_model->lihat_wilayah()->result();

        foreach($wilayah as $w){
        echo $w->nama_wilayah. "<br>";
        $kamar = $this->data_penempatan_model->lihat_penempatan_by_kamar($w->id_wilayah);
        foreach($kamar as $k){
            echo $k->nama_kamar. "<br>";
            $penghuni = $this->data_penempatan_model->lihat_penghuni($k->id_kamar);
            foreach($penghuni as $p){
                echo $p->nama_lengkap_santri. "<br>";
            }
        }

        }
      
        // var_dump($data);
        // die();



    }
    
}

/* End of file Data_penempatan_santri.php and path \application\controllers\Data_penempatan_santri.php */
