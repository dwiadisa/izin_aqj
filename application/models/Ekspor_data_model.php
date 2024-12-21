<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ekspor_data_model extends CI_Model
{
	public function list_tahun()
	{
		$this->db->distinct();
		$this->db->select('tahun_masuk');
		$this->db->order_by('tahun_masuk', 'DESC');
		$query = $this->db->get('data_santri');
		return $query;
	}

	public function ekspor_persantri($id)
	{
		// Ambil data santri
		$this->db->select('s.*');
		$this->db->from('data_santri s');
		$this->db->where('s.id_santri', $id);
		$santri_query = $this->db->get();
		$santri_data = $santri_query->row();

		// Ambil data rombel
		$this->db->select('r.*, k.*, l.*, p.*, w.*, c.*, 
            (SELECT r2.lembaga FROM data_rombel r2 WHERE r2.santri = r.santri ORDER BY r2.kelas ASC LIMIT 1) AS lembaga_awal_id,
            (SELECT r2.lembaga FROM data_rombel r2 WHERE r2.santri = r.santri ORDER BY r2.kelas DESC LIMIT 1) AS lembaga_akhir_id,
            (SELECT r2.kelas FROM data_rombel r2 WHERE r2.santri = r.santri ORDER BY r2.kelas DESC LIMIT 1) AS kelas_akhir,
            (SELECT l2.nama_lembaga FROM data_rombel r2 LEFT JOIN data_lembaga l2 ON r2.lembaga = l2.id_lembaga WHERE r2.santri = r.santri ORDER BY r2.kelas ASC LIMIT 1) AS lembaga_awal,
            (SELECT l2.nama_lembaga FROM data_rombel r2 LEFT JOIN data_lembaga l2 ON r2.lembaga = l2.id_lembaga WHERE r2.santri = r.santri ORDER BY r2.kelas DESC LIMIT 1) AS lembaga_akhir');

		$this->db->from('data_rombel r');
		$this->db->join('data_kelas k', 'r.kelas = k.id_kelas', 'left');
		$this->db->join('data_lembaga l', 'r.lembaga = l.id_lembaga', 'left');
		$this->db->join('data_penghuni p', 'r.santri = p.id_santri', 'left');
		$this->db->join('data_wilayah w', 'p.id_wilayah = w.id_wilayah', 'left');
		$this->db->join('data_kamar c', 'p.id_kamar = c.id_kamar', 'left');
		$this->db->where('p.id_santri', $id);
		$this->db->group_by('r.santri, l.nama_lembaga');
		$this->db->order_by('r.santri');
		$this->db->limit(1);

		$query = $this->db->get();
		$result = $query->result();

		// Jika hasil rombel kosong, kembalikan data santri dengan nilai default untuk rombel
		if (empty($result)) {
			return [
				(object) array_merge((array)$santri_data, [
					'kelas' => null,
					'lembaga' => null,
					'nama_lembaga' => null,
					'lembaga_awal_id' => null,
					'lembaga_akhir_id' => null,
					'kelas_akhir' => null,
					'lembaga_awal' => null,
					'lembaga_akhir' => null,
				])
			];
		}

		// Gabungkan data santri dengan data rombel
		return array_map(function ($row) use ($santri_data) {
			return (object) array_merge((array)$santri_data, (array)$row);
		}, $result);
	}


	public function ekspor_pertahun($tahun)
	{

		// Ambil data santri
		// Mengambil data santri
		$this->db->select('s.*, p.*, w.nama_wilayah, c.nama_kamar, 
        MAX(r.id_rombel) AS id_rombel, 
        MAX(k.nama_kelas) AS nama_kelas, 
        MAX(l.nama_lembaga) AS nama_lembaga, 
        (SELECT r2.lembaga FROM data_rombel r2 WHERE r2.santri = s.id_santri ORDER BY r2.kelas ASC LIMIT 1) AS lembaga_awal_id,
        (SELECT r2.lembaga FROM data_rombel r2 WHERE r2.santri = s.id_santri ORDER BY r2.kelas DESC LIMIT 1) AS lembaga_akhir_id,
        (SELECT r2.kelas FROM data_rombel r2 WHERE r2.santri = s.id_santri ORDER BY r2.kelas DESC LIMIT 1) AS kelas_akhir,
        (SELECT l2.nama_lembaga FROM data_rombel r2 LEFT JOIN data_lembaga l2 ON r2.lembaga = l2.id_lembaga WHERE r2.santri = s.id_santri ORDER BY r2.kelas ASC LIMIT 1) AS lembaga_awal,
        (SELECT l2.nama_lembaga FROM data_rombel r2 LEFT JOIN data_lembaga l2 ON r2.lembaga = l2.id_lembaga WHERE r2.santri = s.id_santri ORDER BY r2.kelas DESC LIMIT 1) AS lembaga_akhir');

		$this->db->from('data_santri s');
		$this->db->join('data_penghuni p', 's.id_santri = p.id_santri', 'left');
		$this->db->join('data_wilayah w', 'p.id_wilayah = w.id_wilayah', 'left');
		$this->db->join('data_kamar c', 'p.id_kamar = c.id_kamar', 'left');
		$this->db->join('data_rombel r', 'r.santri = p.id_santri', 'left');
		$this->db->join('data_kelas k', 'r.kelas = k.id_kelas', 'left');
		$this->db->join('data_lembaga l', 'r.lembaga = l.id_lembaga', 'left');

		// Menambahkan kondisi untuk id_wilayah dan id_kamar
		$this->db->where('s.tahun_masuk', $tahun);

		// Mengelompokkan berdasarkan id_santri
		$this->db->group_by('s.id_santri');

		// Mengurutkan berdasarkan nama lengkap santri
		$this->db->order_by('s.no_induk_santri', 'ASC');

		// Menjalankan query
		$query = $this->db->get();

		// Mengembalikan hasil
		return $query->result();
	}


	public function ekspor_persantri_perwilayah_kamar($wilayah, $kamar = "")
	{
		// Ambil data santri
		// Mengambil data santri
		$this->db->select('s.*, p.*, w.nama_wilayah, c.nama_kamar, 
        MAX(r.id_rombel) AS id_rombel, 
        MAX(k.nama_kelas) AS nama_kelas, 
        MAX(l.nama_lembaga) AS nama_lembaga, 
        (SELECT r2.lembaga FROM data_rombel r2 WHERE r2.santri = s.id_santri ORDER BY r2.kelas ASC LIMIT 1) AS lembaga_awal_id,
        (SELECT r2.lembaga FROM data_rombel r2 WHERE r2.santri = s.id_santri ORDER BY r2.kelas DESC LIMIT 1) AS lembaga_akhir_id,
        (SELECT r2.kelas FROM data_rombel r2 WHERE r2.santri = s.id_santri ORDER BY r2.kelas DESC LIMIT 1) AS kelas_akhir,
        (SELECT l2.nama_lembaga FROM data_rombel r2 LEFT JOIN data_lembaga l2 ON r2.lembaga = l2.id_lembaga WHERE r2.santri = s.id_santri ORDER BY r2.kelas ASC LIMIT 1) AS lembaga_awal,
        (SELECT l2.nama_lembaga FROM data_rombel r2 LEFT JOIN data_lembaga l2 ON r2.lembaga = l2.id_lembaga WHERE r2.santri = s.id_santri ORDER BY r2.kelas DESC LIMIT 1) AS lembaga_akhir');

		$this->db->from('data_santri s');
		$this->db->join('data_penghuni p', 's.id_santri = p.id_santri', 'left');
		$this->db->join('data_wilayah w', 'p.id_wilayah = w.id_wilayah', 'left');
		$this->db->join('data_kamar c', 'p.id_kamar = c.id_kamar', 'left');
		$this->db->join('data_rombel r', 'r.santri = p.id_santri', 'left');
		$this->db->join('data_kelas k', 'r.kelas = k.id_kelas', 'left');
		$this->db->join('data_lembaga l', 'r.lembaga = l.id_lembaga', 'left');

		// Menambahkan kondisi untuk id_wilayah dan id_kamar
		$this->db->where('w.id_wilayah', $wilayah);
		if ($kamar != "") {
			$this->db->where('p.id_kamar', $kamar);
		}
		// Mengelompokkan berdasarkan id_santri
		$this->db->group_by('s.id_santri');

		// Mengurutkan berdasarkan nama lengkap santri
		$this->db->order_by('s.nama_lengkap_santri', 'ASC');

		// Menjalankan query
		$query = $this->db->get();

		// Mengembalikan hasil
		return $query->result();
	}
}


/* End of file Ekspor_data_model.php and path \application\models\Ekspor_data_model.php */
