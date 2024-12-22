<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_rombel extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!is_login()) redirect('auth');
		$this->load->model('Tahun_ajaran_model');
		$this->load->model('Data_lembaga_pendidikan_model');
		$this->load->model('Data_rombel_model');
		$this->load->model('Data_Kelas_model');
		$this->load->model('Data_santri_model');
	}

	public function index()
	{
		// Ambil parameter tahun ajaran dari URL
		$tahun_ajaran_id = $this->input->get('tahun_ajaran');

		// Simpan tahun ajaran yang dipilih ke dalam session
		if (!empty($tahun_ajaran_id)) {
			$this->session->set_userdata('selected_tahun_ajaran', $tahun_ajaran_id);
		}

		// Ambil data lembaga dan hierarki data
		$lembaga = $this->Data_lembaga_pendidikan_model->lihat_lembaga();
		$data_hierarki = $this->Data_rombel_model->getHierarkiRombel($this->session->userdata('selected_tahun_ajaran'));

		$data = [
			'title' => 'Data Sebaran Rombel',
			'tahun_ajaran' => $this->Tahun_ajaran_model->lihat_tahun_ajaran(),
			'lembaga' => $lembaga,
			'data_rombel' => $data_hierarki,
			'data_hierarki' => $data_hierarki,
			'selected_tahun_ajaran' => $this->session->userdata('selected_tahun_ajaran') // Ambil dari session
		];

		// var_dump($data);
		// die;
		// log_message('debug', 'Data rombel setelah penghapusan: ' . json_encode($data_hierarki));
		// Muat tampilan
		$this->load->view('templates/header_dashboard', $data);
		$this->load->view('content/data_rombel/data_rombel', $data);
		$this->load->view('templates/footer_dashboard');
	}


	public function tambah_rombel()
	{
		// Validasi input form
		$this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required', ['required' => 'Tahun Ajaran harus diisi']);
		$this->form_validation->set_rules('pilih_santri[]', 'Pilih Santri', 'required', ['required' => 'Setidaknya satu santri harus dipilih']);
		$this->form_validation->set_rules('lembaga', 'Lembaga Pendidikan', 'required', ['required' => 'Lembaga Pendidikan harus diisi']);
		$this->form_validation->set_rules('kelas', 'Kelas', 'required', ['required' => 'Kelas harus diisi']);

		// Jika validasi berhasil
		if ($this->form_validation->run() != false) {
			// Ambil data dari input form
			$tahun_ajaran = $this->input->post('tahun_ajaran');
			$santri_ids = $this->input->post('pilih_santri'); // Array santri terpilih
			$lembaga_pendidikan = $this->input->post('lembaga');
			$kelas = $this->input->post('kelas');


			// Siapkan data untuk proses batch insert
			$data_rombel = [];
			foreach ($santri_ids as $id_santri) {
				$data_rombel[] = [
					'santri' => $id_santri,
					'tahun_ajaran' => $tahun_ajaran,
					'lembaga' => $lembaga_pendidikan,
					'kelas' => $kelas,

				];
			}
			// Insert batch
			$this->Data_rombel_model->tambah_rombel_batch($data_rombel);

			// Redirect setelah sukses

			// Pesan alert yang ingin ditampilkan
			$message = "Penempatan Rombel Santri telah Berhasil!";

			// Mendapatkan base_url dari konfigurasi CodeIgniter
			$base_url = base_url('data_rombel/tambah_rombel');

			// Menggunakan echo untuk menghasilkan kode JavaScript
			echo "<script type='text/javascript'>
				alert('$message');
				window.location.href = '$base_url';
			</script>";
			// redirect('Data_penempatan_santri');

		} else {
			// Jika validasi gagal, tampilkan kembali form dengan error
			$data = [
				'title' => 'Tambah Data Rombel',
				'tahun' => $this->Tahun_ajaran_model->lihat_tahun_ajaran(),
				'load_santri' => $this->Data_santri_model->lihat_santri_aktif()->result(),
				'lembaga' => $this->Data_lembaga_pendidikan_model->lihat_lembaga()->result(),
				'error' => validation_errors() // Menyertakan error validasi
			];
			// echo validation_errors();
			// Tampilkan view dengan data
			$this->load->view('templates/header_dashboard', $data);
			$this->load->view('content/data_rombel/tambah_rombel', $data);
			$this->load->view('templates/footer_dashboard');
		}
	}

	public function hapus_santri($id)
	{

		// Menentukan kondisi untuk penghapusan
		// $where = array('id_rombel' => $id);
		$test = 	$this->Data_rombel_model->hapus_santri($id);
		// // Redirect kembali ke halaman data rombel
		// echo $test->affected_rows;
		// die;
		redirect('data_rombel');
		// echo "penghapusan berhasil";
	}



	// public function tambah_rombel()
	// {

	// 	$this->form_validation->set_rules('tahun_ajaran', 'Tahun Ajaran', 'required', array('required' => 'Tahun Ajaran harus diisi'));
	// 	$this->form_validation->set_rules('pilih_santri[]', 'Pilih Santri', 'required',  array('required' => 'Santri harus diisi'));
	// 	$this->form_validation->set_rules('lembaga_pendidikan', 'Lembaga Pendidikan', 'required', array('required' => 'Lembaga Pendidikan harus diisi'));
	// 	$this->form_validation->set_rules('kelas', 'Kelas', 'required', 	array('required' => 'Kelas harus diisi'));

	// 	if ($this->form_validation->run() != false) {


	// 		// Data dari form
	// 		$santri_ids = $this->input->post('pilih_santri'); // Array of selected santri
	// 		$wilayah_id = $this->input->post('pilih_wilayah');
	// 		$kamar_id = $this->input->post('pilih_kamar');

	// 		// Siapkan data untuk insert_batch
	// 		$data_penempatan = [];
	// 		foreach ($santri_ids as $id_santri) {
	// 			$data_penempatan[] = [
	// 				'id_santri' => $id_santri,
	// 				'id_wilayah' => $wilayah_id,
	// 				'id_kamar' => $kamar_id
	// 			];
	// 		}

	// 		// Insert batch
	// 		$this->data_penempatan_model->tambah_penempatan_batch($data_penempatan);

	// 		// Redirect setelah sukses





	// 	} else {

	// 		$data = [
	// 			'title' => 'Tambah Data Rombel',
	// 			'tahun' => $this->Tahun_ajaran_model->lihat_tahun_ajaran(),
	// 			'load_santri' => $this->Data_santri_model->lihat_santri_aktif()->result(),
	// 			'lembaga' => $this->Data_lembaga_pendidikan_model->lihat_lembaga()->result()

	// 		];
	// 		// var_dump($data['hitung_per_wilayah']);
	// 		$this->load->view('templates/header_dashboard', $data);
	// 		$this->load->view('content/data_rombel/tambah_rombel', $data);
	// 		$this->load->view('templates/footer_dashboard');
	// 	}
	// }

	public function lihat_santri_non_ta()
	{
		$cari = $this->input->post('tahun_ajaran');
		$data = $this->Data_rombel_model->lihat_santri_tidak_rombel($cari);
		echo json_encode($data);
	}

	public function get_kelas_by_lembaga()
	{
		$cari = $this->input->post('lembaga');
		$data = $this->Data_Kelas_model->get_kelas_by_lembaga($cari)->result();
		echo json_encode($data);
	}
}

/* End of file Data_rombel.php and path \application\controllers\Data_rombel.php */
