<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_santri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!is_login()) redirect('auth');
        $this->load->model('data_santri_model');
        $this->load->model('data_lembaga_pendidikan_model');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Santri',
            'data_santri' => 'query' // Sesuaikan dengan query untuk mendapatkan data santri
        ];

        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_santri/data_santri', $data);
        $this->load->view('templates/footer_dashboard');
    }

    public function tambah_santri(){
         $data = [
            'title' => 'Tambah Data Santri',
            'lembaga' => $this->data_lembaga_pendidikan_model->lihat_lembaga()->result()
            
        ];

        $this->form_validation->set_rules('nama_santri' , 'Nama Santri', 'required' , array('required' => 'Nama Santri Wajib diisi!'));
        $this->form_validation->set_rules('tanggal_masuk_santri' , 'Tanggal Masuk Santri', 'required' , array('required' => 'Tanggal Masuk Santri Wajib diisi!'));
        $this->form_validation->set_rules('tempat_lahir' , 'Tempat Lahir Santri' , 'required' , array('required' => 'Tempat Lahir Santri Wajib diisi!'));
        $this->form_validation->set_rules('tanggal_lahir' , 'Tanggal Lahir Santri' , 'required',array('required' => 'Tanggal Lahir Wajib diisi!'));
        $this->form_validation->set_rules('alamat_dusun' , 'Alamat Dusun', 'required',  array('required' => 'Dusun Wajib diisi!'));
        $this->form_validation->set_rules('alamat_kecamatan' , 'Alamat Kecamatan' , 'required', array('required' => 'Kecamatan Wajib diisi!'));
        $this->form_validation->set_rules('alamat_provinsi' , 'Alamat Provinsi', 'required',  array('required' => 'Provinsi Wajib diisi!'));
        $this->form_validation->set_rules('lembaga_pendidikan' , 'Lembaga Pendidikan' , 'required' , array('required' => 'Lembaga Pendidikan Wajib diisi!'));
        $this->form_validation->set_rules('nama_ayah' , 'Nama Ayah' , 'required' , array('required' => 'Nama Ayah Wajib diisi!'));
        $this->form_validation->set_rules('pekerjaan_ayah' , 'Pekerjaan Ayah' , 'required' , array('required' => 'Pekerjaan Ayah Wajib diisi!'));
        $this->form_validation->set_rules('no_hp' , 'No Handphone' , 'required|numeric' , array('required' => 'NO HP Wajib diisi!',
        'numeric' => 'No HP Harus Berupa Angka'));
        // $this->form_validation->set_rules();

        if ($this->form_validation->run() != false) {

            // Jika validasi berhasil, lanjutkan dengan logika penyimpanan data
            // Mendapatkan tahun saat ini
            $currentYear = date('Y');

            // Mengambil nomor urut terakhir dari model
            $lastOrder = $this->data_santri_model->get_last_no_induk($currentYear);

            // Menentukan nomor urut baru
            $newOrder = $lastOrder + 1;

            // Membuat format nomor urut dengan tahun+nomor urut (3 digit)
            $newOrderFormatted = $currentYear . str_pad($newOrder, 3, '0', STR_PAD_LEFT);

            $data = array(




            );



          
        } else {
              $this->load->view('templates/header_dashboard', $data);
            $this->load->view('content/data_santri/tambah_santri', $data);
            $this->load->view('templates/footer_dashboard');
        }
    

    }

    public function tambah_santri_massal() { 
        $data = [
            'title' => 'Tambah Data Santri Secara Massal',
        ];

        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_santri/tambah_data_santri_massal', $data);
        $this->load->view('templates/footer_dashboard');
    }

    public function ubah_santri() {
        echo "ini ubah santri";
    }
}
?>
