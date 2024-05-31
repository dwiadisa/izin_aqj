<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_santri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!is_login()) redirect('auth');
    }

    public function index()
    {

        $data = [
            'title' => 'Data Santri',
            'data_santri' => 'query'



        ];
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_santri', $data);
        $this->load->view('templates/footer_dashboard');
      
    }

    
    public function tambah_santri(){ 


        
        $data = [
            'title' => ' Tambah Data Santri',
        ];
            



        
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/tambah_data_santri', $data);
        $this->load->view('templates/footer_dashboard');

    }
    public function ubah_santri(){

        echo "ini ubah santri";
    }
}

/* End of file Data_santri.php and path \application\controllers\Data_santri.php */
