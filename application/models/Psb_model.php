<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Psb_model extends CI_Model
{

	public function __construct()
	{
		// parent::__construct();
		// if (!is_login())
		// 	redirect('auth');
		// // $this->load->model('Tahun_ajaran_model');
		// // $this->load->model('Data_lembaga_pendidikan_model');
		// // $this->load->model('Data_rombel_model');
		// // $this->load->model('Data_Kelas_model');
		// $this->load->model('Data_santri_model');

		$this->dbpsb = $this->load->database('db_psb', TRUE);
	}

	public function lihat_santri_baru()
	{
		// $this->db_psb->get('data_santri_baru');
		$this->dbpsb->select(
			'data_santri.*, 
			indonesia_districts.name as nama_kecamatan, 
			indonesia_villages.name as nama_desa, 
			indonesia_cities.name as nama_kabupaten, 
			indonesia_provinces.name as nama_provinsi'
		);
		$this->dbpsb->join('indonesia_districts', 'indonesia_districts.code = data_santri.alamat_kecamatan', 'left');
		$this->dbpsb->join('indonesia_villages', 'indonesia_villages.code = data_santri.alamat_desa', 'left');
		$this->dbpsb->join('indonesia_cities', 'indonesia_cities.code = data_santri.alamat_kabupaten', 'left');
		$this->dbpsb->join('indonesia_provinces', 'indonesia_provinces.code = data_santri.alamat_provinsi', 'left');

		$this->dbpsb->where('status_selesai', 'SUDAH SELESAI');
		$this->dbpsb->where('status_sipptren', 'BELUM MASUK');
		$this->dbpsb->where('status_santri', 'AKTIF');
		return $this->dbpsb->get('data_santri')->result();


	}
	public function lihat_santri_baru_by_id($id)
	{


		// $this->db_psb->get('data_santri_baru');
		$this->dbpsb->select(
			'data_santri.*, 
			indonesia_districts.name as nama_kecamatan, 
			indonesia_villages.name as nama_desa, 
			indonesia_cities.name as nama_kabupaten, 
			indonesia_provinces.name as nama_provinsi'
		);
		$this->dbpsb->join('indonesia_districts', 'indonesia_districts.code = data_santri.alamat_kecamatan', 'left');
		$this->dbpsb->join('indonesia_villages', 'indonesia_villages.code = data_santri.alamat_desa', 'left');
		$this->dbpsb->join('indonesia_cities', 'indonesia_cities.code = data_santri.alamat_kabupaten', 'left');
		$this->dbpsb->join('indonesia_provinces', 'indonesia_provinces.code = data_santri.alamat_provinsi', 'left');

		$this->dbpsb->where('status_selesai', 'SUDAH SELESAI');
		$this->dbpsb->where('status_sipptren', 'BELUM MASUK');
		$this->dbpsb->where('status_santri', 'AKTIF');
		$this->dbpsb->where('status_santri', 'AKTIF');
		$this->dbpsb->where('data_santri.id', $id);
		return $this->dbpsb->get('data_santri');


	}


}


/* End of file Psb_model.php and path \application\models\Psb_model.php */
