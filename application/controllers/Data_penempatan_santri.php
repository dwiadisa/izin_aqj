<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penempatan_santri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_penempatan_model');
        $this->load->model('data_wilayah_model');
        $this->load->model('data_santri_model');
		
    }

    public function index()
    {
       $data =[
            'title' => 'Kelola Penempatan Santri',
            'lihat_penempatan' => $this->data_penempatan_model->lihat_penempatan()->result(),
         

       ];
            var_dump($data);
        // $this->load->view('templates/header_dashboard' , $data);
        // $this->load->view('content/data_penempatan/lihat_penempatan', $data);
        // $this->load->view('templates/footer_dashboard');


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
        'load_santri' => $this->data_santri_model->lihat_santri_aktif()->result(),
        'load_wilayah' => $this->data_wilayah_model->lihat_wilayah()->result(),
        'load_kamar' => $this->data_wilayah_model->lihat_kamar()->result()
    ];



        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_penempatan/tambah_penempatan', $data);
        $this->load->view('templates/footer_dashboard');

}
    
}

/* End of file Data_penempatan_santri.php and path \application\controllers\Data_penempatan_santri.php */
