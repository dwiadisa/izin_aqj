<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_santri_riyadhoh extends CI_Controller {

    public function __construct()
    {         

        parent::__construct();
         if (!is_login()) redirect('auth');
         $this->load->model('Data_santri_riyadhoh_model');
    }

    public function index()
    {
           $data = [
            'title' => 'Data Santri Riyadhoh' ,
            'load_santri_riyadhoh' => $this->Data_santri_riyadhoh_model->lihat_santri_riyadhoh()->result()
        ];  

        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_santri_riyadhoh/data_santri_riyadhoh',$data);
        $this->load->view('templates/footer_dashboard');



    }

    public function tambah_santri_riyadhoh()
    {
      
        $this->form_validation->set_rules('nama_santri_riyadhoh', 'Nama Santri Riyadhoh', 'required', array('required' => 'Nama Santri Riyadhoh harus diisi.'));
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', array('required' => 'Tempat Lahir harus diisi.'));
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', array('required' => 'Tanggal Lahir harus diisi.'));
        $this->form_validation->set_rules('alamat_desa', 'Desa / Kelurahan', 'required', array('required' => 'Desa / Kelurahan harus diisi.'));
        $this->form_validation->set_rules('alamat_kecamatan', 'Kecamatan', 'required', array('required' => 'Kecamatan harus diisi.'));
        $this->form_validation->set_rules('alamat_kabupaten', 'Kabupaten/Kota', 'required', array('required' => 'Kabupaten/Kota harus diisi.'));
        $this->form_validation->set_rules('alamat_provinsi', 'Provinsi', 'required', array('required' => 'Provinsi harus diisi.'));
        $this->form_validation->set_rules('no_nik', 'No. NIK', 'required|numeric', array('required' => 'No. NIK harus diisi.', 'numeric' => 'No. NIK harus berupa angka.'));
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required|numeric', array('required' => 'No. HP harus diisi.', 'numeric' => 'No. HP harus berupa angka.'));
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required', array('required' => 'Nama Wali harus diisi.'));
        $this->form_validation->set_rules('no_hp_wali', 'No. HP Wali', 'required|numeric', array('required' => 'No. HP Wali harus diisi.', 'numeric' => 'No. HP Wali harus berupa angka.'));

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Tambah Santri Riyadhoh',
            ];

            $this->load->view('templates/header_dashboard', $data);
            $this->load->view('content/data_santri_riyadhoh/tambah_santri_riyadhoh', $data);
            $this->load->view('templates/footer_dashboard');
        } else {
            $data_santri = [
                'nama_santri_riyadhoh' => $this->input->post('nama_santri_riyadhoh'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat_desa' => $this->input->post('alamat_desa'),
                'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
                'alamat_kabupaten' => $this->input->post('alamat_kabupaten'),
                'alamat_provinsi' => $this->input->post('alamat_provinsi'),
                'no_nik' => $this->input->post('no_nik'),
                'no_hp' => $this->input->post('no_hp'),
                'nama_wali' => $this->input->post('nama_wali'),
                'no_hp_wali' => $this->input->post('no_hp_wali'),
                'tanggal_daftar' => $this->input->post(date('Y-m-d')),
                'tahun_daftar' => $this->input->post(date('Y')),
                
            ];

       
            $this->Data_santri_riyadhoh_model->tambah_santri_riyadhoh($data_santri);

            redirect('data_santri_riyadhoh');
        }



    }
    public function ubah_santri_riyadhoh($id)
    {
        $this->form_validation->set_rules('nama_santri_riyadhoh', 'Nama Santri Riyadhoh', 'required', array('required' => 'Nama Santri Riyadhoh harus diisi.'));
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', array('required' => 'Tempat Lahir harus diisi.'));
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required', array('required' => 'Tanggal Lahir harus diisi.'));
        $this->form_validation->set_rules('alamat_desa', 'Desa / Kelurahan', 'required', array('required' => 'Desa / Kelurahan harus diisi.'));
        $this->form_validation->set_rules('alamat_kecamatan', 'Kecamatan', 'required', array('required' => 'Kecamatan harus diisi.'));
        $this->form_validation->set_rules('alamat_kabupaten', 'Kabupaten/Kota', 'required', array('required' => 'Kabupaten/Kota harus diisi.'));
        $this->form_validation->set_rules('alamat_provinsi', 'Provinsi', 'required', array('required' => 'Provinsi harus diisi.'));
        $this->form_validation->set_rules('no_nik', 'No. NIK', 'required|numeric', array('required' => 'No. NIK harus diisi.', 'numeric' => 'No. NIK harus berupa angka.'));
        $this->form_validation->set_rules('no_hp', 'No. HP', 'required|numeric', array('required' => 'No. HP harus diisi.', 'numeric' => 'No. HP harus berupa angka.'));
        $this->form_validation->set_rules('nama_wali', 'Nama Wali', 'required', array('required' => 'Nama Wali harus diisi.'));
        $this->form_validation->set_rules('no_hp_wali', 'No. HP Wali', 'required|numeric', array('required' => 'No. HP Wali harus diisi.', 'numeric' => 'No. HP Wali harus berupa angka.'));

        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'Ubah Santri Riyadhoh',
                'santri' => $this->Data_santri_riyadhoh_model->get_santri_by_id($id)
            ];

            $this->load->view('templates/header_dashboard', $data);
            $this->load->view('content/data_santri_riyadhoh/ubah_santri_riyadhoh', $data);
            $this->load->view('templates/footer_dashboard');
        } else {
            $data_santri = [
                'nama_santri_riyadhoh' => $this->input->post('nama_santri_riyadhoh'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'alamat_desa' => $this->input->post('alamat_desa'),
                'alamat_kecamatan' => $this->input->post('alamat_kecamatan'),
                'alamat_kabupaten' => $this->input->post('alamat_kabupaten'),
                'alamat_provinsi' => $this->input->post('alamat_provinsi'),
                'no_nik' => $this->input->post('no_nik'),
                'no_hp' => $this->input->post('no_hp'),
                'nama_wali' => $this->input->post('nama_wali'),
                'no_hp_wali' => $this->input->post('no_hp_wali')
            ];

            $this->Data_santri_riyadhoh_model->ubah_santri_riyadhoh($id, $data_santri);

            redirect('data_santri_riyadhoh');
        }
    }

public function hapus_santri_riyadhoh($id)
{
    $this->Data_santri_riyadhoh_model->hapus_santri_riyadhoh($id);
    redirect('data_santri_riyadhoh');
}

}

/* End of file Data_santri_riyadhoh.php and path \application\controllers\Data_santri_riyadhoh.php */
