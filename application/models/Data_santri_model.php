<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_santri_model extends CI_Model 
{
    // public function get_last_no_induk_by_year($year) {
    //     $this->db->select('no_induk_santri');
    //     $this->db->like('tahun_masuk', $year);
    //     $this->db->order_by('no_induk_santri', 'DESC');
    //     $this->db->limit(1);
    //     $query = $this->db->get('data_santri');

    //     if ($query->num_rows() > 0) {
    //         $result = $query->row();
    //         $lastNoInduk = substr($result->no_induk_santri, 4); // Mengambil nomor urut dari nomor induk terakhir
    //         return (int)$lastNoInduk;
    //     } else {
    //         return 0; // Jika tidak ada nomor urut sebelumnya
    //     }
    // }
    public function get_last_no_induk_by_year($year) {
    $this->db->select('no_induk_santri');
    $this->db->like('tahun_masuk', $year);
    $this->db->order_by('no_induk_santri', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('data_santri');

    if ($query->num_rows() > 0) {
        $result = $query->row();
        $lastNoInduk = substr($result->no_induk_santri, -3); // Mengambil nomor urut dari nomor induk terakhir
        return (int)$lastNoInduk;
    } else {
        return 0; // Jika tidak ada nomor urut sebelumnya
    }
}

    public function urut_pendaftaran(){
        
    }

    public function tambah_santri($data) {
        // $data['no_induk_santri'] = $newOrderFormatted;        
        return $this->db->insert('data_santri', $data);
    }

    public function tambah_santri_massal($data) {
        return $insert = $this->db->insert_batch('data_santri', $data);
        if($insert){
			return true;
		}
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
        $this->db->select('data_santri.*, data_lembaga.nama_lembaga' , );
        $this->db->from('data_santri');
        $this->db->join('data_lembaga', 'data_santri.pendidikan_dipilih = data_lembaga.id_lembaga', 'left');
        $this->db->join('data_lembaga as lembaga', 'data_santri.pendidikan_saat_ini = data_lembaga.id_lembaga', 'left');
        $query = $this->db->get();
        return $query;
    }     
    
      public function print_data_santri($where)
    {
        $this->db->select('data_santri.*, data_lembaga.nama_lembaga');
        $this->db->from('data_santri');
        $this->db->join('data_lembaga', 'data_santri.pendidikan_dipilih = data_lembaga.id_lembaga', 'left');
        $this->db->where('data_santri.id_santri', $where);
        $query = $this->db->get();
        return $query;
    }                        


    public function lihat_santri_aktif()
    {
        $this->db->select('data_santri.*, data_lembaga.nama_lembaga');
        $this->db->from('data_santri');
        $this->db->join('data_lembaga', 'data_santri.pendidikan_dipilih = data_lembaga.id_lembaga', 'left');
        $this->db->where('data_santri.status_santri', 'AKTIF');
        $query = $this->db->get();
        return $query;
    }                        

    public function lihat_santri_nonaktif()
    {
        $this->db->select('data_santri.*, data_lembaga.nama_lembaga');
        $this->db->from('data_santri');
        $this->db->join('data_lembaga', 'data_santri.pendidikan_dipilih = data_lembaga.id_lembaga', 'left');
        $this->db->where('data_santri.status_santri', 'NONAKTIF');
        $query = $this->db->get();
        return $query;
    }

    public function lihat_santri_alumni(){
         $this->db->select('data_santri.*, data_lembaga.nama_lembaga');
        $this->db->from('data_santri');
        $this->db->join('data_lembaga', 'data_santri.pendidikan_dipilih = data_lembaga.id_lembaga', 'left');
        $this->db->where('data_santri.status_santri', 'ALUMNI');
        $query = $this->db->get();
        return $query;
    }

    public function tambah_history_pendidikan($data){
          return $this->db->insert('data_history_pendidikan', $data);
    }

    public function histori_pendidikan_santri($id){
        $this->db->select('data_santri.*, data_history_pendidikan.*, data_lembaga.*');
        $this->db->from('data_history_pendidikan');
        $this->db->join('data_santri', 'data_history_pendidikan.id_santri = data_santri.id_santri', 'left');
        $this->db->join('data_lembaga', 'data_history_pendidikan.id_lembaga = data_lembaga.id_lembaga', 'left');
       $this->db->where('data_history_pendidikan.id_santri' , $id);
        $query = $this->db->get();
        return $query;



    }

    public function ubah_history_pendidikan($id_history, $data) {
        $this->db->where('id_history', $id_history);
        return $this->db->update('data_history_pendidikan', $data);
    }

    public function hapus_history_pendidikan($id_history){
        $this->db->where('id_history', $id_history);
        return $this->db->delete('data_history_pendidikan');
    }
    
    public function update_status($id, $status) {
        $this->db->where('id_santri', $id);
        return $this->db->update('data_santri', array('status_santri' => $status));
    }
}
?>