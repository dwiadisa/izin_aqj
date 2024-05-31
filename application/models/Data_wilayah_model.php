<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_wilayah_model extends CI_Model 
{
    public function lihat_wilayah()
    {


    $wilayah = $this->db->get('data_wilayah')->result();
        return $wilayah;

    } 
    
    
    public function tambah_wilayah($data){

         $this->db->insert('data_wilayah', $data);

    }
    public function ubah_wilayah($where){

     return $this->db->get_where('data_wilayah', $where);

    }
    public function update_wilayah(){

    }
    public function hapus_wilayah(){
        
    }
                        
}


/* End of file Data_wilayah_model.php and path \application\models\Data_wilayah_model.php */
