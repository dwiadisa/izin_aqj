<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_user_model extends CI_Model
{
	public function lihat_profile()
	{
		$this->db->from('user');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$query = $this->db->get();
		return $query->result();
	}

	public function update_profile($data)
	{
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->update('user', $data);
	}

	// public function ubah_profile(){
	//     $data = array(
	//         'nama_user' => $this->input->post('nama_user'),
	//         'password' => $this->input->post('password')
	//     );
	//     $this->db->where('id_user', $this->session->userdata('id_user'));
	//     $this->db->update('user', $data);
	// }
}


/* End of file Profil_user_model.php and path \application\models\Profil_user_model.php */
