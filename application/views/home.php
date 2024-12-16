<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title>Self Service Kiosk - SIPP-TREN Al-Qodiri Jember</title>
	<meta content="" name="description" />
	<meta content="" name="keywords" />

	<!-- Favicons -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/Logo-Al-Qodiri-Small-150x150.png') ?>">
	<link href="<?php echo base_url('assets/kiosk_templates/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com" rel="preconnect" />
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
	<!-- <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"/>

  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/aos/aos.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

	<!-- Main CSS File -->
	<link href="<?php echo base_url('assets/kiosk_templates/') ?>assets/css/main.css" rel="stylesheet" />

	<!-- font awesome -->
	<script src="https://kit.fontawesome.com/6e0c65f34f.js" crossorigin="anonymous"></script>
	<!-- font awesome -->

	<!-- jQuery (diperlukan oleh Select2) -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

	<!-- Select2 JS -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
	<!-- select 2 -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" /> -->
	<!-- =======================================================
  * Template Name: OnePage
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Updated: Jun 27 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
	<header id="header" class="header d-flex align-items-center sticky-top">
		<div class="container-fluid container-xl position-relative d-flex align-items-center">
			<a href="index.html" class="logo d-flex align-items-center me-auto">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<img src="https://alqodiri.net/wp-content/themes/edublink/assets/images/logo.png" alt="" />
				<h1 class="sitename fw-bold" style="font-size: 25px">Self Service</h1>
			</a>

			<nav id="navmenu" class="navmenu">
				<ul>

					<li>

						<div class="time me-3"></div>
					</li>

					<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
			</nav>

			<a class="btn btn-success" href="<?php echo base_url('auth') ?>">
				<i class="fa-solid fa-right-to-bracket"></i>
				Login</a>
		</div>
	</header>

	<main class="main">
		<!-- Services Section -->
		<section id="services" class="services section light-background">
			<!-- Section Title -->
			<!-- <div class="container section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
        </div> -->

			<div class="container">
				<div class="row">
					<div class="col">
						<div class="container px-lg-5" data-aos="fade-up" data-aos-delay="50">
							<div class="alert alert-success" role="alert">
								<div class="fw-bold">Masukkan kode lisensi jika santri sudah kembali ke pesantren</div>
							</div>
							<form id="licenseForm">
								<div class="mb-3">
									<label for="exampleInputEmail1" class="form-label">Masukkan Kode Lisensi</label>
									<input type="text" class="form-control form-control-lg" id="kode_izin" name="kode_izin" aria-describedby="emailHelp" placeholder="Masukkan Kode Lisensi Perizinan Disini!" />
								</div>

								<div class="d-grid gap-2 mb-5">
									<button type="submit" class="btn btn-lg btn-success">
										<i class="fa-solid fa-check"></i>
										Konfirmasi Kembali</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col">
						<div class="row gy-4">
							<div class="col" data-aos="fade-up" data-aos-delay="100">
								<div class="service-item item-cyan position-relative">
									<div class="icon">
										<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
											<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
										</svg>
										<i class="fa-solid fa-check-to-slot"></i>
									</div>
									<a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#izinmodal">
										<h3>Perizinan Santri</h3>
									</a>
									<!-- <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis tempore et consequatur.</p> -->
								</div>
							</div>
							<!-- End Service Item -->

							<div class="col" data-aos="fade-up" data-aos-delay="200">
								<div class="service-item item-orange position-relative">
									<div class="icon">
										<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
											<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
										</svg>
										<i class="fa-solid fa-id-card"></i>
									</div>
									<a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#riyadhoh"></a>
									<!-- <a href="service-details.html" class="stretched-link"> -->
									<h3>Pendaftaran Tamu Riyadhoh</h3>
									</a>
									<!-- <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p> -->
								</div>
							</div>
							<!-- End Service Item -->

							<!-- End Service Item -->
						</div>
						<div class="row gy-4 mt-2 mb-2">
							<div class="col" data-aos="fade-up" data-aos-delay="300">
								<div class="service-item item-orange position-relative">
									<div class="icon">
										<svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
											<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
										</svg>
										<i class="fa-solid fa-clipboard"></i>
									</div>
									<a href="#" class="stretched-link" data-bs-toggle="modal" data-bs-target="#santri_baru"></a>
									<!-- <a href="service-details.html" class="stretched-link"> -->
									<h3>Pendaftaran Santri Baru</h3>
									</a>
									<!-- <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p> -->
								</div>
							</div>


						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- /Services Section -->
	</main>
	<!-- modal daftar santri baru -->
	<div class="modal fade" id="santri_baru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Pendaftaran Santri Baru</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<h4 class="text-center">Scan QR code dibawah untuk melakukan pendaftaran</h4>
					<img src="<?php echo base_url('assets/images/qrcode_aqj.png') ?>" width="300px" class="rounded mx-auto d-block" alt="...">

					<div class="d-grid gap-2">
						<a class="btn btn-success" href="https://bit.ly/PSBPPAQ2024" role="button">Menuju Link Pendaftaran</a>
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					</div>
				</div>
				<div class="modal-footer">


				</div>
			</div>
		</div>
	</div>


	<!-- modal daftar santri baru -->
	<!-- modal izin santri -->

	<div class="modal fade" id="izinmodal" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Perizinan Santri</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="alert alert-success" role="alert">
						<div class="fw-bold">Berikut Ketentuan untuk Izin Keluar Pesantren</div>
						<ul>
							<li>
								Alur Santri Izin Pulang dengan Alasan Kepentingan Keluarga:
								<ol>
									<li>Meminta Izin dan Tanda tangan Kepada Keluarga Dzuriyah</li>
									<li>Dewan Keamanan</li>
									<li>Kantor Pengurus</li>
								</ol>
							</li>
							<li>
								Alur Santri Izin Pulang Karena Sakit / Berobat dan Keluarga Meninggal:
								<ol>
									<li>Meminta surat Rekom Dari UKPP / Seksi Kesehatan (Bila Sakit)</li>
									<li>Dewan Keamanan</li>
									<li>Kantor Pengurus</li>
								</ol>
							</li>
							<li>Jika Santri izin pulang dengan alasan Walimatul Urs maka batas waktu pulang H-1 Acara dan kembali ke pesantren H+1.</li>
							<li>Untuk Perizinan Kepada keluarga Dhalem (Kh Taufiqurrohman Muzakki) Waktunya Ba’da Sholat Dzuhur, Untuk (Gus H Helmi Emha) Ba’da Sholat Asar.</li>
						</ul>
						<div class="fw-bold">Jika sudah mengisi daftar berikut silakan meminta validasi ke pengurus</div>
					</div>
					<form action="<?php echo base_url('home/tambah_perizinan') ?>" method="post">
						<!-- Name input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example1">Kode Perizinan</label>
							<input type="text" id="kode_perizinan" name="kode_perizinan" required readonly class="form-control" value="<?php echo strtoupper(random_string('alnum', 5)); ?>" />
						</div>

						<!-- Select2 Input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">Nama Santri</label>
							<select class="form-control selek2" required id="selek2" name="id_santri" style="width: 100%">
								<option value="">Pilih Santri</option>
								<?php foreach ($load_penempatan as $penempatan) : ?>
									<option value="<?php echo $penempatan->id_santri; ?>"><?php echo $penempatan->no_induk_santri .  " - " . $penempatan->nama_lengkap_santri . " - " . $penempatan->nama_wilayah ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<!-- Date input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">Tanggal Akhir</label>
							<input type="date" id="tanggal_akhir" required name="tanggal_akhir" class="form-control" />
						</div>

						<!-- Time input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">Jam Akhir</label>
							<input type="time" id="jam_akhir" required name="jam_akhir" class="form-control" max="17:00" value="17:00" />
						</div>

						<!-- Textarea input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example3">Keperluan</label>
							<textarea class="form-control" required id="keperluan" name="keperluan" rows="4"></textarea>
						</div>

						<hr>
						<div class="d-grid gap-2">
							<button class="btn btn-success" type="submit">Ajukan Izin</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Inisialisasi Select2 -->
	<!-- <script>
  $(document).ready(function() {
    // Inisialisasi Select2 saat modal ditampilkan
    $('#izinmodal').on('shown.bs.modal', function () {
      $('.select2').select2();
    });
  });
