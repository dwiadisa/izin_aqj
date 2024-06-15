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
    
public function tambah_penempatan($data_penempatan)
{
    $this->db->insert('data_penghuni', $data_penempatan);
}
                        
}


/* End of file Data_penempatan_model.php and path \application\models\Data_penempatan_model.php */
