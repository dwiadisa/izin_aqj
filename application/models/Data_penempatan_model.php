<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_penempatan_model extends CI_Model 
{


	public function getPenempatanHierarki()
    { // Mengambil data yang dibutuhkan dari tabel data_wilayah, data_kamar, data_penghuni, dan data_santri
        $this->db->select('
            data_wilayah.id_wilayah, data_wilayah.nama_wilayah, data_wilayah.singkatan_wilayah,
            data_kamar.id_kamar, data_kamar.nama_kamar,
            data_penghuni.id_penghuni,
            data_santri.id_santri, data_santri.no_induk_santri, data_santri.nama_lengkap_santri
        ');
        $this->db->from('data_wilayah');
        $this->db->join('data_kamar', 'data_kamar.wilayah = data_wilayah.id_wilayah', 'left');
        $this->db->join('data_penghuni', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
        $this->db->join('data_santri', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
        $this->db->order_by('data_wilayah.id_wilayah, data_kamar.id_kamar, data_santri.nama_lengkap_santri');
        
        $query = $this->db->get();
        $result = $query->result_array();

        // Mengorganisir data ke dalam struktur hierarki
        $data_hierarki = [];
        foreach ($result as $row) {
            $id_wilayah = $row['id_wilayah'];
            $id_kamar = $row['id_kamar'];

            // Menambahkan wilayah jika belum ada
            if (!isset($data_hierarki[$id_wilayah])) {
                $data_hierarki[$id_wilayah] = [
                    'nama_wilayah' => $row['nama_wilayah'],
                    'singkatan_wilayah' => $row['singkatan_wilayah'],
                    'kamar' => []
                ];
            }

            // Menambahkan kamar jika belum ada
            if (!isset($data_hierarki[$id_wilayah]['kamar'][$id_kamar])) {
                $data_hierarki[$id_wilayah]['kamar'][$id_kamar] = [
                    'nama_kamar' => $row['nama_kamar'],
                    'penghuni' => []
                ];
            }

            // Menambahkan penghuni jika ada
            if (!empty($row['id_penghuni'])) {
                $data_hierarki[$id_wilayah]['kamar'][$id_kamar]['penghuni'][] = [
                    'id_penghuni' => $row['id_penghuni'],
                    'no_induk_santri' => $row['no_induk_santri'],
                    'nama_lengkap_santri' => $row['nama_lengkap_santri']
                ];
            }
        }

        return $data_hierarki;

      
    }




    public function lihat_penempatan()
    {

    $this->db->select('*');
    $this->db->from('data_penghuni');
    $this->db->join('data_santri', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
    $this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
    $this->db->join('data_kamar', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
    $query = $this->db->get();
    return $query;
    } 
	public function santri_tidak_terdaftar()
	{
		$this->db->select('*');
		$this->db->from('data_santri');
		$this->db->where("id_santri NOT IN (SELECT id_santri FROM data_penghuni)", NULL, FALSE);
		$this->db->where_not_in('status_santri', ['ALUMNI', 'NONAKTIF']);
		$query = $this->db->get();
		return $query;
	}
		
    
public function tambah_penempatan_batch($data_penempatan)
{
    $this->db->insert_batch('data_penghuni', $data_penempatan);
}
                        



public function lihat_penempatan_by_kamar($id_wilayah){
    
        $this->db->select('data_kamar.id_kamar, data_kamar.nama_kamar, data_wilayah.id_wilayah, data_wilayah.nama_wilayah');
        $this->db->from('data_kamar');
        $this->db->join('data_wilayah', 'data_kamar.wilayah = data_wilayah.id_wilayah', 'left');
        $this->db->where('data_wilayah.id_wilayah', $id_wilayah); // Menambahkan klausa WHERE untuk memfilter berdasarkan id_wilayah
        $query = $this->db->get()->result();
        return $query;

}

public function lihat_penghuni($id_kamar){
   $this->db->select('*');
    $this->db->from('data_penghuni');
    $this->db->join('data_santri', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
    $this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
    $this->db->join('data_kamar', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
    $this->db->where('data_kamar.id_kamar', $id_kamar);
    $query = $this->db->get()->result();
    return $query;


}


public function ekspor_perwilayah($id_wilayah){
  $this->db->select('*');
    $this->db->from('data_penghuni');
    $this->db->join('data_santri', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
    $this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
    $this->db->join('data_kamar', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
    $this->db->where('data_wilayah.id_wilayah', $id_wilayah);
    $query = $this->db->get();
    return $query;

}

public function ubah_penempatan($id_penghuni, $data_penempatan_baru)
{
    $this->db->where('id_penghuni', $id_penghuni);
    $this->db->update('data_penghuni', $data_penempatan_baru);
}

public function hapus_penempatan($id_penghuni)
{
    $this->db->where('id_penghuni', $id_penghuni);
    $this->db->delete('data_penghuni');
}


public function lihat_penempatan_by_id($id_penghuni)
{
    $this->db->select('*');
    $this->db->from('data_penghuni');
    $this->db->join('data_santri', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
    $this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
    $this->db->join('data_kamar', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
    $this->db->where('data_penghuni.id_penghuni', $id_penghuni);
    $query = $this->db->get();
    return $query->row(); // Mengembalikan satu baris hasil
}

public function hapus_penempatan_by_id($id_santri)
{
    $this->db->where('id_santri', $id_santri);
    $this->db->delete('data_penghuni');
}

public function hapus_wilayah($id_wilayah)
{
    $this->db->where('id_wilayah', $id_wilayah);
    $this->db->delete('data_penghuni');
}

public function hapus_kamar($id_kamar)
{
    $this->db->where('id_kamar', $id_kamar);
    $this->db->delete('data_penghuni');
}

}
/* End of file Data_penempatan_model.php and path \application\models\Data_penempatan_model.php */
