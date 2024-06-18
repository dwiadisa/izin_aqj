<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_perizinan_model extends CI_Model 
{
    public function lihat_perizinan()
    {
        $this->db->select('*');
        $this->db->from('data_perizinan');
        $this->db->join('data_santri', 'data_santri.id_santri = data_perizinan.id_santri', 'left');
        $this->db->join('data_penghuni', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
        $this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
        $this->db->join('data_kamar', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
        $query = $this->db->get();
        return $query;
    }                        

    public function lihat_perizinan_belum_kembali(){
        $this->db->select('*');
        $this->db->from('data_perizinan');
        $this->db->join('data_santri', 'data_santri.id_santri = data_perizinan.id_santri', 'left');
        $this->db->join('data_penghuni', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
        $this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
        $this->db->join('data_kamar', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
        $this->db->where('data_perizinan.status', 'BELUM KEMBALI');
        $query = $this->db->get();
        return $query;
    }
    public function lihat_perizinan_sudah_kembali(){
        $this->db->select('*');
        $this->db->from('data_perizinan');
        $this->db->join('data_santri', 'data_santri.id_santri = data_perizinan.id_santri', 'left');
        $this->db->join('data_penghuni', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
        $this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
        $this->db->join('data_kamar', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
        $this->db->where('data_perizinan.status', 'SUDAH KEMBALI');
        $query = $this->db->get();
        return $query;
    }
    public function lihat_perizinan_terlambat(){

        $this->db->select('*');
        $this->db->from('data_perizinan');
        $this->db->join('data_santri', 'data_santri.id_santri = data_perizinan.id_santri', 'left');
        $this->db->join('data_penghuni', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
        $this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
        $this->db->join('data_kamar', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
        $this->db->where('data_perizinan.status', 'TERLAMBAT KEMBALI');
        $query = $this->db->get();
        return $query;
    }

    public function lihat_perizinan_by_id($id_izin)
    {
        $this->db->select('*');
        $this->db->from('data_perizinan');
        $this->db->join('data_santri', 'data_santri.id_santri = data_perizinan.id_santri', 'left');
        $this->db->join('data_penghuni', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
        $this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
        $this->db->join('data_kamar', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
        $this->db->where('data_perizinan.id_izin', $id_izin);
        $query = $this->db->get();
        return $query->row(); // Mengembalikan satu baris hasil
    }

    public function update_perizinan($id_perizinan, $data_perizinan){
        $this->db->where('id_izin', $id_perizinan);
        $this->db->update('data_perizinan', $data_perizinan);
    }

    
    public function tambah_perizinan($data_perizinan){
        $this->db->insert('data_perizinan', $data_perizinan);
    }
                        
}


/* End of file Data_perizinan_model.php and path \application\models\Data_perizinan_model.php */
