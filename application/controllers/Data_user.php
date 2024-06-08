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

        // var_dump($data);
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_user/data_user',$data);
        $this->load->view('templates/footer_dashboard');


    }

    public function tambah_user(){
        $this->form_validation->set_rules('username' , 'Username' , 'required|is_unique[user.username]', array('required' => 'Username Wajib diisi!',
        'is_unique' => 'Username telah digunakan!'    
    ));
        $this->form_validation->set_rules('email' , 'Email' , 'required|is_unique[user.email]|valid_email', array(
            'required' => 'Email Wajib diisi!',
            'is_unique' => 'Email ini telah digunakan' , 
            'valid_email' => 'Email yang anda masukkan tidak valid'
        ) );
        $this->form_validation->set_rules('password' , 'Password' , 'required', array('required' => 'Password wajib diisi!'));
        $this->form_validation->set_rules('konfir_password' , 'Konfirmasi Password', 'required|matches[password]' , array('required' => 'Konfirmasi Password wajib diisi!',
            'matches' => 'Password yang diisi tidak sama!'));
        $this->form_validation->set_rules('nama_lengkap' , 'Nama Lengkap' , 'required' , array('required' => 'Nama lengkap wajib diisi!'));
        $this->form_validation->set_rules('no_hp' , 'Nomor HP' , 'required', array('required' => 'Nomor HP wajib diisi! '));
        $this->form_validation->set_rules('level' , 'Level' , 'required' , array('required' => 'Level Wajib ditentukan!'));
        $this->form_validation->set_rules('status' , 'Status' , 'required', array('required' => 'Status Wajib ditentukan!'));
        if ($this->form_validation->run() !=false) {
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'no_hp' => $this->input->post('no_hp'),
                'level' => $this->input->post('level'),
                'status' => $this->input->post('status')
            ];
            // var_dump($data);
            $this->data_user_model->tambah_user($data);
            redirect('data_user');

        } else {

            // echo validation_errors();
                $data = [
            'title' => 'Tambah Data User' ,
            'user' => $this->data_user_model->lihat_user()->result()
                ];  

        // var_dump($data);
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_user/tambah_data_user',$data);
        $this->load->view('templates/footer_dashboard');

            }

       
    }
    public function ubah_user($id){

    $where = array('id_user' => $id);
    $data =[
        'title' => 'Ubah Data User',
        'load_user' => $this->data_user_model->ubah_user($where)->result()


    ];

  $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_user/ubah_data_user',$data);
        $this->load->view('templates/footer_dashboard');



    // var_dump($data);

    }
    public function update_user(){

    }

    public function hapus_user($id){

    }
}

/* End of file Data_user.php and path \application\controllers\Data_user.php */
