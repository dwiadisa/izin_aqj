<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_perizinan_santri extends CI_Controller {
     
    public function __construct()
    {
        parent::__construct();
          if (!is_login()) redirect('auth');
        $this->load->model('Data_santri_model');
        $this->load->model('Data_perizinan_model');
        $this->load->model('Data_penempatan_model');
        $this->load->model('Data_user_model');
    }

    public function index()
    {
        $data =[
            'title' => 'Data Perizinan Santri',
            'load_perizinan_semua' => $this->Data_perizinan_model->lihat_perizinan()->result(),
            'load_perizinan_kembali' => $this->Data_perizinan_model->lihat_perizinan_sudah_kembali()->result(),
            'load_perizinan_sudah_kembali' => $this->Data_perizinan_model->lihat_perizinan_sudah_kembali()->result(),
            'load_perizinan_belum_kembali' => $this->Data_perizinan_model->lihat_perizinan_belum_kembali()->result(),
            'load_perizinan_terlambat' => $this->Data_perizinan_model->lihat_perizinan_terlambat()->result()
        ];

        // var_dump($data);
        // die;
         $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/data_perizinan_santri/lihat_perizinan_santri',$data);
        $this->load->view('templates/footer_dashboard');
    }

    public function tambah_perizinan_santri()
    {
        $this->form_validation->set_rules('kode_perizinan', 'Kode Perizinan', 'required', array('required' => 'Kode Perizinan wajib diisi.'));
        $this->form_validation->set_rules('id_santri', 'ID Santri', 'required', array('required' => 'ID Santri wajib diisi.'));
        $this->form_validation->set_rules('tanggal_mulai', 'Tanggal Mulai', 'required', array('required' => 'Tanggal Mulai wajib diisi.'));
        $this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'required', array('required' => 'Jam Mulai wajib diisi.'));
        $this->form_validation->set_rules('tanggal_akhir', 'Tanggal Akhir', 'required', array('required' => 'Tanggal Akhir wajib diisi.'));
        $this->form_validation->set_rules('jam_akhir', 'Jam Akhir', 'required', array('required' => 'Jam Akhir wajib diisi.'));
        $this->form_validation->set_rules('status', 'Status', 'required', array('required' => 'Status wajib diisi.'));
        $this->form_validation->set_rules('status_izin', 'Status Izin', 'required', array('required' => 'Status Izin wajib diisi.'));
        $this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan wajib diisi.'));
        $this->form_validation->set_rules('pemberi_izin', 'Pemberi Izin', 'required', array('required' => 'Pemberi Izin wajib diisi.'));

        if ($this->form_validation->run() == FALSE) {
            $data =[
                'title' => 'Tambah Data Perizinan Santri',
                
                'load_penempatan' => $this->Data_penempatan_model->lihat_penempatan()->result(),
                'load_user' => $this->Data_user_model->lihat_user()->result()
            ];
            // echo validation_errors();
            $this->load->view('templates/header_dashboard' , $data);
            $this->load->view('content/data_perizinan_santri/tambah_perizinan_santri',$data);
            $this->load->view('templates/footer_dashboard');
        } else {
            // Proses input data
            $data_perizinan = [
                'kode_perizinan' => $this->input->post('kode_perizinan'),
                'id_santri' => $this->input->post('id_santri'),
                'tanggal_mulai' => $this->input->post('tanggal_mulai'),
                'jam_mulai' => $this->input->post('jam_mulai'),
                'tanggal_akhir' => $this->input->post('tanggal_akhir'),
                'jam_akhir' => $this->input->post('jam_akhir'),
                'status' => $this->input->post('status'),
                'status_izin' => $this->input->post('status_izin'),
                'keperluan' => $this->input->post('keperluan'),
                'pemberi_izin' => $this->input->post('pemberi_izin')
            ];

          

            $this->Data_perizinan_model->tambah_perizinan($data_perizinan);
            redirect('data_perizinan_santri');
        }
    }

