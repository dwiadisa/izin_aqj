<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Auth_model extends CI_Model 
{
    public function login($where)
    {
   return $this->db->get_where('user', $where);
    }                        
                        
}


/* End of file Auth_model.php and path \application\models\Auth_model.php */
