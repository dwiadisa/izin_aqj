<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Data_santri_riyadhoh_model extends CI_Model 
{
    public function lihat_santri_riyadhoh()
    {
        $this->db->select('*');
        $this->db->from('data_santri_riyadhoh');
        $query = $this->db->get();
        return $query;
    }   
    
    public function tambah_santri_riyadhoh($data)
    {
        $this->db->insert('data_santri_riyadhoh', $data);
    }
                
public function get_santri_by_id($id)
{
    $this->db->select('*');
    $this->db->from('data_santri_riyadhoh');
    $this->db->where('id_santri_riyadhoh', $id);
    $query = $this->db->get();
    return $query->row();
}
    
public function ubah_santri_riyadhoh($id, $data_santri)
{
    $this->db->where('id_santri_riyadhoh', $id);
    $this->db->update('data_santri_riyadhoh', $data_santri);
}

public function hapus_santri_riyadhoh($id)
{
    $this->db->where('id_santri_riyadhoh', $id);
    $this->db->delete('data_santri_riyadhoh');
}

}


/* End of file Data_santri_riyadhoh_model.php and path \application\models\Data_santri_riyadhoh_model.php */
