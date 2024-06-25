<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Access_block_model extends CI_Model 
{
    public function block_pengurus()
    {
        $this->session->userdata('level') == 'PENGURUS' ? redirect('halaman_blokir/hal_403') : '';
    }                        
                        
}


/* End of file Access_block_model.php and path \application\models\Access_block_model.php */
