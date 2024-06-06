<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penempatan_santri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
       $data =[
            'title' => 'Kelola Penempatan Santri',
            'lihat_penempatan' => 'asdsad',
            'penempatan_santri' => 'query'

       ];

        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_penempatan/lihat_penempatan', $data);
        $this->load->view('templates/footer_dashboard');


    }
}

/* End of file Data_penempatan_santri.php and path \application\controllers\Data_penempatan_santri.php */
