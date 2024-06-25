<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman_blokir extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function hal_403()
    {
        // $this->load->view('templates/header_dashboard');
        $this->load->view('content/halaman_blokir/hal_403');
        // $this->load->view('templates/footer_dashboard');
    }
}

/* End of file Halaman_blokir.php and path \application\controllers\Halaman_blokir.php */
