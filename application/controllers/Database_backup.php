<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_backup extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
              if (!is_login()) redirect('auth');
    }

    public function index()
    {
     
        $data= [
            'title' => 'Database Backup',
            // 'wilayah'=> $this->data_wilayah_model->lihat_wilayah()->result()
        ];

    //  var_dump($data);
        $this->load->view('templates/header_dashboard' , $data);
        $this->load->view('content/database_backup/ekspor_database', $data);
        $this->load->view('templates/footer_dashboard');   

    }

    public function download_sql(){
        $this->load->dbutil();
        // load dbase utility ci3

        $db_name = 'backup-db-.' . $this->db->database . '-on' . date("Y-m-d-H-i-s") . '.zip';


        $prefs = array(
            'format' => 'zip',
            'filename' => $db_name,
            'add_insert' => TRUE,
            'foreign_key_checks' => FALSE,

        );

        // siapkan backup untuk proses download file
        $backup =  $this->dbutil->backup($prefs);
        // set lokasi buat download file
        $save = 'pathtobkfolder/' . $db_name;

        // buat filenya
        $this->load->helper('file');
        write_file($save, $backup);

        // download filenya
        $this->load->helper('download');
        force_download($db_name, $backup);




    }
}

/* End of file Database_backup.php and path \application\controllers\Database_backup.php */
