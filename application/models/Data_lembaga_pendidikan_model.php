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
                        
}


/* End of file Data_lembaga_pendidikan_model.php and path \application\models\Data_lembaga_pendidikan_model.php */
