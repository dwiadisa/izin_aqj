<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_santri_riyadhoh extends CI_Controller {

    public function __construct()
    {         

        parent::__construct();
         if (!is_login()) redirect('auth');
         $this->load->model('Data_santri_riyadhoh_model');
    }

    public function index()
    {
           $data = [
            'title' => 'Data Santri Riyadhoh' ,
            'load_santri_riyadhoh' => $this->Data_santri_riyadhoh_model->lihat_santri_riyadhoh()->result()
        ];  

        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_santri_riyadhoh/data_santri_riyadhoh',$data);
        $this->load->view('templates/footer_dashboard');



    }

    public function tambah_santri_riyadhoh()
    {
      
        $this->form_validation->set_rules('nama_santri_riyadhoh', 'Nama Santri Riyadhoh', 'required', array('required' => 'Nama Santri Riyadhoh harus diisi.'));
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', array('required' => 'Tempat Lahir harus diisi.'));
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', array('required' => 'Tanggal Lahir harus diisi.'));
        $this->form_validation->set_rules('alamat_desa', 'Desa / Kelurahan', 'required', array('required' => 'Desa / Kelurahan harus diisi.'));
        $this->form_validation->set_rules('alamat_kecamatan', 'Kecamatan', 'required', array('required' => 'Kecamatan harus diisi.'));
        $this->form_validation->set_rules('alamat_kabupaten', 'Kabupaten/Kota', 'required', array('required' => 'Kabupaten/Kota harus diisi.'));
        $this->form_validation->set_rules('alamat_provinsi', 'Provinsi', 'required', array('required' => 'Provinsi harus diisi.'));
        $this->form_validation->set_rules('no_nik', 'No. NIK', 'required|numeric', array('required' => 'No. NIK harus diisi.', 'numeric' => 'No. NIK harus berupa angka.'));
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required|numeric', array('required' => 'No. HP harus diisi.', 'numeric' => 'No. HP harus berupa angka.'));
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required', array('required' => 'Nama Wali harus diisi.'));
        $this->form_validation->set_rules('no_hp_wali', 'No. HP Wali', 'required|numeric', array('required' => 'No. HP Wali harus diisi.', 'numeric' => 'No. HP Wali harus berupa angka.'));

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Tambah Santri Riyadhoh',
            ];

            $this->load->view('templates/header_dashboard', $data);
            $this->load->view('content/data_santri_riyadhoh/tambah_santri_riyadhoh', $data);
            $this->load->view('templates/footer_dashboard');
        } else {
            $data_santri = [
                'nama_santri_riyadhoh' => $this->input->post('nama_santri_riyadhoh'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat_desa' => $this->input->post('alamat_desa'),
                'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
                'alamat_kabupaten' => $this->input->post('alamat_kabupaten'),
                'alamat_provinsi' => $this->input->post('alamat_provinsi'),
                'no_nik' => $this->input->post('no_nik'),
                'no_hp' => $this->input->post('no_hp'),
                'nama_wali' => $this->input->post('nama_wali'),
                'no_hp_wali' => $this->input->post('no_hp_wali'),
                'tanggal_daftar' => date('Y-m-d'),
                'tahun_daftar' => date('Y'),
                'tanggal_tenggat' => date('Y-m-d', strtotime('+40 days', strtotime(date('Y-m-d')))),
                
            ];

    
            var_dump($data_santri);
            die;
            $this->Data_santri_riyadhoh_model->tambah_santri_riyadhoh($data_santri);

            redirect('data_santri_riyadhoh');
        }



    }
    public function ubah_santri_riyadhoh($id)
    {
        $this->form_validation->set_rules('nama_santri_riyadhoh', 'Nama Santri Riyadhoh', 'required', array('required' => 'Nama Santri Riyadhoh harus diisi.'));
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', array('required' => 'Tempat Lahir harus diisi.'));
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', array('required' => 'Tanggal Lahir harus diisi.'));
        $this->form_validation->set_rules('alamat_desa', 'Desa / Kelurahan', 'required', array('required' => 'Desa / Kelurahan harus diisi.'));
        $this->form_validation->set_rules('alamat_kecamatan', 'Kecamatan', 'required', array('required' => 'Kecamatan harus diisi.'));
        $this->form_validation->set_rules('alamat_kabupaten', 'Kabupaten/Kota', 'required', array('required' => 'Kabupaten/Kota harus diisi.'));
        $this->form_validation->set_rules('alamat_provinsi', 'Provinsi', 'required', array('required' => 'Provinsi harus diisi.'));
        $this->form_validation->set_rules('no_nik', 'No. NIK', 'required|numeric', array('required' => 'No. NIK harus diisi.', 'numeric' => 'No. NIK harus berupa angka.'));
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required|numeric', array('required' => 'No. HP harus diisi.', 'numeric' => 'No. HP harus berupa angka.'));
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required', array('required' => 'Nama Wali harus diisi.'));
        $this->form_validation->set_rules('no_hp_wali', 'No. HP Wali', 'required|numeric', array('required' => 'No. HP Wali harus diisi.', 'numeric' => 'No. HP Wali harus berupa angka.'));
        $this->form_validation->set_rules('tanggal_daftar', 'Tanggal Daftar', 'required', array('required' => 'Tanggal Daftar harus diisi.'));
        $this->form_validation->set_rules('tanggal_tenggat', 'Tanggal Tenggat', 'required', array('required' => 'Tanggal Tenggat harus diisi.'));

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Ubah Santri Riyadhoh',
                'data_santri' => $this->Data_santri_riyadhoh_model->get_santri_by_id($id)
            ];
