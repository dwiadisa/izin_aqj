<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Home_model extends CI_Model 
{
    public function lihat_lisensi_izin($izin)
    {

        $this->db->select('*');
        $this->db->from('data_perizinan');
        $this->db->join('data_santri', 'data_santri.id_santri = data_perizinan.id_santri', 'left');
        $this->db->join('data_penghuni', 'data_penghuni.id_santri = data_santri.id_santri', 'left');
        $this->db->join('data_wilayah', 'data_penghuni.id_wilayah = data_wilayah.id_wilayah', 'left');
        $this->db->join('data_kamar', 'data_penghuni.id_kamar = data_kamar.id_kamar', 'left');
        $this->db->where('data_perizinan.kode_perizinan', $izin);
        $this->db->where('data_perizinan.status', 'BELUM KEMBALI');
        $this->db->where('data_perizinan.status_izin', 'SUDAH DIIZINKAN');
        $query = $this->db->get();
        return $query;

    }       
    
// public function cek_izin($kode){



// }


    public function update_izin($kode,$status){
        $this->db->where('kode_perizinan', $kode);
        $this->db->update('data_perizinan', array('status' => $status));

    }
                        
}


/* End of file Home_model.php and path \application\models\Home_model.php */
