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
            'data_santri' => $this->data_santri_model->lihat_santri_semua()->result() // Sesuaikan dengan query untuk mendapatkan data santri
        ];

        // var_dump($data);
        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_santri/data_santri', $data);
        $this->load->view('templates/footer_dashboard');
    }

    public function tambah_santri(){

             $currentYear = date('Y');
            $lastOrder = $this->data_santri_model->get_last_no_induk($currentYear);
            $newOrder = $lastOrder + 1;
            $newOrderFormatted = $currentYear . str_pad($newOrder, 3, '0', STR_PAD_LEFT);
        $data = [
            'title' => 'Tambah Data Santri',
            'lembaga' => $this->data_lembaga_pendidikan_model->lihat_lembaga()->result(),
            'format_nis' => $newOrderFormatted
        ];

        // untuk penomoran NIS
            


        $this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required', ['required' => 'Nama Santri Wajib diisi!']);
        $this->form_validation->set_rules('tanggal_masuk_santri', 'Tanggal Masuk Santri', 'required', ['required' => 'Tanggal Masuk Santri Wajib diisi!']);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Santri', 'required', ['required' => 'Tempat Lahir Santri Wajib diisi!']);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Santri', 'required', ['required' => 'Tanggal Lahir Wajib diisi!']);
        $this->form_validation->set_rules('alamat_dusun', 'Alamat Dusun', 'required', ['required' => 'Dusun Wajib diisi!']);
        $this->form_validation->set_rules('alamat_kecamatan', 'Alamat Kecamatan', 'required', ['required' => 'Kecamatan Wajib diisi!']);
        $this->form_validation->set_rules('alamat_provinsi', 'Alamat Provinsi', 'required', ['required' => 'Provinsi Wajib diisi!']);
        $this->form_validation->set_rules('lembaga_pendidikan', 'Lembaga Pendidikan', 'required', ['required' => 'Lembaga Pendidikan Wajib diisi!']);
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', ['required' => 'Nama Ayah Wajib diisi!']);
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required', ['required' => 'Pekerjaan Ayah Wajib diisi!']);
        $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric', ['required' => 'NO HP Wajib diisi!', 'numeric' => 'No HP Harus Berupa Angka']);

        if ($this->form_validation->run() !== false) {
           

            $data_santri = [
                'no_induk_santri' => $newOrderFormatted,
                'nama_lengkap_santri' => $this->input->post('nama_santri'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk_santri'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat_dusun' => $this->input->post('alamat_dusun'),
                'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
                'alamat_provinsi' => $this->input->post('alamat_provinsi'),
                'pendidikan_dipilih' => $this->input->post('lembaga_pendidikan'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'no_hp' => $this->input->post('no_hp')
            ];

            $this->data_santri_model->tambah_santri($data_santri);
            redirect('data_santri');
        } else {
            echo validation_errors();
            $this->load->view('templates/header_dashboard', $data , );
            $this->load->view('content/data_santri/tambah_santri', $data , $newOrderFormatted );
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

    public function ubah_santri($id_santri) {
        $where = array('id_santri' => $id_santri);
        $data = [
            'title' => 'Ubah Data Santri',
            'santri' => $this->data_santri_model->lihat_santri_by_id($where)->row(),
            'lembaga' => $this->data_lembaga_pendidikan_model->lihat_lembaga()->result()
        ];

        $this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required', ['required' => 'Nama Santri Wajib diisi!']);
        $this->form_validation->set_rules('tanggal_masuk_santri', 'Tanggal Masuk Santri', 'required', ['required' => 'Tanggal Masuk Santri Wajib diisi!']);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Santri', 'required', ['required' => 'Tempat Lahir Santri Wajib diisi!']);
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Santri', 'required', ['required' => 'Tanggal Lahir Wajib diisi!']);
        $this->form_validation->set_rules('alamat_dusun', 'Alamat Dusun', 'required', ['required' => 'Dusun Wajib diisi!']);
        $this->form_validation->set_rules('alamat_kecamatan', 'Alamat Kecamatan', 'required', ['required' => 'Kecamatan Wajib diisi!']);
        $this->form_validation->set_rules('alamat_provinsi', 'Alamat Provinsi', 'required', ['required' => 'Provinsi Wajib diisi!']);
        $this->form_validation->set_rules('lembaga_pendidikan', 'Lembaga Pendidikan', 'required', ['required' => 'Lembaga Pendidikan Wajib diisi!']);
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', ['required' => 'Nama Ayah Wajib diisi!']);
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required', ['required' => 'Pekerjaan Ayah Wajib diisi!']);
        $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric', ['required' => 'NO HP Wajib diisi!', 'numeric' => 'No HP Harus Berupa Angka']);

        if ($this->form_validation->run() !== false) {
            $data_update = [
                'nama_lengkap_santri' => $this->input->post('nama_santri'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk_santri'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat_dusun' => $this->input->post('alamat_dusun'),
                'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
                'alamat_provinsi' => $this->input->post('alamat_provinsi'),
                'pendidikan_dipilih' => $this->input->post('lembaga_pendidikan'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'no_hp' => $this->input->post('no_hp')
            ];

            $this->data_santri_model->update_santri($where, $data_update);
            redirect('data_santri');
        } else {
            $this->load->view('templates/header_dashboard', $data);
            $this->load->view('content/data_santri/ubah_santri', $data);
            $this->load->view('templates/footer_dashboard');
        }
    }
}
?>
