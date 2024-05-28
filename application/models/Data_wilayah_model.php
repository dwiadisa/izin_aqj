<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_wilayah_model extends CI_Model 
{
    public function lihat_wilayah()
    {


    $wilayah = $this->db->get('data_wilayah')->result();
        return $wilayah;

    }                        
                        
}


/* End of file Data_wilayah_model.php and path \application\models\Data_wilayah_model.php */
