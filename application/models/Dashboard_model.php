<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
	public function hitung_santri_aktif()
	{
		$this->db->where('status_santri', 'AKTIF');
		$this->db->from('data_santri');
		return $this->db->count_all_results();
	}
	public function hitung_santri_nonaktif()
	{
		$this->db->where('status_santri', 'NONAKTIF');
		$this->db->from('data_santri');
		return $this->db->count_all_results();
	}

	public function hitung_santri_riyadhoh()
	{
		// $this->db->where('status_santri', 'RIYADHOH');
		$this->db->from('data_santri_riyadhoh');
		return $this->db->count_all_results();
	}

	public function hitung_santri_izin()
	{
		// $this->db->where('status_santri', 'IZIN');
		$this->db->from('data_perizinan');
		return $this->db->count_all_results();
	}

	public function hitung_santri_per_wilayah()
	{
		$this->db->select('data_wilayah.nama_wilayah, data_wilayah.singkatan_wilayah, COUNT(data_penghuni.id_santri) as jumlah_santri');
		$this->db->from('data_penghuni');
		$this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
		$this->db->group_by('data_wilayah.nama_wilayah, data_wilayah.singkatan_wilayah');
		$query = $this->db->get();
		return $query;
	}
}


/* End of file Dashboard_model.php and path \application\models\Dashboard_model.php */
