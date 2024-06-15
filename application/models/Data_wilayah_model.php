<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_wilayah_model extends CI_Model 
{
    public function lihat_wilayah()
    {


        $wilayah = $this->db->get('data_wilayah');
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

        $this->db->select('data_kamar.id_kamar, data_kamar.nama_kamar, data_wilayah.id_wilayah, data_wilayah.nama_wilayah');
        $this->db->from('data_kamar');
        $this->db->join('data_wilayah', 'data_kamar.wilayah = data_wilayah.id_wilayah', 'left');
        $query = $this->db->get();

        return $query;
    } 
    public function lihat_kamar_perwilayah($id_wilayah){
        $this->db->select('data_kamar.id_kamar, data_kamar.nama_kamar, data_wilayah.id_wilayah, data_wilayah.nama_wilayah');
        $this->db->from('data_kamar');
        $this->db->join('data_wilayah', 'data_kamar.wilayah = data_wilayah.id_wilayah', 'left');
        $this->db->where('data_wilayah.id_wilayah', $id_wilayah); // Menambahkan klausa WHERE untuk memfilter berdasarkan id_wilayah
        $query = $this->db->get()->result();
        return $query;
    }



        public function tambah_kamar($data){

         $this->db->insert('data_kamar', $data);

    }
    public function ubah_kamar($where){



            $this->db->select('data_kamar.id_kamar, data_kamar.nama_kamar, data_wilayah.id_wilayah, data_wilayah.nama_wilayah');
            $this->db->from('data_kamar');
            $this->db->join('data_wilayah', 'data_kamar.wilayah = data_wilayah.id_wilayah', 'left');
            $this->db->where('data_kamar.id_kamar', $where);
            $query = $this->db->get();




     return $query;

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
