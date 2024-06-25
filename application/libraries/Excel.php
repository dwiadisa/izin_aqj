<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/PHPExcel.php'; // Sesuaikan jalur ini dengan lokasi file PHPExcel.php

use PHPExcel; // Tambahkan ini

class ssExcel extends PHPExcel {
    public function __construct() {
        parent::__construct();
    }
}
?>
