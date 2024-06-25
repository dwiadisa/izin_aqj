<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Kiosk_model extends CI_Model 
{
    public function lihat_setting()
    {
    $this->db->select('*');
    $this->db->from('kiosk_setting');
    $this->db->where('id_setting', 1);
    $query = $this->db->get();
    return $query->row();
    }                        
                        
    public function ubah_setting(){
        $data = [
            'status' => $this->input->post('status')
        ];
        $this->db->where('id_setting', 1);
        $this->db->update('kiosk_setting', $data);
    }
}


/* End of file Kiosk_model.php and path \application\models\Kiosk_model.php */