public function ubah_perizinan($id_perizinan)
{
    $this->form_validation->set_rules('kode_perizinan', 'Kode Perizinan', 'required', array('required' => 'Kode Perizinan harus diisi.'));
    $this->form_validation->set_rules('id_santri', 'ID Santri', 'required', array('required' => 'ID Santri harus diisi.'));
    $this->form_validation->set_rules('tanggal_mulai', 'Tanggal Mulai', 'required', array('required' => 'Tanggal Mulai harus diisi.'));
    $this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'required', array('required' => 'Jam Mulai harus diisi.'));
    $this->form_validation->set_rules('tanggal_akhir', 'Tanggal Akhir', 'required', array('required' => 'Tanggal Akhir harus diisi.'));
    $this->form_validation->set_rules('jam_akhir', 'Jam Akhir', 'required', array('required' => 'Jam Akhir harus diisi.'));
    $this->form_validation->set_rules('status', 'Status', 'required', array('required' => 'Status harus diisi.'));
    $this->form_validation->set_rules('status_izin', 'Status Izin', 'required', array('required' => 'Status Izin harus diisi.'));
    $this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan harus diisi.'));
    $this->form_validation->set_rules('pemberi_izin', 'Pemberi Izin', 'required', array('required' => 'Pemberi Izin harus diisi.'));

    if ($this->form_validation->run() == FALSE) {
        $data = [
            'title' => 'Ubah Data Perizinan Santri',
            'perizinan' => $this->Data_perizinan_model->lihat_perizinan_by_id($id_perizinan),
            'load_penempatan' => $this->Data_penempatan_model->lihat_penempatan()->result(),
            'load_user' => $this->Data_user_model->lihat_user()->result()
        ];
        $this->load->view('templates/header_dashboard', $data);
        $this->load->view('content/data_perizinan_santri/ubah_perizinan_santri', $data);
        $this->load->view('templates/footer_dashboard');
    } else {
        $data_perizinan = [
            'kode_perizinan' => $this->input->post('kode_perizinan'),
            'id_santri' => $this->input->post('id_santri'),
            'tanggal_mulai' => $this->input->post('tanggal_mulai'),
            'jam_mulai' => $this->input->post('jam_mulai'),
            'tanggal_akhir' => $this->input->post('tanggal_akhir'),
            'jam_akhir' => $this->input->post('jam_akhir'),
            'status' => $this->input->post('status'),
            'status_izin' => $this->input->post('status_izin'),
            'keperluan' => $this->input->post('keperluan'),
            'pemberi_izin' => $this->input->post('pemberi_izin')
        ];

        if ($this->input->post('status')== 'SUDAH DIIZINKAN') {
            redirect('data_perizinan_santri/print_perizinan/'.$id_perizinan);
        }

        $this->Data_perizinan_model->update_perizinan($id_perizinan, $data_perizinan);
        redirect('data_perizinan_santri');
    }
}

public function print_perizinan($id_perizinan){
      $data = [
            // 'title' => 'Ubah Data Perizinan Santri',
            'perizinan' => $this->Data_perizinan_model->lihat_perizinan_by_id($id_perizinan),
            'load_penempatan' => $this->Data_penempatan_model->lihat_penempatan()->result(),
            'load_user' => $this->Data_user_model->lihat_user()->result()
        ];

     
        if ($data['perizinan']->status_izin == 'SUDAH DIIZINKAN') {
            $this->load->view('cetak/struk_perizinan',$data);
        } else {
            echo "<script>alert('Perizinan belum diizinkan');</script>";
        }
        

        // var_dump($data);
       

}

public function hapus_perizinan($id_perizinan)
{
    $this->Data_perizinan_model->delete_perizinan($id_perizinan);
    redirect('data_perizinan_santri');
}
}

/* End of file Data_perizinan_santri.php and path \application\controllers\Data_perizinan_santri.php */
