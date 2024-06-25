<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Profile_model extends CI_Model 
{
    public function lihat_profile()
    {
        $this->db->from('user');
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $query = $this->db->get();
        return $query->row();
    } 
    
    public function ubah_profile(){
        
    }
                        
}


/* End of file Profile_model.php and path \application\models\Profile_model.php */
