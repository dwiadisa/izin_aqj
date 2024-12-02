<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Tahun_ajaran_model extends CI_Model 
{
    public function lihat_tahun_ajaran()
    {
		$query = $this->db->get('tahun_ajaran');
		return $query->result();

    }                        
                        
}


/* End of file Tahun_ajaran_model.php and path \application\models\Tahun_ajaran_model.php */
