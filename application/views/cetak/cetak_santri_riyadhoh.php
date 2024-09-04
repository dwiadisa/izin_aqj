<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FORM TAMU RIYADHOH</title>
</head>


<style>

    
    body {

         margin: 10px;  
         font-family: "Times New Roman", Times, serif;
         font-size: 12px;
    }

    .box {
        font-weight: bold;
        background-color: #f2f2f200;
        border: 1px solid #000000;
        color: #000000;
    }
</style>

<body>
    <div class="container text-center">
        <?php
        $imagePath = 'assets/images/kop.png';
        $imageData = file_get_contents($imagePath);
        $base64Image = base64_encode($imageData);
        ?>
        <img src="data:image/png;base64, <?php echo $base64Image; ?>" class="text-center" width="600px" alt="" srcset=""> <br>
    </div>
    <div class="container mt-2 text-center">
        <table class="mx-auto">
            <tr>
                <td>
                    <h5 class="fw-bold"><u> FORM TAMU RIYADHOH</u></h5>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <P> Yang bertanda tangan di bawah ini : </P>
        <table style="width: 100%;">
            <tr>
                <td style="width: 75%;">
                    <table class="table table-bordered">
                        <tr>
                           
                            <td>Nama Santri Riyadhoh</td>
                            <td>: <?php echo $santri->nama_santri_riyadhoh; ?></td>
                        </tr>
                        <tr>
                           
                           <td>Tempat Lahir</td>
                            <td>: <?php echo $santri->tempat_lahir; ?></td>
                        </tr>
                        <tr>
                           
                             <td>Tanggal Lahir</td>
                            <td>: <?php echo $santri->tanggal_lahir; ?></td>
                        </tr>
                       
                           
                   
                        <tr>
                          
                            <td>Alamat Lengkap</td>
                            <td>
                              
                                a. Desa : <?php echo $santri->alamat_desa; ?><br>
                                b. Kecamatan : <?php echo $santri->alamat_kecamatan; ?><br>
                                c. Kabupaten : <?php echo $santri->alamat_kabupaten; ?><br>
                                d. Provinsi : <?php echo $santri->alamat_provinsi; ?><br>
                            </td>
                        </tr>
                        <tr>
                          
                            <td>NIK</td>
                             <td>: <?php echo $santri->no_nik; ?></td>
                        </tr>
                        <tr>
                          
                            <td>No. HP</td>
                             <td>: <?php echo $santri->no_hp; ?></td>
                        </tr>
                        <tr>
                          
                            <td>Nama Wali</td>
                            <td>: <?php echo $santri->nama_wali; ?></td>
                        </tr>
                        <tr>
                          
                            <td>No HP Wali</td>
                            <td>: <?php echo $santri->no_hp_wali; ?></td>
                        </tr>
                    </table>
            <p>Merupakan Tamu Riyadhoh yang tinggal di Pondok Pesantren Al-Qodiri Jember selama:</p>
                    <table class="table table-bordered">
                        <tr>
                           
                            <td>Waktu</td>
                            <td>: </td>
                        </tr>
                        <tr>
                          
                            <td>Tgl/Hari</td>
                            <td>: ........................... (....-....-20...sampai.....-....-20..)</td>
                        </tr>
                       
                       
                    </table>
                </td>
               
            </tr>
        </table>
       
        <table>
            <tr>
             <p style="text-align: justify;">Saya sebagai Tamu Riyadhoh menyatakan sepenuhnya dan bersedia mentaati segala aturan di Pondok Pesantren Al-Qodiri 1 Jember</p>
            </tr>
        </table>
        <p style="text-align: center;"><em>Mengetahui,</em></p>

        <table style="width: 100%;">
            <tr>
                <td style="text-align: center;">
                    <p>
                        Pengurus<br><br><br><br>
                        ...............................
                    </p>
                </td>
                <td style="text-align: center;">
                    <p>
                        Tamu Riyadhoh<br><br><br><br>
                       
                        ...............................<br>
                    </p>
                </td>
            </tr>
        </table>



        <p style="text-align: center;"><em>Menyetujui,</em></p>
       
        <table style="width: 100%;">
            <tr>
                <td style="text-align: center;">
                    <p>
                        Ka. Biro Kepesantrenan<br>Pondok Pesantren Al-Qodiri Jember<br><br><br><b>Gus. Helmi Emha, S.Pd.I</b>
                    </p>
                </td>
                <td style="text-align: center;">
                    <p>
                        Wakil Pengasuh<br>Pondok Pesantren Al-Qodiri Jember<br><br><br><b>KH. Taufiqurrahman Mz</b>
                    </p>
                </td>
            </tr>
        </table>
        <small>Form ini dicetak pada <?php echo date('Y-m-d'); ?></small>
    </div>
</body>

</html>