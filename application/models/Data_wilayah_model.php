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
    public function update_wilayah($where, $data){
        $this->db->where($where);
        $this->db->update('data_wilayah', $data);
    }
    public function hapus_wilayah($where){
          $this->db->delete('data_wilayah', $where);
    }   


    // model untuk data kamar santri

     public function lihat_kamar()
    {


        $wilayah = $this->db->get('data_kamar')->result();
        return $wilayah;

    } 




        public function tambah_kamar($data){

         $this->db->insert('data_kamar', $data);

    }
    public function ubah_kamar($where){

     return $this->db->get_where('data_kamar', $where);

    }
    public function update_kamar($where, $data){
        $this->db->where($where);
        $this->db->update('data_kamar', $data);
    }
    public function hapus_kamar($where){
          $this->db->delete('data_kamar', $where);
    }   
    
    
   

                        
}


/* End of file Data_wilayah_model.php and path \application\models\Data_wilayah_model.php */
