<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekspor_data extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) redirect('auth');
		$this->load->model('Ekspor_data_model');
		$this->load->model('Data_santri_model');
		$this->load->model('Data_wilayah_model');
	}


	public function index()
	{

		$data = [
			'title' => 'Ekspor Data Santri',
			'data_santri' => $this->Data_santri_model->lihat_santri_semua()->result(),
			'load_wilayah' => $this->Data_wilayah_model->lihat_wilayah()->result(),
			'tahun_angkatan' => $this->Ekspor_data_model->list_tahun()->result()
		];

		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/ekspor_data/ekspor_santri', $data);
		$this->load->view('templates/footer_dashboard');
	}
	public function ekspor_persantri_pdf()
	{

		$this->form_validation->set_rules('id_santri', 'Data Santri', 'required', array('required' => 'Data Santri Wajib Dipilih'));

		if ($this->form_validation->run() != false) {
			$id_santri = $this->input->post('id_santri');
			$test = $this->Ekspor_data_model->ekspor_persantri($id_santri);


			$this->load->library('pdfgenerator');

			// $where = $id_santri;
			$data_santri = $this->Ekspor_data_model->ekspor_persantri($id_santri);
			// $data_lembaga = $this->data_lembaga_pendidikan_model->lihat_lembaga()->result();

			$data = [
				'title' => 'Data Santri',
				'santri' => $data_santri,
				// 'lembaga' => $data_lembaga
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
			$html = $this->load->view('cetak/identitas_santri_lengkap', $data, true);

			// Membuat PDF
			$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);





			// var_dump($test);
		} else {
			redirect('Ekspor_data');
		}
	}


	public function ekspor_pertahun()
	{
		$this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required' => 'Tahun harus diisi'));
		if ($this->form_validation->run() != false) {
			$this->load->library('excel');

			$tahun =  $this->input->post('tahun');
			$data_penghuni = $this->Ekspor_data_model->ekspor_pertahun($tahun);
			$excel = new Excel();
			$excel->setActiveSheetIndex(0);
			$sheet = $excel->getActiveSheet();

			// Set header
			$headers = [
				"No", "No Induk Santri", "Nama Lengkap Santri", "Tanggal Masuk", "Tempat Lahir",
				"Tanggal Lahir", "Nama Ayah", "Nama Ibu", "Alamat Dusun", "Alamat Desa",
				"Alamat Kecamatan", "Alamat Kabupaten", "Alamat Provinsi", "No HP",
				"Lembaga Awal", "Lembaga Saat Ini", "Kelas Saat Ini", "Nama Wilayah", "Nama Kamar"
			];

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
				$sheet->setCellValueByColumnAndRow(1, $row, (string)$data->no_induk_santri ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(2, $row, (string)$data->nama_lengkap_santri ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(3, $row, (string)$data->tanggal_masuk ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(4, $row, (string)$data->tempat_lahir ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(5, $row, (string)$data->tanggal_lahir ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(6, $row, (string)$data->nama_ayah ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(7, $row, (string)$data->nama_ibu ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(8, $row, (string)$data->alamat_dusun ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(9, $row, (string)$data->alamat_desa ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(10, $row, (string)$data->alamat_kecamatan ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(11, $row, (string)$data->alamat_kabupaten ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(12, $row, (string)$data->alamat_provinsi ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(13, $row, (string)$data->no_hp ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(14, $row, (string)$data->lembaga_awal ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(15, $row, (string)$data->lembaga_akhir ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(16, $row, (string)$data->nama_kelas ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(17, $row, (string)$data->nama_wilayah ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(18, $row, (string)$data->nama_kamar ?? 'Tidak ada data');
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
		} else {
			redirect('Ekspor_data');
		}
	}


	public function ekspor_perwilayah()
	{

		$this->form_validation->set_rules('pilih_wilayah', 'Wilayah', 'required', array('required' => 'WIlayah Wajib Dipilih'));

		if ($this->form_validation->run() != false) {

			$wilayah = $this->input->post('pilih_wilayah');
			$kamar = $this->input->post('pilih_kamar');


			// Load library Excel
			$this->load->library('excel');
			$this->load->model('data_penempatan_model');

			// Ambil data santri per wilayah dan kamar
			$data_penghuni = $this->Ekspor_data_model->ekspor_persantri_perwilayah_kamar($wilayah, $kamar);
			// var_dump($data_penghuni);
			// die;
			// Inisialisasi Excel
			$excel = new Excel();
			$excel->setActiveSheetIndex(0);
			$sheet = $excel->getActiveSheet();

			// Set header
			$headers = [
				"No", "No Induk Santri", "Nama Lengkap Santri", "Tanggal Masuk", "Tempat Lahir",
				"Tanggal Lahir", "Nama Ayah", "Nama Ibu", "Alamat Dusun", "Alamat Desa",
				"Alamat Kecamatan", "Alamat Kabupaten", "Alamat Provinsi", "No HP",
				"Lembaga Awal", "Lembaga Saat Ini", "Kelas Saat Ini", "Nama Wilayah", "Nama Kamar"
			];

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
				$sheet->setCellValueByColumnAndRow(1, $row, (string)$data->no_induk_santri ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(2, $row, (string)$data->nama_lengkap_santri ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(3, $row, (string)$data->tanggal_masuk ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(4, $row, (string)$data->tempat_lahir ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(5, $row, (string)$data->tanggal_lahir ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(6, $row, (string)$data->nama_ayah ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(7, $row, (string)$data->nama_ibu ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(8, $row, (string)$data->alamat_dusun ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(9, $row, (string)$data->alamat_desa ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(10, $row, (string)$data->alamat_kecamatan ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(11, $row, (string)$data->alamat_kabupaten ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(12, $row, (string)$data->alamat_provinsi ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(13, $row, (string)$data->no_hp ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(14, $row, (string)$data->lembaga_awal ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(15, $row, (string)$data->lembaga_akhir ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(16, $row, (string)$data->nama_kelas ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(17, $row, (string)$data->nama_wilayah ?? 'Tidak ada data');
				$sheet->setCellValueByColumnAndRow(18, $row, (string)$data->nama_kamar ?? 'Tidak ada data');
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





			var_dump($data_penghuni);
		} else {
			redirect('Ekspor_data');
		}
	}
}

/* End of file Ekspor_data.php and path \application\controllers\Ekspor_data.php */
