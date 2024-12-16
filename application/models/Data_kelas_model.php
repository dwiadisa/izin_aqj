<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_kelas_model extends CI_Model 
{
    public function lihat_kelas()
    {
		$this->db->select('*');
		$this->db->from('data_kelas');
		$this->db->join('data_lembaga', 'data_kelas.lembaga = data_lembaga.id_lembaga', 'left');
		$query = $this->db->get();
		return $query;


    }
	
	public function tambah_kelas($data){

		$this->db->insert('data_kelas', $data);

	}
                        
}


/* End of file Data_kelas_model.php and path \application\models\Data_kelas_model.php */
