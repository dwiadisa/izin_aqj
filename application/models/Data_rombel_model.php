<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_rombel_model extends CI_Model

{

	public function getHierarkiRombel($tahun_ajaran)
	{
		$this->db->select('
		  	data_rombel.id_rombel,  
            data_lembaga.id_lembaga,
            data_lembaga.nama_lembaga,
            data_kelas.id_kelas,
            data_kelas.nama_kelas,
            data_santri.id_santri,
            data_santri.no_induk_santri,
            data_santri.nama_lengkap_santri
        ');
		$this->db->from('data_rombel');
		$this->db->join('data_lembaga', 'data_lembaga.id_lembaga = data_rombel.lembaga');
		$this->db->join('data_kelas', 'data_kelas.id_kelas = data_rombel.kelas');
		$this->db->join('data_santri', 'data_santri.id_santri = data_rombel.santri');
		$this->db->where('data_rombel.tahun_ajaran', $tahun_ajaran);
		$this->db->order_by('data_lembaga.nama_lembaga, data_kelas.nama_kelas, data_santri.nama_lengkap_santri');

		$query = $this->db->get();
		$result = $query->result_array();

		// Mengorganisir data ke dalam hierarki
		$hierarki = [];
		foreach ($result as $row) {
			$id_lembaga = $row['id_lembaga'];
			$id_kelas = $row['id_kelas'];

			if (!isset($hierarki[$id_lembaga])) {
				$hierarki[$id_lembaga] = [
					'nama_lembaga' => $row['nama_lembaga'],
					'kelas' => []
				];
			}

			if (!isset($hierarki[$id_lembaga]['kelas'][$id_kelas])) {
				$hierarki[$id_lembaga]['kelas'][$id_kelas] = [
					'nama_kelas' => $row['nama_kelas'],
					'santri' => []
				];
			}

			$hierarki[$id_lembaga]['kelas'][$id_kelas]['santri'][] = [
				'id_santri' => $row['id_santri'],
				'no_induk_santri' => $row['no_induk_santri'],
				'nama_lengkap_santri' => $row['nama_lengkap_santri'],
				'id_rombel' => $row['id_rombel']
			];
		}
		return $hierarki;
	}






	public function lihat_santri_tidak_rombel($tahun)
	{
		// Membuat subquery untuk mendapatkan santri yang terdaftar pada tahun ajaran tertentu
		$this->db->select('santri');
		$this->db->from('data_rombel');
		$this->db->where('tahun_ajaran', $tahun);
		$subquery = $this->db->get_compiled_select(); // Menyimpan subquery

		// Query utama untuk mendapatkan santri yang tidak terdaftar dalam tahun ajaran tertentu
		$this->db->select('*');
		$this->db->from('data_santri');
		$this->db->where_not_in('id_santri', "($subquery)", false); // Menambahkan subquery ke dalam where_not_in

		// Menjalankan query
		$query = $this->db->get();

		// Mengembalikan hasilnya
		return $query->result(); // Atau gunakan result_array() jika ingin hasil dalam bentuk array asosiatif
	}



	public function tambah_rombel_batch($data)
	{
		$this->db->insert_batch('data_rombel', $data);
	}


	public function hapus_santri($where)
	{

		$this->db->where('id_rombel', $where);

		// Menghapus data dari tabel data_rombel berdasarkan kondisi
		$this->db->delete('data_rombel'); // Pastikan 'data_rombel' adalah nama tabel yang benar
	}
}


/* End of file Data_rombel_model.php and path \application\models\Data_rombel_model.php */
