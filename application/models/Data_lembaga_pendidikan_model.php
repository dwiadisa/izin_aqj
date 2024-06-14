<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_lembaga_pendidikan_model extends CI_Model 
{
    public function lihat_lembaga()
    {
        $query = $this->db->get('data_lembaga');
        return $query;

    }
    
    public function tambah_lembaga($data){

        $this->db->insert('data_lembaga', $data);

    }

    public function ubah_lembaga($where){

        return $this->db->get_where('data_lembaga', $where);

    }

    public function update_lembaga($where, $data){
        $this->db->where($where);
        $this->db->update('data_lembaga', $data);
    }

    public function hapus_lembaga($where){
        $this->db->delete('data_lembaga', $where);


    }
        
    
}


/* End of file Data_lembaga_pendidikan_model.php and path \application\models\Data_lembaga_pendidikan_model.php */
