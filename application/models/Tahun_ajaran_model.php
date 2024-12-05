<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Tahun_ajaran_model extends CI_Model 
{
		public function lihat_tahun_ajaran()
		{
			$query = $this->db->get('tahun_ajaran');
			return $query->result();

		}
			
		public function tambah_tahun_ajaran($data){
			$this->db->insert('tahun_ajaran', $data);


		}

		public function ubah_tahun_ajaran($where){
			return $this->db->get_where('tahun_ajaran', $where);
		}

		public function update_tahun_ajaran($where, $data){
			$this->db->where($where);
        	$this->db->update('tahun_ajaran', $data);

		}
		
                        
		public function hapus_tahun_ajaran($where){
 			$this->db->delete('tahun_ajaran', $where);
		}
		
                        
}


/* End of file Tahun_ajaran_model.php and path \application\models\Tahun_ajaran_model.php */
