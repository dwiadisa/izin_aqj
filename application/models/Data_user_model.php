<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_user_model extends CI_Model
{
	public function lihat_user()
	{

		$user = $this->db->get('user');
		return $user;
	}

	public function tambah_user($data)
	{

		$this->db->insert('user', $data);
	}

	public function ubah_user($where)
	{
		return $this->db->get_where('user', $where);
	}
	public function update_user($where, $data)
	{
		$this->db->where($where);
		$this->db->update('user', $data);
	}

	public function hapus_user($where)
	{
		$this->db->delete('user', $where);
	}
}


/* End of file Data_user_model.php and path \application\models\Data_user_model.php */