</script> -->


	<!-- modal izin santri -->


	<!-- modal tamu riyadhoh -->
	<div class="modal fade" id="riyadhoh" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Pendaftaran Santri Riyadhoh</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url('home/tambah_riyadhoh') ?>" method="post">
						<!-- Name input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example1">Nama Santri Riyadhoh</label>
							<input type="text" id="nama_santri_riyadhoh" name="nama_santri_riyadhoh" class="form-control" placeholder="Masukkan Nama Anda.." />
						</div>

						<!-- Email input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">Tempat Lahir</label>
							<input type="text" id="tempat_lahir_santri_riyadhoh" name="tempat_lahir_santri_riyadhoh" class="form-control" placeholder="Masukkan Tempat Lahir Anda..." />
						</div>
						<!-- Email input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">Tanggal Lahir</label>
							<input type="date" id="tanggal_lahir_santri_riyadhoh" name="tanggal_lahir_santri_riyadhoh" class="form-control" placeholder="Masukkan Tanggal Lahir Anda..." />
						</div>
						<!-- Email input -->
						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">Desa/Kelurahan</label>
							<input type="text" id="desa_santri_riyadhoh" name="desa_santri_riyadhoh" class="form-control" placeholder="Masukkan Desa..." />
						</div>

						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">Kecamatan</label>
							<input type="text" id="kecamatan_santri_riyadhoh" name="kecamatan_santri_riyadhoh" class="form-control" placeholder="Masukkan Kecamatan..." />
						</div>

						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">Kabupaten/Kota</label>
							<input type="text" id="kabupaten_santri_riyadhoh" name="kabupaten_santri_riyadhoh" class="form-control" placeholder="Masukkan Kabupaten/Kota...." />
						</div>

						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">Provinsi</label>
							<input type="text" id="provinsi_santri_riyadhoh" name="provinsi_santri_riyadhoh" class="form-control" placeholder="Masukkan Provinsi..." />
						</div>

						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">No. NIK</label>
							<input type="number" id="nik_santri_riyadhoh" name="nik_santri_riyadhoh" class="form-control" placeholder="Masukkan NIK Anda..." />
						</div>

						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">No. HP</label>
							<input type="number" id="no_hp_santri_riyadhoh" name="no_hp_santri_riyadhoh" class="form-control" placeholder="Masukkan No.HP Anda..." />
						</div>

						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">Nama Wali</label>
							<input type="text" id="wali_santri_riyadhoh" name="wali_santri_riyadhoh" class="form-control" placeholder="Masukkan Wali Anda" />
						</div>

						<div data-mdb-input-init class="form-outline mb-4">
							<label class="form-label" for="form4Example2">No.HP Wali</label>
							<input type="number" id="no_hp_wali_santri_riyadhoh" name="no_hp_wali_santri_riyadhoh" class="form-control" placeholder="Masukkan No HP Wali Anda" />
						</div>



						<hr>
						<div class="d-grid gap-2">
							<button class="btn btn-success" type="submit">Daftar Tamu Riyadhoh</button>

						</div>
					</form>
				</div>

			</div>
		</div>
	</div>



	<!-- modal konfirmasi izin -->

	<!-- Modal -->
	<div class="modal fade" id="licenseModal" tabindex="-1" aria-labelledby="licenseModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="licenseModalLabel">Konfirmasi Kode Lisensi</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" id="modalBodyContent">
					<!-- Isi modal akan diupdate melalui JavaScript -->
				</div>
				<hr>
				<!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
			</div>
		</div>
	</div>
	<!-- modal konfirmasi izin -->




	<!-- modal tamu riyadhoh -->
	<footer class="bg-success text-center text-white fixed-bottom">
		<!-- Grid container -->
		<div class="container p-4"></div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
			© <?php echo date('Y') ?> Copyright:
			<a class="text-white" href="https://mdbootstrap.com/">Self Service SIPP-TREN Al-Qodiri Jember</a>
		</div>
		<!-- Copyright -->
	</footer>
	<!-- Footer Baru -->
	<!-- Footer -->
	<!-- Scroll Top -->
	<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Preloader -->
	<div id="preloader"></div>

	<!-- Vendor JS Files -->
	<script src="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/php-email-form/validate.js"></script>
	<script src="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/aos/aos.js"></script>
	<script src="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
	<script src="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url('assets/kiosk_templates/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

	<!-- Main JS File -->
	<script src="<?php echo base_url('assets/kiosk_templates/') ?>assets/js/main.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> -->

	<!-- jam dan tanggal -->
	<script>
		function updateTime() {
			const options = {
				weekday: 'long',
				year: 'numeric',
				month: 'long',
				day: 'numeric',
				hour: '2-digit',
				minute: '2-digit',
				second: '2-digit',
				hour12: false
			};
			const now = new Date().toLocaleDateString('id-ID', options);
			document.querySelector('.time').innerText = now;
		}

		// Update time every second
		setInterval(updateTime, 1000);
		// Initial call to display time immediately
		updateTime();
	</script>


	<!-- jQuery (necessary for Select2) -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- Select2 JS -->
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<!-- Initialize Select2 -->
	<script>
		$(document).ready(function() {
			$('.selek2').select2({
				dropdownParent: '#izinmodal',
				placeholder: 'Pilih Santri',
				allowClear: true
			});
		});
	</script>



	<!-- select2 -->
	<!-- script modal konfirmasi izin -->




	<script>
		$(document).ready(function() {
			$('#licenseForm').on('submit', function(event) {
				event.preventDefault(); // Mencegah form submit default

				const kode_izin = $('#kode_izin').val();

				$.ajax({
					url: '<?= base_url('home/get_izin') ?>',
					type: 'POST',
					data: {
						kode_izin: kode_izin
					},
					dataType: 'json',
					success: function(response) {
						if (response) {
							const currentDateTime = new Date();
							const endDateTime = new Date(response.tanggal_akhir + ' ' + response.jam_akhir);

							let statusKeterlambatan;
							if (currentDateTime > endDateTime) {
								const timeDiff = currentDateTime - endDateTime;
								const daysLate = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
								statusKeterlambatan = `<span class="badge text-bg-danger">Terlambat ${daysLate} hari</span>`;
							} else {
								statusKeterlambatan = '<span class="badge text-bg-success">Tidak Terlambat</span>';
							}
							$('#modalBodyContent').html(`
                <table>
                  <tr>
                    <td>Kode Lisensi </td>
                    <td>: ${response.kode_perizinan}</td>
                  </tr>
                  <tr>
                    <td>NIS </td>
                    <td>: ${response.no_induk_santri}</td>
                  </tr>
                  <tr>
                    <td>Nama Santri </td>
                    <td>: ${response.nama_lengkap_santri}</td>
                  </tr>
                 
                  <tr>
                    <td>Wilayah </td>
                    <td>: ${response.nama_wilayah}</td>
                  </tr>
                  <tr>
                    <td>Tanggal Awal Perizinan dan Jam Awal Perizinan</td>
                    <td>: ${response.tanggal_mulai} /  ${response.jam_mulai}</td>
                  </tr>
                  <tr>
                    <td>Tanggal Akhir Perizinan dan Jam Akhir Perizinan</td>
                    <td>: ${response.tanggal_akhir} / ${response.jam_akhir}</td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td>: ${response.status}</td>
                  </tr>
                  <tr>
                    <td>Status Keterlambatan</td>
                    
                    <td>: ${statusKeterlambatan}</td>
                  </tr>
                  <tr>
                    <td>Keperluan</td>
                    <td>: ${response.keperluan}</td>
                  </tr>
                  
                </table>
                <hr>
                <div class="d-grid gap-2">
                  <a href="<?php echo base_url('home/izin_kembali/') ?>${response.kode_perizinan}" class="btn btn-success" role="button">Konfirmasi Kembali</a>
                  <button class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                </div>
                <!-- Tambahkan data lain yang ingin Anda tampilkan -->
              `);
							$('#licenseModal').modal('show');
						} else {
							$('#modalBodyContent').text('Data tidak ditemukan. ');

							$('#licenseModal').modal('show');
						}
					},
					error: function() {
						$('#modalBodyContent').text('Data error.');
						$('#licenseModal').modal('show');
					}
				});
			});
		});
	</script>
	<!-- script modal konfirmasi izin -->


</body>

</html>