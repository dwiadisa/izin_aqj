<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
           if (!is_login()) redirect('auth');
    }

    public function index()
    {
        // echo "ini halaman dashboard";

        $data = [
            'title' => 'Dashboard' ,
            'hitung' => 'ini untuk hitung'
        ];  

        $this->load->view('templates/header_dashboard');
        $this->load->view('content/dashboard');
        $this->load->view('templates/footer_dashboard');

        // var_dump($this->session->userdata());
    }
}

/* End of file Dashboard.php and path \application\controllers\Dashboard.php */
