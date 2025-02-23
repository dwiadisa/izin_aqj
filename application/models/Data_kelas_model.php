<?php
defined('BASEPATH') or exit('No direct script access allowed');

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

	public function tambah_kelas($data)
	{

		$this->db->insert('data_kelas', $data);
	}

	public function get_kelas_by_id($id)
	{
		return $this->db->get_where('data_kelas', ['id_kelas' => $id])->row();
	}

	public function get_kelas_by_lembaga($id)
	{
		$this->db->select('*');
		$this->db->from('data_kelas');
		$this->db->join('data_lembaga', 'data_kelas.lembaga = data_lembaga.id_lembaga', 'left');
		$this->db->where('id_lembaga', $id);
		$query = $this->db->get();
		return $query;
	}

	public function ubah_kelas($id, $data)
	{
		$this->db->where('id_kelas', $id);
		$this->db->update('data_kelas', $data);
	}

	public function hapus_kelas($id)
	{
		$this->db->delete('data_kelas', ['id_kelas' => $id]);
	}
}


/* End of file Data_kelas_model.php and path \application\models\Data_kelas_model.php */
