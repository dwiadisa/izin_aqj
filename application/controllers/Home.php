<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Data_penempatan_model');
		$this->load->model('home_model');
		$this->load->model('Data_perizinan_model');
		$this->load->model('Data_santri_riyadhoh_model');
		$this->load->model('Kiosk_model');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{

		$data = [
			'title' => 'Self Service SIPP-TREN Al-Qodiri Jember',
			'load_penempatan' => $this->Data_penempatan_model->lihat_penempatan()->result(),


		];
		$cek_kiosk = $this->Kiosk_model->lihat_setting();

		if ($cek_kiosk->status != 'AKTIF') {
			$this->load->view('halaman_blokir/kiosk_nonaktif');
			// die;
		} else {

			$this->load->view('home', $data);
		}
	}

	public function get_izin()
	{
		$izin = $this->input->post('kode_izin');
		$cari_izin = $this->home_model->lihat_lisensi_izin($izin)->result();
		// json_encode($cari_izin);
		// var_dump($cari_izin);
		if (!empty($cari_izin)) {
			echo json_encode($cari_izin[0]); // Asumsikan hanya ada satu hasil, jika ada lebih dari satu, sesuaikan sesuai kebutuhan.
		} else {
			echo json_encode(null);
		}
	}

	public function izin_kembali($kode)
	{
		$izin  = $this->home_model->lihat_lisensi_izin($kode)->row();

		$waktu_sekarang = date('Y-m-d H:i:s');
		$waktu_selesai = $izin->tanggal_akhir . ' ' . $izin->jam_akhir;
		if (strtotime($waktu_sekarang) > strtotime($waktu_selesai)) {
			$this->home_model->update_izin($kode, 'TERLAMBAT KEMBALI');
			// echo "Perizinan terlambat";

		} else {
			$this->home_model->update_izin($kode, 'SUDAH KEMBALI');
			// echo "Perizinan tidak terlambat";
		}
		redirect('home');
	}

	public function tambah_perizinan()
	{
		$this->form_validation->set_rules('kode_perizinan', 'Kode Perizinan', 'required', array('required' => 'Kode Perizinan wajib diisi.'));
		$this->form_validation->set_rules('id_santri', 'ID Santri', 'required', array('required' => 'ID Santri wajib diisi.'));
		$this->form_validation->set_rules('tanggal_akhir', 'Tanggal Akhir', 'required', array('required' => 'Tanggal Akhir wajib diisi.'));
		$this->form_validation->set_rules('jam_akhir', 'Jam Akhir', 'required', array('required' => 'Jam Akhir wajib diisi.'));
		$this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan wajib diisi.'));
		$this->form_validation->set_rules('no_wali', 'No. HP Wali Santri', 'required', array('required' => 'Masukkan No. HP Wali Santri'));

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah Data Perizinan Santri',

				'load_penempatan' => $this->Data_penempatan_model->lihat_penempatan()->result(),
				// 'load_user' => $this->Data_user_model->lihat_user()->result()
			];

			// Pesan alert yang ingin ditampilkan
			$message = "Perizinan Gagal Diajukan!";

			// Mendapatkan base_url dari konfigurasi CodeIgniter
			$base_url = base_url();

			// Menggunakan echo untuk menghasilkan kode JavaScript
			echo "<script type='text/javascript'>
                    alert('$message');
                    window.location.href = '$base_url/home';
                </script>";
		} else {
			// Proses input data
			$data_perizinan = [
				'kode_perizinan' => $this->input->post('kode_perizinan'),
				'id_santri' => $this->input->post('id_santri'),
				'tanggal_mulai' => date('Y-m-d'),
				'jam_mulai' => date('H:i'),
				'tanggal_akhir' => $this->input->post('tanggal_akhir'),
				'jam_akhir' => $this->input->post('jam_akhir'),
				'status' => 'BELUM KEMBALI',
				'status_izin' => 'BELUM DIIZINKAN',
				'no_wali' => $this->input->post('no_wali'),
				'keperluan' => $this->input->post('keperluan'),

			];


			// Pesan alert yang ingin ditampilkan
			$message = "Perizinan Berhasil Diajukan!";

			// Mendapatkan base_url dari konfigurasi CodeIgniter
			$base_url = base_url();

			// Menggunakan echo untuk menghasilkan kode JavaScript
			echo "<script type='text/javascript'>
        alert('$message');
        window.location.href = '$base_url/home';
      </script>";

			$this->Data_perizinan_model->tambah_perizinan($data_perizinan);
		}
	}

	public function tambah_riyadhoh()
	{
		$this->form_validation->set_rules('nama_santri_riyadhoh', 'Nama Santri Riyadhoh', 'required', array('required' => 'Nama Santri Riyadhoh harus diisi.'));
		$this->form_validation->set_rules('tempat_lahir_santri_riyadhoh', 'Tempat Lahir', 'required', array('required' => 'Tempat Lahir harus diisi.'));
		$this->form_validation->set_rules('tanggal_lahir_santri_riyadhoh', 'Tanggal Lahir', 'required', array('required' => 'Tanggal Lahir harus diisi.'));
		$this->form_validation->set_rules('desa_santri_riyadhoh', 'Desa / Kelurahan', 'required', array('required' => 'Desa / Kelurahan harus diisi.'));
		$this->form_validation->set_rules('kecamatan_santri_riyadhoh', 'Kecamatan', 'required', array('required' => 'Kecamatan harus diisi.'));
		$this->form_validation->set_rules('kabupaten_santri_riyadhoh', 'Kabupaten/Kota', 'required', array('required' => 'Kabupaten/Kota harus diisi.'));
		$this->form_validation->set_rules('provinsi_santri_riyadhoh', 'Provinsi', 'required', array('required' => 'Provinsi harus diisi.'));
		$this->form_validation->set_rules('nik_santri_riyadhoh', 'No. NIK', 'required|numeric', array('required' => 'No. NIK harus diisi.', 'numeric' => 'No. NIK harus berupa angka.'));
		$this->form_validation->set_rules('no_hp_santri_riyadhoh', 'No. HP', 'required|numeric', array('required' => 'No. HP harus diisi.', 'numeric' => 'No. HP harus berupa angka.'));
		$this->form_validation->set_rules('wali_santri_riyadhoh', 'Nama Wali', 'required', array('required' => 'Nama Wali harus diisi.'));
		$this->form_validation->set_rules('no_hp_wali_santri_riyadhoh', 'No. HP Wali', 'required|numeric', array('required' => 'No. HP Wali harus diisi.', 'numeric' => 'No. HP Wali harus berupa angka.'));

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Tambah Santri Riyadhoh',
			];
			echo validation_errors();
			// // Pesan alert yang ingin ditampilkan
			// $message = "Tambah Tamu Riyadhoh Gagal Diajukan!";

			// // Mendapatkan base_url dari konfigurasi CodeIgniter
			// $base_url = base_url();

			// // Menggunakan echo untuk menghasilkan kode JavaScript
			// echo "<script type='text/javascript'>
			//         alert('$message');
			//         window.location.href = '$base_url/home';
			//     </script>";

		} else {
			$data_santri = [
				'nama_santri_riyadhoh' => $this->input->post('nama_santri_riyadhoh'),
				'tempat_lahir' => $this->input->post('tempat_lahir_santri_riyadhoh'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir_santri_riyadhoh'),
				'alamat_desa' => $this->input->post('desa_santri_riyadhoh'),
				'alamat_kecamatan' => $this->input->post('kecamatan_santri_riyadhoh'),
				'alamat_kabupaten' => $this->input->post('kabupaten_santri_riyadhoh'),
				'alamat_provinsi' => $this->input->post('provinsi_santri_riyadhoh'),
				'no_nik' => $this->input->post('nik_santri_riyadhoh'),
				'no_hp' => $this->input->post('no_hp_santri_riyadhoh'),
				'nama_wali' => $this->input->post('wali_santri_riyadhoh'),
				'no_hp_wali' => $this->input->post('no_hp_wali_santri_riyadhoh'),
				'tanggal_daftar' => date('Y-m-d'),
				'tahun_daftar' => date('Y'),

			];


			$this->Data_santri_riyadhoh_model->tambah_santri_riyadhoh($data_santri);

			// Pesan alert yang ingin ditampilkan
			$message = "Tambah Tamu Riyadhoh Sukses Diajukan!";

			// Mendapatkan base_url dari konfigurasi CodeIgniter
			$base_url = base_url();

			// Menggunakan echo untuk menghasilkan kode JavaScript
			echo "<script type='text/javascript'>
                    alert('$message');
                    window.location.href = '$base_url/home';
                </script>";
		}
	}
}

/* End of file Home.php and path \application\controllers\Home.php */
