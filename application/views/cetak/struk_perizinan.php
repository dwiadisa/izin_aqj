
<head>
<html>
<head>
    <title>Cetak Perizinan Santri</title>
    <style>
        #tabel {
            font-size: 15px;
            border-collapse: collapse;
        }
        #tabel td {
            padding-left: 5px;
            border: 1px solid black;
        }
        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 1px;
        }
    </style>
</head>
<body style='font-family: tahoma; font-size: 8pt;'>
    <center>
        <table style='width: 350px; font-size: 16pt; font-family: calibri; border-collapse: collapse;' border='0'>
            <td width='70%' align='CENTER' vertical-align:top'>
                <span style='color: black;'>
                    <b>LISENSI PERIZINAN SANTRI</b><br>
                    <b>PP.AL-QODIRI JEMBER</b><br>
                    <hr>
                    <span style='font-size: 12pt'>NIS/Nama Santri : <?php echo $perizinan->no_induk_santri ?> - <?php echo $perizinan->nama_lengkap_santri ?></span><br>
                </span>
            </td>
        </table>
        <table cellspacing='0' cellpadding='0' style='width: 350px; font-size: 12pt; font-family: calibri; border-collapse: collapse;' border='0'>
            <tr align='center'>
                <td colspan='5'><hr></td>
            </tr>
            <tr>
                <td style='vertical-align: top'>Kode Izin</td>
                <td style='vertical-align: top'><b><?php echo $perizinan->kode_perizinan ?></b></td>
                <!-- <td style='vertical-align: top'>Tanggal - Jam Akhir</td> -->
            </tr>
            <tr>
                <td style='vertical-align: top'>Tanggal - Jam Izin</td>
                <td style='vertical-align: top'><?php echo $perizinan->tanggal_mulai ?> - <?php echo $perizinan->jam_mulai ?></td>
                <!-- <td style='vertical-align: top'>Tanggal - Jam Akhir</td> -->
            </tr>
            <tr>
                <td style='vertical-align: top'>Tanggal - Jam Akhir</td>
                <td style='vertical-align: top'><?php echo $perizinan->tanggal_akhir ?> - <?php echo $perizinan->jam_akhir ?></td>
                <!-- <td style='vertical-align: top'>Tanggal - Jam Akhir</td> -->
            </tr>
            <tr>
                <td style='vertical-align: top'>Keperluan</td>
                <td style='vertical-align: top'><?php echo $perizinan->keperluan ?></td>
                <!-- <td style='vertical-align: top'>Tanggal - Jam Akhir</td> -->
            </tr>
            <!-- <tr>
                <td style='vertical-align: top'>Pemberi Izin</td>
                <td style='vertical-align: top'>admin</td>
                <!-- <td style='vertical-align: top'>Tanggal - Jam Akhir</td> -->
            </tr> 
            <tr>
                <td colspan='5'><hr></td>
            </tr>
        </table>
        <table style='width: 350; font-size: 12pt;' cellspacing='2'>
            <tr>
                <br>
                <td align='center'><br></td>
            </tr>
            <tr>
                <br>
                <td align='center'>Jika Terkendala untuk kembali ke pondok silakan menghubungi 081xxxxxx<br></td>
            </tr>
        </table>
    </center>
</body>
</html>


	<script>
		window.print();
	</script>