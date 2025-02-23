<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keperluan_izin_model extends CI_Model
{
	public function lihat_keperluan()
	{

		$user = $this->db->get('data_keperluan_izin');
		return $user;
	}

	public function tambah_keperluan($data)
	{

		$this->db->insert('data_keperluan_izin', $data);
	}

	public function ubah_keperluan($where)
	{
		return $this->db->get_where('data_keperluan_izin', $where);
	}

	public function update_keperluan($where, $data)
	{
		$this->db->where($where);
		$this->db->update('data_keperluan_izin', $data);
	}


	public function hapus_keperluan($where)
	{
		$this->db->where($where);
		return $this->db->delete('data_keperluan_izin');
	}
}


/* End of file Keperluan_izin_model.php and path \application\models\Keperluan_izin_model.php */
