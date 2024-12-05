<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FORM SANTRI PP AL-QODIRI JEMBER</title>
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
                    <h5 class="fw-bold"><u>IDENTITAS SANTRI</u></h5>
                </td>
            </tr>
        </table>
    </div>

    <div class="container">
        <table>
            <tr>
                <td>
                    <div style="border: 1px solid black;">
                        <p style="font-weight: bold; margin: 0; padding-left: 1px; padding-right: 1px;">
                          IDENTITAS SANTRI
                        </p>
                    </div>
                </td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <td style="width: 75%;">
                    <table class="table table-bordered">
                        <tr>
                            <td>1</td>
                            <td>No Induk Santri</td>
                            <td>: <?php echo $santri->no_induk_santri; ?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nama Lengkap Santri</td>
                            <td>: <?php echo $santri->nama_lengkap_santri; ?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tanggal Masuk</td>
                            <td>: <?php echo $santri->tanggal_masuk; ?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Tempat Lahir</td>
                            <td>: <?php echo $santri->tempat_lahir; ?></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Tanggal Lahir</td>
                            <td>: <?php echo $santri->tanggal_lahir; ?></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Alamat Lengkap</td>
                            <td>
                                a. Dusun : <?php echo $santri->alamat_dusun; ?><br>
                                b. Desa : <?php echo $santri->alamat_desa; ?><br>
                                c. Kecamatan : <?php echo $santri->alamat_kecamatan; ?><br>
                                d. Kabupaten : <?php echo $santri->alamat_kabupaten; ?><br>
                                e. Provinsi : <?php echo $santri->alamat_provinsi; ?><br>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Jenjang Pendidikan Yang Dipilih</td>
                            <td>: <?php echo $santri->nama_lembaga; ?></td>
                        </tr>
                    </table>
  <table>
            <tr>
                <td>
                    <div style="border: 1px solid black;">
                        <p style="font-weight: bold; margin: 0; padding-left: 1px; padding-right: 1px;">
                         ORANG TUA / WALI
                        </p>
                    </div>
                </td>
            </tr>
        </table>
                    <table class="table table-bordered">
                        <tr>
                            <td>8</td>
                            <td>Nama Ayah</td>
                            <td>: <?php echo $santri->nama_ayah; ?></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Pekerjaan Ayah</td>
                            <td>: <?php echo $santri->pekerjaan_ayah; ?></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Nama Ibu</td>
                            <td>: <?php echo $santri->nama_ibu; ?></td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Pekerjaan Ibu</td>
                        </tr>
                    </table>
                </td>
               
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <div style="border: 1px solid black;">
                        <p style="font-weight: bold; margin: 0; padding-left: 1px; padding-right: 1px;">
                           PERNYATAAN
                        </p>
                    </div>
                </td>
            </tr>
        </table>
        <table>
            <tr>
             <p style="text-align: justify;">Saya sebagai wali santri memasrahkan sepenuhnya anak saya di Pondok Pesantren Al-Qodiri 1 Jember dan bersedia sepenuhnya menaati segala aturan pesantren yang berada di Buku Perizinan dan Peraturan Undang-Undang Santri. Hal ini dibuktikan dengan tanda tangan saya dan anak saya dibawah ini.</p>
            </tr>
        </table>
        
        <table style="width: 100%;">
            <tr>
                 <td style= "vertical-align: top;">
                    <?php
                        $imagePath = $santri->foto;
                        // $imageData = file_get_contents($imagePath);
                        // $base64Image = base64_encode($imageData);
                    ?>
					<!-- jika foto santri tidak ada munculkan ini -->
					<?php if($imagePath == "") : ?>
                    <img src="<?php echo base_url('assets/images/user.png') ?>" alt="Foto Santri"  style="width: 100px;">
					<?php else : ?>
						<?php  $imageData = file_get_contents($imagePath);
                        		$base64Image = base64_encode($imageData); ?>
						<!-- jika foto santri ada munculkan ini -->
                    <img src="data:image/jpeg;base64,<?php echo $base64Image; ?>" alt="Foto Santri"  style="width: 100px;">
					<?php endif; ?>
                </td>
                <td style="text-align: center;">
                    <p>
                        Jember, <?php echo date('Y-m-d'); ?><br> Mengetahui <br> <b>
                            Orangtua/Walisantri <br> <br> <br> ...............................
                        </b>
                    </p>
                </td>
                <td style="text-align: center;">
                    <p>
                       <b> Santri yang bersangkutan </b>
                        <br> <br> <br> ...............................
                    </p>
                </td>
                <td style="text-align: center;">
                    <p>
                       <b> Pengurus Yang Bertugas </b>
                        <br> <br> <br> ...............................
                    </p>
                </td>
            </tr>
        </table>
        <small>Form ini dicetak pada <?php echo date('Y-m-d'); ?></small>
