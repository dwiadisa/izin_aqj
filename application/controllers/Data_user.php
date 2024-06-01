<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_user_model');
    }

    public function index()
    {
         $data = [
            'title' => 'Data User' ,
            'user' => $this->data_user_model->lihat_user()->result()
        ];  

        var_dump($data);
        // $this->load->view('templates/header_dashboard' , $data);
        // $this->load->view('content/data_user/data_user',$data);
        // $this->load->view('templates/footer_dashboard');


    }
}

/* End of file Data_user.php and path \application\controllers\Data_user.php */
