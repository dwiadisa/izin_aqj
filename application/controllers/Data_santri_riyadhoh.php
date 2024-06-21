<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_santri_riyadhoh extends CI_Controller {

    public function __construct()
    {         

        parent::__construct();
         if (!is_login()) redirect('auth');
    }

    public function index()
    {
           $data = [
            'title' => 'Data Santri Riyadhoh' ,
            'load_santri_riyadhoh' => 'ini untuk hitung'
        ];  

        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_santri_riyadhoh/data_santri_riyadhoh',$data);
        $this->load->view('templates/footer_dashboard');



    }

    public function tambah_santri_riyadhoh()
    {
        $data = [
            'title' => 'Tambah Santri Riyadhoh' ,
        ];  

        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_santri_riyadhoh/tambah_santri_riyadhoh',$data);
        $this->load->view('templates/footer_dashboard');
    }


}

/* End of file Data_santri_riyadhoh.php and path \application\controllers\Data_santri_riyadhoh.php */
