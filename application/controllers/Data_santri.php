<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_santri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!is_login()) redirect('auth');
        // $this->load->library('excel');

        $this->load->model('data_santri_model');
        $this->load->model('data_lembaga_pendidikan_model');
        $this->load->model('data_penempatan_model');
        $this->load->model('data_lembaga_pendidikan_model');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Santri',
            'data_santri' => $this->data_santri_model->lihat_santri_semua()->result(),
            'santri_aktif' => $this->data_santri_model->lihat_santri_aktif()->result(),
            'santri_nonaktif' => $this->data_santri_model->lihat_santri_nonaktif()->result(),
            'santri_alumni' => $this->data_santri_model->lihat_santri_alumni()->result()
        ];

        // var_dump($data);
        // die;
        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_santri/data_santri', $data);
        $this->load->view('templates/footer_dashboard');
    }

    public function tambah_santri() {
    $currentYear = date('Y', strtotime($this->input->post('tanggal_masuk_santri')));
    $currentMonth = date('m', strtotime($this->input->post('tanggal_masuk_santri')));
    $lastOrder = $this->data_santri_model->get_last_no_induk_by_year($currentYear);
    $newOrder = $lastOrder + 1;
    $newOrderFormatted = $currentYear . $currentMonth . str_pad($newOrder, 3, '0', STR_PAD_LEFT);

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
            'tahun_masuk' => $currentYear,
            'bulan_masuk' => $currentMonth,
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



// public function tambah_santri(){

//     // $currentYear = date('Y');
//     // $lastOrder = $this->data_santri_model->get_last_no_induk($currentYear);
//     // $newOrder = $lastOrder + 1;
//     // $newOrderFormatted = $currentYear . str_pad($newOrder, 3, '0', STR_PAD_LEFT);
//     $data = [
//         'title' => 'Tambah Data Santri',
//         'lembaga' => $this->data_lembaga_pendidikan_model->lihat_lembaga()->result(),
//         // 'format_nis' => $newOrderFormatted
//     ];

//     $this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required', ['required' => 'Nama Santri Wajib diisi!']);
//     $this->form_validation->set_rules('tanggal_masuk_santri', 'Tanggal Masuk Santri', 'required', ['required' => 'Tanggal Masuk Santri Wajib diisi!']);
//     $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Santri', 'required', ['required' => 'Tempat Lahir Santri Wajib diisi!']);
//     $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Santri', 'required', ['required' => 'Tanggal Lahir Wajib diisi!']);
//     $this->form_validation->set_rules('alamat_dusun', 'Alamat Dusun', 'required', ['required' => 'Dusun Wajib diisi!']);
//     $this->form_validation->set_rules('alamat_desa', 'Alamat Desa', 'required', ['required' => 'Desa Wajib diisi!']);
//     $this->form_validation->set_rules('alamat_kecamatan', 'Alamat Kecamatan', 'required', ['required' => 'Kecamatan Wajib diisi!']);
//     $this->form_validation->set_rules('alamat_kabupaten', 'Alamat Kabupaten', 'required', ['required' => 'Kabupaten Wajib diisi!']);
//     $this->form_validation->set_rules('alamat_provinsi', 'Alamat Provinsi', 'required', ['required' => 'Provinsi Wajib diisi!']);
//     $this->form_validation->set_rules('lembaga_pendidikan', 'Lembaga Pendidikan', 'required', ['required' => 'Lembaga Pendidikan Wajib diisi!']);
//     $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', ['required' => 'Nama Ayah Wajib diisi!']);
//     $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required', ['required' => 'Pekerjaan Ayah Wajib diisi!']);
//     $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', ['required' => 'Nama Ibu Wajib diisi!']);
//     $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric', ['required' => 'NO HP Wajib diisi!', 'numeric' => 'No HP Harus Berupa Angka']);
//     $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib diisi!']);

//     if ($this->form_validation->run() !== false) {
//         $data_santri = [

//             'tahun_masuk' => date('Y', strtotime($this->input->post('tanggal_masuk_santri'))) ,
//             'bulan_masuk' => date('m', strtotime($this->input->post('tanggal_masuk_santri'))) ,

//             // 'no_induk_santri' => $newOrderFormatted,
//             'nama_lengkap_santri' => $this->input->post('nama_santri'),
//             'tanggal_masuk' => $this->input->post('tanggal_masuk_santri'),
//             'tempat_lahir' => $this->input->post('tempat_lahir'),
//             'tanggal_lahir' => $this->input->post('tanggal_lahir'),
//             'alamat_dusun' => $this->input->post('alamat_dusun'),
//             'alamat_desa' => $this->input->post('alamat_desa'),
//             'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
//             'alamat_kabupaten' => $this->input->post('alamat_kabupaten'),
//             'alamat_provinsi' => $this->input->post('alamat_provinsi'),
//             'pendidikan_dipilih' => $this->input->post('lembaga_pendidikan'),
//             'nama_ayah' => $this->input->post('nama_ayah'),
//             'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
//             'nama_ibu' => $this->input->post('nama_ibu'),
//             'status_santri' => $this->input->post('status'),
//             'no_hp' => $this->input->post('no_hp')
//         ];

//         // Upload foto santri jika ada
//         if (!empty($_FILES['foto_santri']['name'])) {
//             $config['upload_path'] = './assets/foto_santri/';
//             $config['allowed_types'] = 'jpg|jpeg|png';
//             $config['file_name'] = $newOrderFormatted . '_' . $_FILES['foto_santri']['name'];

//             $this->load->library('upload', $config);

//             if ($this->upload->do_upload('foto_santri')) {
//                 $data_santri['foto'] = $config['upload_path'] . $this->upload->data('file_name');
//             } else {
//                 echo $this->upload->display_errors();
//             }
//         }

//         $this->data_santri_model->tambah_santri($data_santri);
//         redirect('data_santri');
//     } else {
//         // echo validation_errors();
//         $this->load->view('templates/header_dashboard', $data);
//         $this->load->view('content/data_santri/tambah_santri', $data);
//         $this->load->view('templates/footer_dashboard');
//     }
// }

        public function download_template_excel(){
        $this->load->library('excel');
        $this->load->model('data_santri_model');

        $santriData = $this->data_santri_model->lihat_santri_semua()->result_array();

        $excel = new Excel();
        $excel->setActiveSheetIndex(0);
        $sheet = $excel->getActiveSheet();

        // Set header
        $headers = [
            'ID Santri', 'Tahun Masuk','Bulan Masuk', 'No Urut', 'No Induk Santri', 'Nama Lengkap Santri', 'Tanggal Masuk', 'Tempat Lahir', 
            'Tanggal Lahir', 'Alamat Dusun', 'Alamat Desa', 'Alamat Kecamatan', 'Alamat Kabupaten', 
            'Alamat Provinsi', 'Pendidikan Dipilih', 'Nama Ayah', 'Pekerjaan Ayah','Nama Ibu' , 'No HP', 'Foto', 'Status Santri', 'Lembaga Pendidikan dipilih'
        ];
        $column = 0;
        foreach ($headers as $header) {
            $sheet->setCellValueByColumnAndRow($column, 1, $header);
            $column++;
        }

        // Set data
        $row = 2;
        foreach ($santriData as $data) {
            $column = 0;
            foreach ($data as $value) {
                $sheet->setCellValueByColumnAndRow($column, $row, $value);
                $column++;
            }
            $row++;
        }

        // Get the last no_induk_santri
        $lastNoIndukSantri = $this->data_santri_model->get_last_no_induk_by_year(date('Y'));

        // Save the file
        $filename = 'Data_Santri_' . date('YmdHis') . '.xlsx';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');

        try {
            $writer = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
            $writer->save('php://output');
        } catch (Exception $e) {
            log_message('error', 'Error saat mencoba mengunduh file Excel: ' . $e->getMessage());
            show_error('Terjadi kesalahan pada server. Silakan coba lagi atau hubungi administrator server.', 500);
        }
        exit;
    }

    public function tambah_data_santri_massal() { 
        $data = [
            'title' => 'Tambah Data Santri Secara Massal',
        ];

        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_santri/tambah_data_santri_massal', $data);
        $this->load->view('templates/footer_dashboard');
    }

    public function tambah_santri_massal_proses() {
        $this->load->library('excel');
        $this->load->model('data_santri_model');

        if (isset($_FILES['file']['name'])) {
            $path = $_FILES['file']['tmp_name'];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $no_induk_santri = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $nama_lengkap_santri = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $tanggal_masuk = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $tempat_lahir = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $tanggal_lahir = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $alamat_dusun = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $alamat_desa = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $alamat_kecamatan = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $alamat_kabupaten = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $alamat_provinsi = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    $pendidikan_dipilih = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                    $nama_ayah = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
                    $pekerjaan_ayah = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                    $nama_ibu = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
                    $no_hp = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
                    $foto = $worksheet->getCellByColumnAndRow(16, $row)->getValue();
                    $status_santri = $worksheet->getCellByColumnAndRow(17, $row)->getValue();

                    $data[] = array(
                        'id_santri' => NULL,
                        'no_induk_santri' => $no_induk_santri,
                        'nama_lengkap_santri' => $nama_lengkap_santri,
                        'tanggal_masuk' => date('Y-m-d', $tanggal_masuk),
                        'tempat_lahir' => $tempat_lahir,
                        'tanggal_lahir' => date('Y-m-d', $tanggal_lahir),
                        'alamat_dusun' => $alamat_dusun,
                        'alamat_desa' => $alamat_desa,
                        'alamat_kecamatan' => $alamat_kecamatan,
                        'alamat_kabupaten' => $alamat_kabupaten,
                        'alamat_provinsi' => $alamat_provinsi,
                        'pendidikan_dipilih' => $pendidikan_dipilih,
                        'nama_ayah' => $nama_ayah,
                        'pekerjaan_ayah' => $pekerjaan_ayah,
                        'nama_ibu' => $nama_ibu,
                        'no_hp' => $no_hp,
                        'foto' => $foto,
                        'status_santri' => $status_santri
                    );
                }
            }
            $this->data_santri_model->tambah_santri_massal($data);
            redirect('data_santri');
        }
    }


    // public function ubah_santri($id_santri) {
    //     $where = array('id_santri' => $id_santri);
    //     $data = [
    //         'title' => 'Ubah Data Santri',
    //         'santri' => $this->data_santri_model->lihat_santri_by_id($where)->row(),
    //         'lembaga' => $this->data_lembaga_pendidikan_model->lihat_lembaga()->result()
    //     ];

    //     $this->form_validation->set_rules('nama_santri', 'Nama Santri', 'required', ['required' => 'Nama Santri Wajib diisi!']);
    //     $this->form_validation->set_rules('tanggal_masuk_santri', 'Tanggal Masuk Santri', 'required', ['required' => 'Tanggal Masuk Santri Wajib diisi!']);
    //     $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir Santri', 'required', ['required' => 'Tempat Lahir Santri Wajib diisi!']);
    //     $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir Santri', 'required', ['required' => 'Tanggal Lahir Wajib diisi!']);
    //     $this->form_validation->set_rules('alamat_dusun', 'Alamat Dusun', 'required', ['required' => 'Dusun Wajib diisi!']);
    //     $this->form_validation->set_rules('alamat_desa', 'Alamat Desa', 'required', ['required' => 'Desa Wajib diisi!']);
    //     $this->form_validation->set_rules('alamat_kecamatan', 'Alamat Kecamatan', 'required', ['required' => 'Kecamatan Wajib diisi!']);
    //     $this->form_validation->set_rules('alamat_kabupaten', 'Alamat Kabupaten', 'required', ['required' => 'Kabupaten Wajib diisi!']);
    //     $this->form_validation->set_rules('alamat_provinsi', 'Alamat Provinsi', 'required', ['required' => 'Provinsi Wajib diisi!']);
    //     $this->form_validation->set_rules('lembaga_pendidikan', 'Lembaga Pendidikan', 'required', ['required' => 'Lembaga Pendidikan Wajib diisi!']);
    //     $this->form_validation->set_rules('nama_ayah', 'Nama Ayah', 'required', ['required' => 'Nama Ayah Wajib diisi!']);
    //     $this->form_validation->set_rules('pekerjaan_ayah', 'Pekerjaan Ayah', 'required', ['required' => 'Pekerjaan Ayah Wajib diisi!']);
    //     $this->form_validation->set_rules('nama_ibu', 'Nama Ibu', 'required', ['required' => 'Nama Ibu Wajib diisi!']);
    //     $this->form_validation->set_rules('no_hp', 'No Handphone', 'required|numeric', ['required' => 'NO HP Wajib diisi!', 'numeric' => 'No HP Harus Berupa Angka']);
    //     $this->form_validation->set_rules('status', 'Status', 'required', ['required' => 'Status Wajib diisi!']);

    //     if ($this->form_validation->run() !== false) {
    //         $data_update = [
    //             'nama_lengkap_santri' => $this->input->post('nama_santri'),
    //             'tanggal_masuk' => $this->input->post('tanggal_masuk_santri'),
    //             'tempat_lahir' => $this->input->post('tempat_lahir'),
    //             'tanggal_lahir' => $this->input->post('tanggal_lahir'),
    //             'alamat_dusun' => $this->input->post('alamat_dusun'),
    //             'alamat_desa' => $this->input->post('alamat_desa'),
    //             'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
    //             'alamat_kabupaten' => $this->input->post('alamat_kabupaten'),
    //             'alamat_provinsi' => $this->input->post('alamat_provinsi'),
    //             'pendidikan_dipilih' => $this->input->post('lembaga_pendidikan'),
    //             'nama_ayah' => $this->input->post('nama_ayah'),
    //             'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
    //             'nama_ibu' => $this->input->post('nama_ibu'),
    //             'no_hp' => $this->input->post('no_hp'),
    //             'status_santri' => $this->input->post('status'),
    //         ];

    //         // Upload foto santri jika ada
    //         if (!empty($_FILES['foto_santri']['name'])) {
    //             $config['upload_path'] = './assets/foto_santri/';
    //             $config['allowed_types'] = 'jpg|jpeg|png';
    //             $config['file_name'] = $id_santri . '_' . $_FILES['foto_santri']['name'];

    //             $this->load->library('upload', $config);

    //             if ($this->upload->do_upload('foto_santri')) {
    //                 $data_update['foto'] = $config['upload_path'] . $this->upload->data('file_name');
    //             } else {
    //                 echo $this->upload->display_errors();
    //             }
    //         }
    //         if ($this->input->post('status') == 'NONAKTIF') {

    //             $this->data_penempatan_model->hapus_penempatan_by_id($id_santri);
    //         }
    //         $this->data_santri_model->update_santri($where, $data_update);
    //         redirect('data_santri');
    //     } else {
    //         $this->load->view('templates/header_dashboard', $data);
    //         $this->load->view('content/data_santri/ubah_santri', $data);
    //         $this->load->view('templates/footer_dashboard');
    //     }
    // }

