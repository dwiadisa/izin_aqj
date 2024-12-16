<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penempatan_santri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
          if (!is_login()) redirect('auth');
        $this->load->model('data_penempatan_model');
        $this->load->model('data_wilayah_model');
        $this->load->model('data_santri_model');
		
    }

    public function index()
    {
		 // Load model
        // $this->load->model('DataPenempatanModel');
         $this->load->model('data_wilayah_model');
        // Ambil data hierarki penempatan
        $data_penempatan = $this->data_penempatan_model->getPenempatanHierarki();

        // Siapkan data untuk view
        $data = [
            'title' => 'Kelola Penempatan Santri',
            'data_penempatan' => $data_penempatan
        ];

        // Load view
        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_penempatan/lihat_penempatan', $data);
        $this->load->view('templates/footer_dashboard');








    //    $data =[
    //         'title' => 'Kelola Penempatan Santri',
    //         'lihat_penempatan' => $this->data_penempatan_model->lihat_penempatan()->result(),
    //         'load_wilayah' => $this->data_wilayah_model->lihat_wilayah()->result()
         

    //    ];
    //         // var_dump($data);
    //     $this->load->view('templates/header_dashboard' , $data);
    //     $this->load->view('content/data_penempatan/lihat_penempatan', $data);
    //     $this->load->view('templates/footer_dashboard');


    }


    // untuk jquery

    public function get_kamar(){
        $id_wilayah = $this->input->post('id');
        $data = $this->data_wilayah_model->get_kamar($id_wilayah);
        echo json_encode($data);
        // echo json_decode($data);
    }

	public function tambah_penempatan_santri()
	{
    $data = [
        'title' => 'Tambah Penempatan Santri',
        'load_santri' => $this->data_penempatan_model->santri_tidak_terdaftar()->result(),
        'load_wilayah' => $this->data_wilayah_model->lihat_wilayah()->result(),
        'load_kamar' => $this->data_wilayah_model->lihat_kamar()->result()
    ];

    // Validasi form
    $this->form_validation->set_rules('pilih_santri[]', 'Santri', 'required', ['required' => 'Santri harus dipilih.']);
    $this->form_validation->set_rules('pilih_wilayah', 'Wilayah', 'required', ['required' => 'Wilayah harus dipilih.']);
    $this->form_validation->set_rules('pilih_kamar', 'Kamar', 'required', ['required' => 'Kamar harus dipilih.']);

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_penempatan/tambah_penempatan', $data);
        $this->load->view('templates/footer_dashboard');
    } else {
        // Data dari form
        $santri_ids = $this->input->post('pilih_santri'); // Array of selected santri
        $wilayah_id = $this->input->post('pilih_wilayah');
        $kamar_id = $this->input->post('pilih_kamar');

        // Siapkan data untuk insert_batch
        $data_penempatan = [];
        foreach ($santri_ids as $id_santri) {
            $data_penempatan[] = [
                'id_santri' => $id_santri,
                'id_wilayah' => $wilayah_id,
                'id_kamar' => $kamar_id
            ];
        }

        // Insert batch
        $this->data_penempatan_model->tambah_penempatan_batch($data_penempatan);

				// Redirect setelah sukses

				// Pesan alert yang ingin ditampilkan
		$message = "Penempatan Santri telah Berhasil!";

		// Mendapatkan base_url dari konfigurasi CodeIgniter
		$base_url = base_url('data_penempatan_santri/tambah_penempatan_santri');

		// Menggunakan echo untuk menghasilkan kode JavaScript
		echo "<script type='text/javascript'>
				alert('$message');
				window.location.href = '$base_url';
			</script>";
        // redirect('Data_penempatan_santri');
    	}
	}





        // $this->load->view('templates/header_dashboard' , $data);
        // $this->load->view('content/data_penempatan/tambah_penempatan', $data);
        // $this->load->view('templates/footer_dashboard');



        public function pindah_penempatan($id_penghuni){
            $data = [
                'title' => 'Pindah Penempatan Santri',
                'load_penempatan' => $this->data_penempatan_model->lihat_penempatan_by_id($id_penghuni),
                'load_wilayah' => $this->data_wilayah_model->lihat_wilayah()->result(),
                'load_kamar' => $this->data_wilayah_model->lihat_kamar()->result()
            ];

            $this->form_validation->set_rules('pilih_wilayah', 'Wilayah Baru', 'required', array('required' => 'Wilayah baru harus dipilih.'));
            $this->form_validation->set_rules('pilih_kamar', 'Kamar Baru', 'required', array('required' => 'Kamar baru harus dipilih.'));

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header_dashboard', $data);
                $this->load->view('content/data_penempatan/pindah_penempatan', $data);
                $this->load->view('templates/footer_dashboard');
            } else {
                $data_penempatan_baru = array(
                    'id_wilayah' => $this->input->post('pilih_wilayah'),
                    'id_kamar' => $this->input->post('pilih_kamar')
                );

                $this->data_penempatan_model->ubah_penempatan($id_penghuni, $data_penempatan_baru);
                redirect('Data_penempatan_santri');
            }
        }


        public function hapus_penempatan($id_penghuni){
            $this->data_penempatan_model->hapus_penempatan($id_penghuni);
            redirect('Data_penempatan_santri');
        }
    public function testing(){
        
        $data = [

            
            'load_kamar' => $this->data_wilayah_model->lihat_kamar()->result(),
          
        ];
        $wilayah =   $this->data_wilayah_model->lihat_wilayah()->result();

        foreach($wilayah as $w){
        echo $w->nama_wilayah. "<br>";
        $kamar = $this->data_penempatan_model->lihat_penempatan_by_kamar($w->id_wilayah);
        foreach($kamar as $k){
            echo $k->nama_kamar. "<br>";
            $penghuni = $this->data_penempatan_model->lihat_penghuni($k->id_kamar);
            foreach($penghuni as $p){
                echo $p->nama_lengkap_santri. "<br>";
            }
        }

        }
      
        // var_dump($data);
        // die();



    }

    public function ekspor_data_santri(){

        $data= [
            'title' => 'Ekspor Data Santri',
            'wilayah'=> $this->data_wilayah_model->lihat_wilayah()->result()
        ];

    //  var_dump($data);
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_penempatan/ekspor_data_santri', $data);
        $this->load->view('templates/footer_dashboard');
    }

    public function download_excel_perwilayah($id){
        $this->load->library('excel');
        $this->load->model('data_penempatan_model');

        $data_penghuni = $this->data_penempatan_model->ekspor_perwilayah($id)->result();

        $excel = new Excel();
        $excel->setActiveSheetIndex(0);
        $sheet = $excel->getActiveSheet();

        // Set header
        $headers = ["No","No Induk Santri","Tanggal Masuk", "Nama Santri", "Tempat Lahir", "Tanggal Lahir","Nama Ayah","Nama Ibu", "Alamat Desa","Alamat Kecamatan" ,"Alamat Kabupaten", "Alamat Provinsi","No HP" ,"Nama Wilayah", "Nama Kamar"];
        // $headers = [
        //     'ID Santri', 'Tahun Masuk','Bulan Masuk', 'No Urut', 'No Induk Santri', 'Nama Lengkap Santri', 'Tanggal Masuk', 'Tempat Lahir', 
        //     'Tanggal Lahir', 'Alamat Dusun', 'Alamat Desa', 'Alamat Kecamatan', 'Alamat Kabupaten', 
        //     'Alamat Provinsi', 'Pendidikan Dipilih', 'Nama Ayah', 'Pekerjaan Ayah','Nama Ibu' , 'No HP', 'Foto', 'Status Santri', 'Lembaga Pendidikan dipilih'
        // ];
        $column = 0;
        foreach ($headers as $header) {
            $sheet->setCellValueByColumnAndRow($column, 1, $header);
            $column++;
        }

        // Set data
        $row = 2;
        $no = 1;
        foreach ($data_penghuni as $data) {
            $sheet->setCellValueByColumnAndRow(0, $row, (string)$no++);
            $sheet->setCellValueByColumnAndRow(1, $row, (string)$data->no_induk_santri);
            $sheet->setCellValueByColumnAndRow(2, $row, (string)$data->tanggal_masuk);
            $sheet->setCellValueByColumnAndRow(3, $row, (string)$data->nama_lengkap_santri);
            $sheet->setCellValueByColumnAndRow(4, $row, (string)$data->tempat_lahir);
            $sheet->setCellValueByColumnAndRow(5, $row, (string)$data->tanggal_lahir);
            $sheet->setCellValueByColumnAndRow(6, $row, (string)$data->nama_ayah);
            $sheet->setCellValueByColumnAndRow(7, $row, (string)$data->nama_ibu);
            $sheet->setCellValueByColumnAndRow(8, $row, (string)$data->alamat_desa);
            $sheet->setCellValueByColumnAndRow(9, $row, (string)$data->alamat_kecamatan);
            $sheet->setCellValueByColumnAndRow(10, $row, (string)$data->alamat_kabupaten);
            $sheet->setCellValueByColumnAndRow(11, $row, (string)$data->alamat_provinsi);
            $sheet->setCellValueByColumnAndRow(12, $row, (string)$data->no_hp);
            $sheet->setCellValueByColumnAndRow(13, $row, (string)$data->nama_wilayah);
            $sheet->setCellValueByColumnAndRow(14, $row, (string)$data->nama_kamar);
            $row++;
        }

        // Save the file
        $filename = "Data_Santri_Perwilayah_" . date("YmdHis") . ".xlsx";
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
    
}

/* End of file Data_penempatan_santri.php and path \application\controllers\Data_penempatan_santri.php */
