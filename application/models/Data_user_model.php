<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_user_model extends CI_Model 
{
    public function lihat_user()
    {
        
        $user = $this->db->get('data_user')->result();
        return $user;

    }   
    
    public function tambah_user(){

    }

    public function ubah_user(){

    }
    public function update_user(){

    }

    public function hapus_user(){

    }
    


                        
}


/* End of file Data_user_model.php and path \application\models\Data_user_model.php */
