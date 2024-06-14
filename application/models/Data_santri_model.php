<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_santri_model extends CI_Model 
{
    public function get_last_no_induk($currentYear) {
        $this->db->select('MAX(SUBSTRING(no_induk_santri, 5, 3)) AS last_order');
        $this->db->where('SUBSTRING(no_induk_santri, 1, 4) =', $currentYear);
        $query = $this->db->get('data_santri');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return (int)$row->last_order;
        }

        return 0;
    }

    public function tambah_santri($data) {
        // $data['no_induk_santri'] = $newOrderFormatted;        
        return $this->db->insert('data_santri', $data);
    }

    public function lihat_santri_by_id($where) {
        $this->db->where($where);
        $query = $this->db->get('data_santri');
        return $query;
    }

    
    public function update_santri($where, $data_update) {
        $this->db->where($where);
        return $this->db->update('data_santri', $data_update);
    }

    public function get_santri_by_id($id_santri) {
        $this->db->where('id_santri', $id_santri);
        $query = $this->db->get('data_santri');
        return $query->row();
    }

    public function hapus_santri($where) {
        $this->db->where($where);
        return $this->db->delete('data_santri');
    }

    
    public function lihat_santri_semua()
    {
        $this->db->select('data_santri.*, data_lembaga.nama_lembaga');
        $this->db->from('data_santri');
        $this->db->join('data_lembaga', 'data_santri.pendidikan_dipilih = data_lembaga.id_lembaga', 'left');
        $query = $this->db->get();
        return $query;
    }                        

    public function lihat_santri_aktif()
    {
        $this->db->select('data_santri.*, data_lembaga.nama_lembaga');
        $this->db->from('data_santri');
        $this->db->join('data_lembaga', 'data_santri.pendidikan_dipilih = data_lembaga.id_lembaga', 'left');
        $this->db->where('data_santri.status', 'AKTIF');
        $query = $this->db->get();
        return $query;
    }                        

    public function lihat_santri_nonaktif()
    {
        $this->db->select('data_santri.*, data_lembaga.nama_lembaga');
        $this->db->from('data_santri');
        $this->db->join('data_lembaga', 'data_santri.pendidikan_dipilih = data_lembaga.id_lembaga', 'left');
        $this->db->where('data_santri.status', 'NONAKTIF');
        $query = $this->db->get();
        return $query;
    }
}
?>
