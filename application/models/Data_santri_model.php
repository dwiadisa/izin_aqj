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

    public function tambah_santri($newOrderFormatted, $data) {
        $data['no_induk_santri'] = $newOrderFormatted;        
        return $this->db->insert('data_santri', $data);
    }

    public function lihat_santri_semua()
    {
        // Implementasikan fungsi ini jika diperlukan
    }                        

    public function lihat_santri_aktif()
    {
        // Implementasikan fungsi ini jika diperlukan
    }                        

    public function lihat_santri_nonaktif()
    {
        // Implementasikan fungsi ini jika diperlukan
    }
}
?>
