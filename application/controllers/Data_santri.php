<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_santri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!is_login()) redirect('auth');
        $this->load->model('data_santri_model');
        $this->load->model('data_lembaga_pendidikan_model');
        $this->load->model('data_penempatan_model');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Santri',
            'data_santri' => $this->data_santri_model->lihat_santri_semua()->result(),
            'santri_aktif' => $this->data_santri_model->lihat_santri_aktif()->result(),
            'santri_nonaktif' => $this->data_santri_model->lihat_santri_nonaktif()->result()
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

    $this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required', ['required' => 'Nama Santri Wajib diisi!']);
    $this->form_validation->set_rules('tanggal_masuk_santri', 'Tanggal Masuk Santri', 'required', ['required' => 'Tanggal Masuk Santri Wajib diisi!']);
    $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Santri', 'required', ['required' => 'Tempat Lahir Santri Wajib diisi!']);
    $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Santri', 'required', ['required' => 'Tanggal Lahir Wajib diisi!']);
    $this->form_validation->set_rules('alamat_dusun', 'Alamat Dusun', 'required', ['required' => 'Dusun Wajib diisi!']);
    $this->form_validation->set_rules('alamat_desa', 'Alamat Desa', 'required', ['required' => 'Desa Wajib diisi!']);
    $this->form_validation->set_rules('alamat_kecamatan', 'Alamat Kecamatan', 'required', ['required' => 'Kecamatan Wajib diisi!']);
    $this->form_validation->set_rules('alamat_kabupaten', 'Alamat Kabupaten', 'required', ['required' => 'Kabupaten Wajib diisi!']);
    $this->form_validation->set_rules('alamat_provinsi', 'Alamat Provinsi', 'required', ['required' => 'Provinsi Wajib diisi!']);
    $this->form_validation->set_rules('lembaga_pendidikan', 'Lembaga Pendidikan', 'required', ['required' => 'Lembaga Pendidikan Wajib diisi!']);
    $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', ['required' => 'Nama Ayah Wajib diisi!']);
    $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required', ['required' => 'Pekerjaan Ayah Wajib diisi!']);
    $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', ['required' => 'Nama Ibu Wajib diisi!']);
    $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric', ['required' => 'NO HP Wajib diisi!', 'numeric' => 'No HP Harus Berupa Angka']);
    $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib diisi!']);

    if ($this->form_validation->run() !== false) {
        $data_santri = [
            'no_induk_santri' => $newOrderFormatted,
            'nama_lengkap_santri' => $this->input->post('nama_santri'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk_santri'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat_dusun' => $this->input->post('alamat_dusun'),
            'alamat_desa' => $this->input->post('alamat_desa'),
            'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
            'alamat_kabupaten' => $this->input->post('alamat_kabupaten'),
            'alamat_provinsi' => $this->input->post('alamat_provinsi'),
            'pendidikan_dipilih' => $this->input->post('lembaga_pendidikan'),
            'nama_ayah' => $this->input->post('nama_ayah'),
            'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
            'nama_ibu' => $this->input->post('nama_ibu'),
            'status_santri' => $this->input->post('status'),
            'no_hp' => $this->input->post('no_hp')
        ];

        // Upload foto santri jika ada
        if (!empty($_FILES['foto_santri']['name'])) {
            $config['upload_path'] = './assets/foto_santri/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['file_name'] = $newOrderFormatted . '_' . $_FILES['foto_santri']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_santri')) {
                $data_santri['foto'] = $config['upload_path'] . $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->data_santri_model->tambah_santri($data_santri);
        redirect('data_santri');
    } else {
        // echo validation_errors();
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
        $this->form_validation->set_rules('alamat_desa', 'Alamat Desa', 'required', ['required' => 'Desa Wajib diisi!']);
        $this->form_validation->set_rules('alamat_kecamatan', 'Alamat Kecamatan', 'required', ['required' => 'Kecamatan Wajib diisi!']);
        $this->form_validation->set_rules('alamat_kabupaten', 'Alamat Kabupaten', 'required', ['required' => 'Kabupaten Wajib diisi!']);
        $this->form_validation->set_rules('alamat_provinsi', 'Alamat Provinsi', 'required', ['required' => 'Provinsi Wajib diisi!']);
        $this->form_validation->set_rules('lembaga_pendidikan', 'Lembaga Pendidikan', 'required', ['required' => 'Lembaga Pendidikan Wajib diisi!']);
        $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', ['required' => 'Nama Ayah Wajib diisi!']);
        $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required', ['required' => 'Pekerjaan Ayah Wajib diisi!']);
        $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', ['required' => 'Nama Ibu Wajib diisi!']);
        $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric', ['required' => 'NO HP Wajib diisi!', 'numeric' => 'No HP Harus Berupa Angka']);
        $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib diisi!']);

        if ($this->form_validation->run() !== false) {
            $data_update = [
                'nama_lengkap_santri' => $this->input->post('nama_santri'),
                'tanggal_masuk' => $this->input->post('tanggal_masuk_santri'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat_dusun' => $this->input->post('alamat_dusun'),
                'alamat_desa' => $this->input->post('alamat_desa'),
                'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
                'alamat_kabupaten' => $this->input->post('alamat_kabupaten'),
                'alamat_provinsi' => $this->input->post('alamat_provinsi'),
                'pendidikan_dipilih' => $this->input->post('lembaga_pendidikan'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'no_hp' => $this->input->post('no_hp'),
                'status_santri' => $this->input->post('status'),
            ];

            // Upload foto santri jika ada
            if (!empty($_FILES['foto_santri']['name'])) {
                $config['upload_path'] = './assets/foto_santri/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name'] = $id_santri . '_' . $_FILES['foto_santri']['name'];

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto_santri')) {
                    $data_update['foto'] = $config['upload_path'] . $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }
            if ($this->input->post('status') == 'NONAKTIF') {

                $this->data_penempatan_model->hapus_penempatan_by_id($id_santri);
            }
            $this->data_santri_model->update_santri($where, $data_update);
            redirect('data_santri');
        } else {
            $this->load->view('templates/header_dashboard', $data);
            $this->load->view('content/data_santri/ubah_santri', $data);
            $this->load->view('templates/footer_dashboard');
        }
    }

    public function print_santri($id_santri){
        $this->load->library('pdfgenerator');

        $where = $id_santri;
        $data_santri = $this->data_santri_model->print_data_santri($where)->row();
        $data_lembaga = $this->data_lembaga_pendidikan_model->lihat_lembaga()->result();

        $data = [
            'title' => 'Data Santri',
            'santri' => $data_santri,
            'lembaga' => $data_lembaga
        ];

        // // var_dump($data);
        // // die;
        // // Judul PDF
        $title_pdf = 'Data Santri';

        // Nama file PDF saat diunduh
        $file_pdf = 'data_santri_' . $id_santri . '.pdf';

        // Pengaturan kertas
        $paper = 'A4';

        // Orientasi kertas
        $orientation = "portrait";

        // Mengenerate HTML view
        $html = $this->load->view('cetak/identitas_santri', $data, true);

        // Membuat PDF
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);

        // $this->load->view('cetak/identitas_santri',$data);

    }
    public function hapus_santri($id_santri) {
        $where = array('id_santri' => $id_santri);
        
        // Mengambil data santri untuk mendapatkan nama file foto
        $santri = $this->data_santri_model->get_santri_by_id($id_santri);
        if ($santri && $santri->foto) {
            // Menghapus file foto dari server
            $path_foto = './assets/foto_santri/' . $santri->foto;
            if (file_exists($path_foto)) {
                unlink($path_foto);
            }
        }
 $this->data_penempatan_model->hapus_penempatan_by_id($id_santri);
        // Menghapus data santri dari database
        $this->data_santri_model->hapus_santri($where);
        redirect('data_santri');
    }
}
?>