// var_dump($data);
// die;
            $this->load->view('templates/header_dashboard', $data);
            $this->load->view('content/data_santri_riyadhoh/ubah_santri_riyadhoh', $data);
            $this->load->view('templates/footer_dashboard');
        } else {
            $data_santri = [
                'nama_santri_riyadhoh' => $this->input->post('nama_santri_riyadhoh'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat_desa' => $this->input->post('alamat_desa'),
                'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
                'alamat_kabupaten' => $this->input->post('alamat_kabupaten'),
                'alamat_provinsi' => $this->input->post('alamat_provinsi'),
                'no_nik' => $this->input->post('no_nik'),
                'no_hp' => $this->input->post('no_hp'),
                'nama_wali' => $this->input->post('nama_wali'),
                'no_hp_wali' => $this->input->post('no_hp_wali'),
                'tanggal_daftar' => $this->input->post('tanggal_daftar'),
                'tanggal_tenggat' => $this->input->post('tanggal_tenggat'),
            ];

            $this->Data_santri_riyadhoh_model->ubah_santri_riyadhoh($id, $data_santri);

            redirect('data_santri_riyadhoh');
        }
    }

public function print_santri_riyadhoh($id){
    // Memuat library PDFGenerator
    $this->load->library('pdfgenerator');

    // Mengambil data santri berdasarkan ID
    $data_santri = $this->Data_santri_riyadhoh_model->get_santri_by_id($id);
  

    // Menyiapkan data untuk ditampilkan pada PDF
    $data = [
        'title' => 'Data Santri Riyadhoh',
        'santri' => $data_santri,
       
    ];

    // Judul PDF
    $title_pdf = 'Data Santri Riyadhoh';

    // Nama file PDF saat diunduh
    $file_pdf = 'data_santri_riyadhoh_' . $id . '.pdf';

    // Pengaturan kertas
    $paper = 'A4';

    // Orientasi kertas
    $orientation = "portrait";

    // Mengenerate HTML view
    $html = $this->load->view('cetak/cetak_santri_riyadhoh', $data, true);

    // Membuat PDF
    $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
}

public function cetak_santri_riyadhoh()
{
    
         $data = [
            'title' => ' Ekspor Data Santri Riyadhoh' ,
            'load_santri_riyadhoh' => $this->Data_santri_riyadhoh_model->lihat_santri_riyadhoh()->result()
        ];  

        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_santri_riyadhoh/cetak_santri_riyadhoh',$data);
        $this->load->view('templates/footer_dashboard');

}


public function download_rekapan_excel()
{
     $this->load->library('excel');
    $data_santri = $this->Data_santri_riyadhoh_model->lihat_santri_riyadhoh()->result();
//   $data_rekapan_izin = $this->Data_perizinan_model->lihat_perizinan()->result();


        $excel = new Excel();
        $excel->setActiveSheetIndex(0);
        $sheet = $excel->getActiveSheet();

        // Set header
        $headers = ["No", "Nama Santri", "Tempat Lahir", "Tanggal Lahir", "Alamat Desa", "Alamat Kecamatan", "Alamat Kabupaten", "Alamat Provinsi", "No. NIK", "No. HP", "Nama Wali", "No. HP Wali", "Tahun Daftar", "Tanggal Daftar", "Tanggal Tenggat", "Status"];
       
        $column = 0;
        foreach ($headers as $header) {
            $sheet->setCellValueByColumnAndRow($column, 1, $header);
            $column++;
        }

        // Set data
        $row = 2;   
        $no = 1;
        foreach ($data_santri as $data) {
            $sheet->setCellValueByColumnAndRow(0, $row, (string)$no++);
            $sheet->setCellValueByColumnAndRow(1, $row, (string)$data->nama_santri_riyadhoh);
            $sheet->setCellValueByColumnAndRow(2, $row, (string)$data->tempat_lahir);
            $sheet->setCellValueByColumnAndRow(3, $row, (string)$data->tanggal_lahir);
            $sheet->setCellValueByColumnAndRow(4, $row, (string)$data->alamat_desa);
            $sheet->setCellValueByColumnAndRow(5, $row, (string)$data->alamat_kecamatan);
            $sheet->setCellValueByColumnAndRow(6, $row, (string)$data->alamat_kabupaten);
            $sheet->setCellValueByColumnAndRow(7, $row, (string)$data->alamat_provinsi);
            $sheet->setCellValueByColumnAndRow(8, $row, (string)$data->no_nik);
            $sheet->setCellValueByColumnAndRow(9, $row, (string)$data->no_hp);
            $sheet->setCellValueByColumnAndRow(10, $row, (string)$data->nama_wali);
            $sheet->setCellValueByColumnAndRow(11, $row, (string)$data->no_hp_wali);
            $sheet->setCellValueByColumnAndRow(12, $row, (string)$data->tahun_daftar);
            $sheet->setCellValueByColumnAndRow(13, $row, (string)$data->tanggal_daftar);
            $sheet->setCellValueByColumnAndRow(14, $row, (string)$data->tanggal_tenggat);
            // $sheet->setCellValueByColumnAndRow(15, $row, (string)$data->status);
            $row++;
        }

        // Save the file
        $filename = "Rekapan_Santri_Riyadhoh_" . date("YmdHis") . ".xlsx";
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

public function hapus_santri_riyadhoh($id)
{
    $this->Data_santri_riyadhoh_model->hapus_santri_riyadhoh($id);
    redirect('data_santri_riyadhoh');
}

}

/* End of file Data_santri_riyadhoh.php and path \application\controllers\Data_santri_riyadhoh.php */
