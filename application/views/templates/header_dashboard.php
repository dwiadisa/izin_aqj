<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title><?php echo $title ?></title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/') ?>Logo-Al-Qodiri-Small-150x150.png">
    <!-- Pignose Calender -->
    <link href="<?php echo base_url('assets/theme/') ?>plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="<?php echo base_url('assets/theme/') ?>plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/theme/') ?>plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="<?php echo base_url('assets/theme/') ?>css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- font awesome load -->
    <script src="https://kit.fontawesome.com/6e0c65f34f.js" crossorigin="anonymous"></script>
<link href="https://cdn.datatables.net/v/bs4/dt-2.0.8/datatables.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<!-- google font -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- google font -->
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header bg-success">
          <div class="brand-logo">
                <a href="<?php echo base_url('dashboard'); ?>">
                    <b class="logo-abbr"><img src="<?php echo base_url('assets/images/') ?>Logo-Al-Qodiri-Small-150x150.png" alt=""></b>
                    <span class="logo-compact"><img src="<?php echo base_url('assets/images/') ?>Logo-Al-Qodiri-Small-150x150.png" alt=""></span>
                    <span class="brand-title">
                        <img src="<?php echo base_url('assets/images/') ?>Logo-Al-Qodiri-Small-150x150.png" style="width: 40px;" alt="">
                        <span class="text-white font-weight-bold">
                            SIPP-TREN AQJ
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                 <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
               
                <div class="header-right">
                    <ul class="clearfix">

                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span id="current-time"></span>
                                <script>
                                    function updateTime() {
                                        var now = new Date();
                                        var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                                        var day = days[now.getDay()];
                                        var date = now.getDate();
                                        var month = now.getMonth() + 1;
                                        var year = now.getFullYear();
                                        var hours = now.getHours();
                                        var minutes = now.getMinutes();
                                        var seconds = now.getSeconds();
                                        minutes = minutes < 10 ? '0' + minutes : minutes;
                                        seconds = seconds < 10 ? '0' + seconds : seconds;
                                        var timeString = day + ', ' + date + '/' + month + '/' + year + ' ' + hours + ':' + minutes + ':' + seconds;
                                        document.getElementById('current-time').innerHTML = timeString;
                                    }
                                    setInterval(updateTime, 1000);
                                    updateTime();
                                </script>
                            </a>
                            <!-- <div class="drop-down dropdown-language animated fadeIn  dropdown-menu"> -->
                                <!-- <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div> -->
                            <!-- </div> -->
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src=" <?php echo base_url('assets/theme/') ?>images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url('profil_user') ?>"><i class="icon-user"></i> <span>Profil</span></a>
                                        </li>
                                        
                                        
                                        <hr class="my-2">
                                      
                                        <li><a href="<?php echo base_url('auth/logout') ?>"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                      <li>
                        <a href="<?php echo base_url('dashboard') ?>" aria-expanded="false">
                         <i class="fa-solid fa-gauge"></i><span class="nav-text">Dashboard</span>
                        </a>
                                </li>
                  
                   
                    <li class="nav-label">Master Data Santri dan Wilayah (Asrama)</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                         <i class="fa-solid fa-users"></i> <span class="nav-text">Data Santri</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('data_santri') ?>">Data Santri</a></li>
                            <li><a href="<?php echo base_url('data_santri/tambah_santri') ?>">Tambah Santri Secara Manual</a></li>
                            <li><a href="<?php echo base_url('data_santri/tambah_data_santri_massal') ?>">Tambah Santri Secara Massal (Excel)</a></li>
                        
                        </ul>
                    </li>
                     <li>
                        <a href="<?php echo base_url('data_santri/histori_pendidikan') ?>" aria-expanded="false">
                          <i class="fa-solid fa-clock-rotate-left"></i><span class="nav-text">Histori Pendidikan Santri</span>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('level') == 'ADMIN'): ?>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                          <i class="fa-solid fa-location-dot"></i> <span class="nav-text">Data Wilayah/Daerah (Asrama)</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('data_wilayah') ?>">Data Wilayah </a></li>
                            <li><a href="<?php echo base_url('data_wilayah/tambah_wilayah') ?>">Tambah Wilayah</a></li>
                            <li><a href="<?php echo base_url('data_wilayah/list_kamar') ?>">Data Kamar</a></li>
                            <li><a href="<?php echo base_url('data_wilayah/tambah_kamar') ?>">Tambah Kamar</a></li>
                           
                        </ul>
                    </li>

                     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa-solid fa-school"></i> <span class="nav-text">Lembaga Pendidikan</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('data_lembaga_pendidikan') ?>">Data Lembaga Pendidikan</a></li>
                            <li><a href="<?php echo base_url('data_lembaga_pendidikan/tambah_lembaga') ?>">Tambah Lembaga Pendidikan</a></li>
                            
                        
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li class="nav-label">Kelola Penempatan Santri</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                          <i class="fa-solid fa-list"></i><span class="nav-text">Data Penempatan Santri di Wilayah/Daerah (Asrama)</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('data_penempatan_santri') ?>">List Seluruh Penempatan Santri</a></li>
                            <li><a href="<?php echo base_url('data_penempatan_santri/tambah_penempatan_santri') ?>">Tambah Penempatan Santri</a></li>
                            <li><a href="<?php echo base_url('data_penempatan_santri/ekspor_data_santri') ?>">Ekspor Santri Perwilayah</a></li>
                          
                         </ul>
                    </li>
                     <li class="nav-label">Master Perizinan Santri</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                          <i class="fa-solid fa-check-to-slot"></i><span class="nav-text">Kelola Perizinan Santri</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('data_perizinan_santri') ?>">List Data/Status Perizinan Santri</a></li>
                            <li><a href="<?php echo base_url('data_perizinan_santri/tambah_perizinan_santri') ?>">Tambah Perizinan Santri</a></li>
                            <li><a href="<?php echo base_url('data_perizinan_santri/data_keperluan_izin') ?>">Data Keperluan Izin</a></li>
                            <li><a href="<?php echo base_url('data_perizinan_santri/tambah_keperluan_izin') ?>">Tambah Keperluan Izin</a></li>
                            <li><a href="<?php echo base_url('data_perizinan_santri/ekspor_rekapan_perizinan') ?>">Ekspor Rekapan Perizinan Santri</a></li>
                        
                        </ul>
                    </li>
                    <?php if ($this->session->userdata('level') == 'ADMIN'): ?>
                    <li>
                        <a href="<?php echo base_url('kiosk_setting') ?>" aria-expanded="false">
                          <i class="fa-solid fa-desktop"></i></i><span class="nav-text">Kiosk Setting</span>
                        </a>
                    </li>
                    <?php endif; ?>
                    </li>
                    <!-- <li>
                        <a href="widgets.html" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Widget</span>
                        </a>
                    </li> -->
                    <li class="nav-label">Kelola Data Santri Riyadhoh</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                          <i class="fa-solid fa-table"></i><span class="nav-text">Data Santri Riyadhoh</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('data_santri_riyadhoh') ?>">List Santri Riyadhoh</a></li>
                            <li><a href="<?php echo base_url('data_santri_riyadhoh/tambah_santri_riyadhoh') ?>">Tambah Data Santri Riyadhoh</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-label">Manajemen User</li>
                    <?php if ($this->session->userdata('level') == 'ADMIN'): ?>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                           <i class="fa-solid fa-crown"></i><span class="nav-text">Data User</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url('data_user') ?>" aria-expanded="false">List User</a></li>
                            <li><a href="<?php echo base_url('data_user/tambah_user') ?>" aria-expanded="false">Tambah User</a></li>
                        </ul>
                        <li>
                        <a href="<?php echo base_url('database_backup') ?>" aria-expanded="false">
                          <i class="fa-solid fa-database"></i></i><span class="nav-text">Backup Database</span>
                        </a>
                    </li>
                    </li>
                    <?php endif; ?>
                  
                      <li>
                        <a href="<?php echo base_url('profil_user') ?>" aria-expanded="false">
                           <i class="fa-solid fa-address-card"></i><span class="nav-text">Lihat Profil Pengguna</span>
                        </a>
                      <li>
                    
                      <li>
                        <a href="<?php echo base_url('about') ?>" aria-expanded="false">
                         <i class="fa-solid fa-circle-info"></i><span class="nav-text">Tentang App</span>
                        </a>
                      <li>
                        <a href="<?php echo base_url('auth/logout') ?>" aria-expanded="false">
                          <i class="fa-solid fa-right-from-bracket"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>
                    
                  
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->