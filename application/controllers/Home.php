<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_penempatan_model');
        $this->load->model('home_model');
    }

    public function index()
    {

        $data =[
            'title' => 'Self Service SIPP-TREN Al-Qodiri Jember',
              'load_penempatan' => $this->Data_penempatan_model->lihat_penempatan()->result(),


        ];

        $this->load->view('home',$data);

    }

    public function get_izin(){
        $izin = $this->input->post('kode_izin');
        $cari_izin = $this->home_model->lihat_lisensi_izin($izin)->result();
        // json_encode($cari_izin);
        // var_dump($cari_izin);
        if (!empty($cari_izin)) {
            echo json_encode($cari_izin[0]); // Asumsikan hanya ada satu hasil, jika ada lebih dari satu, sesuaikan sesuai kebutuhan.
        } else {
            echo json_encode(null);
        }
    }

    public function izin_kembali($kode){


        $izin  = $this->home_model->lihat_lisensi_izin($kode)->row();

        $current_time = date('Y-m-d H:i:s');
        $end_time = $izin->tanggal_akhir . ' ' . $izin->jam_akhir;
        if (strtotime($current_time) > strtotime($end_time)) {
            // $diff = strtotime($current_time) - strtotime($end_time);
            // $days_late = floor($diff / (60 * 60 * 24));
            // echo "<span class='badge badge-danger'>Terlambat $days_late hari</span>";
            $this->home_model->update_izin($kode, 'TERLAMBAT KEMBALI');


            echo "perizinan telat";

        }else{
              $this->home_model->update_izin($kode, 'SUDAH KEMBALI');
              echo "perizinan tidak telat";
        }

        redirect('home');
        // echo "perizinan dah keupdate";
        



        // var_dump($cek_terlambat);
       
        // $where =$kode ;
        // $this->home_model->update_izin($kode);
        // echo '<script>alert("Izin sudah berhasil diubah");</script>';
        // redirect('home');


    }
}

/* End of file Home.php and path \application\controllers\Home.php */
