<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kiosk_setting extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!is_login()) redirect('auth');
         $this->Access_block_model->block_pengurus();
        $this->load->model('Kiosk_model');

    }

    public function index()
    {
           $data = [
            'title' => 'Kiosk Setting' ,
            'setting' => $this->Kiosk_model->lihat_setting()
        ];  
// var_dump($data);
// die;
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/kiosk_setting/kiosk_setting',$data);
        $this->load->view('templates/footer_dashboard');

    }

    public function ubah_setting(){
        $this->Kiosk_model->ubah_setting();
        redirect('kiosk_setting');
    }
}

/* End of file Kiosk_setting.php and path \application\controllers\Kiosk_setting.php */
