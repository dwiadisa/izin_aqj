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
                        
}


/* End of file Tahun_ajaran_model.php and path \application\models\Tahun_ajaran_model.php */
