<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 12px;
          
        }
        .table {
            /* width: 100%; */
            border-collapse: collapse;
        }
        .table th, .table td {
            padding: 8px;
            text-align: left;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="text-center">
        <img src="data:image/png;base64, <?php echo base64_encode(file_get_contents('assets/images/kop.png')); ?>" width="600px" alt="Kop Surat">
        <h5><u>FORM TAMU RIYADHOH</u></h5>
    </div>
    <p>Yang Bertanda tangan dibawah ini:</p>
    <table class="table">
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
          
            <td>Alamat</td>
            <td>
                b. Desa : <?php echo $santri->alamat_desa; ?><br>
                c. Kecamatan : <?php echo $santri->alamat_kecamatan; ?><br>
                d. Kabupaten : <?php echo $santri->alamat_kabupaten; ?><br>
                e. Provinsi : <?php echo $santri->alamat_provinsi; ?>
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
          
            <td>No. HP Wali</td>
            <td>: <?php echo $santri->no_hp_wali; ?></td>
        </tr>
    </table>
    <p>Merupakan Tamu Riyadhoh yang tinggal di Pondok Pesantren Al-Qodiri Jember selama:</p>
    <table class="table">
        <tr>
           
            <td>Waktu</td>
            <td>: </td>
        </tr>
        <tr>
           
            <td>Tgl/hari</td>
            <td>: </td>
        </tr>
    </table>
    <p style="text-align: justify;">Saya sebagai Tamu Riyadhoh menyatakan sepenuhnya dan bersedia mentaati segala aturan di Pondok Pesantren Al-Qodiri 1 Jember</p>
    <p class="text-center"><em>Mengetahui</em></p>
    <table class="table">
        <tr>
            <td class="text-center">Pengurus</td>
            <td class="text-center"><b>Tamu Riyadhoh</b></td>
        </tr>
        <tr>
            <td class="text-center"><br><br><br>...............................</td>
            <td class="text-center"><br><br><br>...............................</td>
        </tr>
    </table>
    <p class="text-center"><em>Menyetujui</em></p>
    <table class="table">
        <tr>
            <td class="text-center">Ka. Biro Kepesantrenan<br>Pondok Pesantren Al-Qodiri Jember<br><br><br><b>Gus. Helmi Emha, S.Pd.I</b></td>
            <td class="text-center">Wakil Pengasuh<br>Pondok Pesantren Al-Qodiri Jember<br><br><br><b>KH. Taufiqurrahman Mz</b></td>
        </tr>
    </table>
    <small>Form ini dicetak pada <?php echo date('Y-m-d'); ?></small>
</body>
</html>
