<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_penempatan_model extends CI_Model 
{
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
    $query = $this->db->get();
    return $query;
}


    
    
public function tambah_penempatan($data_penempatan)
{
    $this->db->insert('data_penghuni', $data_penempatan);
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