public function ubah_santri($id_santri) {
    $where = array('id_santri' => $id_santri);
    $santri = $this->data_santri_model->lihat_santri_by_id($where)->row();
    $data = [
        'title' => 'Ubah Data Santri',
        'santri' => $santri,
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
        $tanggalMasukBaru = $this->input->post('tanggal_masuk_santri');
        $tahunMasukBaru = date('Y', strtotime($tanggalMasukBaru));
        $bulanMasukBaru = date('m', strtotime($tanggalMasukBaru));

        // Jika tahun masuk diubah, maka generate NIS baru
        if ($santri->tahun_masuk != $tahunMasukBaru) {
            $lastOrder = $this->data_santri_model->get_last_no_induk_by_year($tahunMasukBaru);
            $newOrder = $lastOrder + 1;
            $newOrderFormatted = $tahunMasukBaru . $bulanMasukBaru . str_pad($newOrder, 3, '0', STR_PAD_LEFT);
        } else {
            $newOrderFormatted = $santri->no_induk_santri; // Tetap menggunakan NIS lama jika tahun tidak berubah
        }

        $data_update = [
            'tahun_masuk' => $tahunMasukBaru,
            'bulan_masuk' => $bulanMasukBaru,
            'no_induk_santri' => $newOrderFormatted,
            'nama_lengkap_santri' => $this->input->post('nama_santri'),
            'tanggal_masuk' => $tanggalMasukBaru,
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
            $config['file_name'] = $newOrderFormatted . '_' . $_FILES['foto_santri']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_santri')) {
                $data_update['foto'] = $config['upload_path'] . $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        if ($this->input->post('status') == 'NONAKTIF' || $this->input->post('status') == 'ALUMNI') {
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
//  $this->data_penempatan_model->hapus_penempatan_by_id($id_santri);
//         // Menghapus data santri dari database
//         $this->data_santri_model->hapus_santri($where);
        redirect('data_santri');
    }
public function update_status_batch() {
    $id_santri = $this->input->post('id_santri');
    $status = $this->input->post('status');

    // Pastikan $id_santri adalah array dan tidak kosong
    if (is_array($id_santri) && !empty($id_santri)) {
        foreach ($id_santri as $id) {
            $this->data_santri_model->update_status($id, $status);
            
            // Periksa status dan hapus penempatan jika perlu
            if ($status == 'NONAKTIF' || $status == 'ALUMNI') {
                $this->data_penempatan_model->hapus_penempatan_by_id($id);
            }
        }
    }

    redirect('data_santri');
}

    public function histori_pendidikan(){

     $id_santri =  $this->input->get('id_santri');
        $where = array('id_santri' => $id_santri);
         $data = [
            'title' => 'Histori Pendidikan Santri',
            'data_santri' => $this->data_santri_model->lihat_santri_semua()->result(),
            'lihat_santri' => $this->data_santri_model->lihat_santri_by_id($where)->row(),
            'session_santri' =>    $this->session->set_userdata('id_santri', $id_santri),
              'lembaga' => $this->data_lembaga_pendidikan_model->lihat_lembaga()->result(),
              'lihat_history' => $this->data_santri_model->histori_pendidikan_santri($id_santri)->result()
            // 'lihat_session' => 
            // 'set_session' => $this->set_session
            // 'histori_pendidikan_persantri' => $this->data_santri_model->histori_pendidikan_santri()->result()
            // 'santri_aktif' => $this->data_santri_model->lihat_santri_aktif()->result(),
            // 'santri_nonaktif' => $this->data_santri_model->lihat_santri_nonaktif()->result()
        ];

        // var_dump($data);
        // die;
        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_santri/data_histori', $data);
        $this->load->view('templates/footer_dashboard');
    }

    public function tambah_history_pendidikan_santri(){
    $this->form_validation->set_rules('id_santri' , 'ID Santri' , 'required');
    $this->form_validation->set_rules('nama_lembaga' , 'Nama Lembaga' , 'required');
    $this->form_validation->set_rules('tahun_awal' , 'Tahun Awal' , 'required');
    $this->form_validation->set_rules('tahun_akhir' , 'Tahun Akhir' , 'required');

    if ($this->form_validation->run() !=false) {
        # code...

        $data = array(
           $id = 'id_santri'=> $this->input->post('id_santri'),
            'id_lembaga' => $this->input->post('nama_lembaga'),
            'tahun_masuk_lembaga' => $this->input->post('tahun_awal'),
            'tahun_keluar_lembaga' => $this->input->post('tahun_akhir')


        );

        $this->data_santri_model->tambah_history_pendidikan($data);
        redirect(base_url('data_santri/histori_pendidikan?id_santri=' . $this->input->post('id_santri')));
// var_dump($data);
        // echo "input sukses!";
    } else {
       
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Data History Pendidikan Gagal Di Tambah');
    window.location.href='" . base_url('data_santri/histori_pendidikan?id_santri=' . $this->input->post('id_santri')) . "';
    </script>");

    }
    

        

    }
    public function ubah_history_pendidikan() {
        $id_santri = $this->input->get('id_santri');
        $id_history = $this->input->get('id_history');

        if (!$id_santri || !$id_history) {
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('ID Santri dan ID History harus ada.');
                window.location.href='" . base_url('data_santri/histori_pendidikan') . "';
                </script>");
            return;
        }

        $data = [
            'title' => 'Ubah History Pendidikan',
            'history' => $this->data_santri_model->get_history_pendidikan_by_id($id_santri, $id_history),
            'lembaga' => $this->data_lembaga_pendidikan_model->lihat_lembaga()->result()
        ];

        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_santri/ubah_history_pendidikan', $data);
        $this->load->view('templates/footer_dashboard');
    }

    public function hapus_history_pendidikan_santri($id_history){
        $this->data_santri_model->hapus_history_pendidikan($id_history);
        redirect(base_url('data_santri/histori_pendidikan?id_santri=' . $this->session->userdata('id_santri')));
    }

    

    public function ubah_history_pendidikan_santri(){
        $id_history = $this->input->post('id_history'); 
        $this->form_validation->set_rules('nama_lembaga', 'Nama Lembaga', 'required');
        $this->form_validation->set_rules('tahun_awal', 'Tahun Awal', 'required');
        $this->form_validation->set_rules('tahun_akhir', 'Tahun Akhir', 'required');

        if ($this->form_validation->run()) {
            $data = [
                'id_lembaga' => $this->input->post('nama_lembaga'),
                'tahun_masuk_lembaga' => $this->input->post('tahun_awal'),
                'tahun_keluar_lembaga' => $this->input->post('tahun_akhir')
            ];

            $this->data_santri_model->ubah_history_pendidikan($id_history, $data);
            redirect(base_url('data_santri/histori_pendidikan?id_santri=' . $this->input->post('id_santri')));
        } else {
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Gagal memperbarui Data History Pendidikan');
    window.location.href='" . base_url('data_santri/histori_pendidikan?id_santri=' . $this->input->post('id_santri')) . "';
    </script>");
        }
    }
}
?>
