<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?php echo $title ?></h4>
						<hr>
						<div class="form-validation">
							<form class="form-valide" action="<?php echo base_url('data_rombel/tambah_rombel') ?>" method="post" novalidate="novalidate">


								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-skill">Tahun Ajaran<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<select class="form-control" id="tahun_ajaran" name="tahun_ajaran">
											<option value="">Pilih Tahun Ajaran</option>
											<?php foreach ($tahun as $th) : ?>
												<option value="<?php echo $th->id_tahun_ajaran ?>"><?php echo $th->nama_tahun_ajaran ?></option>
											<?php endforeach ?>

										</select>
										<?php echo form_error('tahun_ajaran', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-skill">Pilih Santri<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<select class="form-control select2-santri" id="pilih_santri" multiple="multiple" name="pilih_santri[]">
											<option value="">Pilih Santri</option>

										</select>
									</div>
								</div>





								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-skill">Lembaga Pendidikan<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<select class="form-control" id="lembaga" name="lembaga">
											<option value="">Pilih Lembaga</option>
											<?php foreach ($lembaga as $lg) : ?>
												<option value="<?php echo $lg->id_lembaga ?>"><?php echo $lg->nama_lembaga ?></option>
											<?php endforeach ?>

										</select>
										<?php echo form_error('lembaga', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-skill">Kelas<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<select class="form-control" id="kelas" name="kelas">
											<option value="">Pilih Kelas</option>

										</select>
										<?php echo form_error('kelas', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>





								<div class="form-group row">
									<div class="col-lg-8 ml-auto">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- #/ container -->
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- script untuk select 2 -->

<script>
	$(document).ready(function() {
		$('.select2-santri').select2({
				placeholder: "Pilih Santri", // Placeholder
				allowClear: true, // Untuk memungkinkan menghapus pilihan
				tags: true // Memungkinkan pengguna menambahkan pilihan baru
			}


		);
	});
</script>
<script type="text/javascript">
	$(document).ready(function() {
		// Event listener untuk dropdown tahun ajaran
		$('#tahun_ajaran').change(function() {
			var tahun_ajaran = $(this).val(); // Ambil nilai tahun_ajaran yang dipilih

			// Kosongkan dropdown santri
			$('#pilih_santri').empty();
			$('#pilih_santri').append('<option value="">Pilih Santri</option>'); // Tambahkan opsi default

			if (tahun_ajaran != '') {
				// Kirim permintaan AJAX untuk mendapatkan santri berdasarkan tahun ajaran
				$.ajax({
					url: "<?php echo base_url('data_rombel/lihat_santri_non_ta'); ?>", // URL untuk fungsi lihat_santri_non_ta
					method: "POST",
					data: {
						tahun_ajaran: tahun_ajaran
					}, // Kirim data tahun_ajaran
					dataType: 'json',
					success: function(response) {
						var html = '<option value="">Santri</option>';
						if (response.length > 0) {
							// Iterasi hasil response untuk menambah pilihan santri
							for (var i = 0; i < response.length; i++) {
								html += '<option value="' + response[i].id_santri + '">' + response[i].no_induk_santri + " - " + response[i].nama_lengkap_santri + '</option>';
							}
						} else {
							html += '<option value="">Tidak ada Santri tersedia</option>';
						}
						$('#pilih_santri').html(html); // Update dropdown santri
					},
					error: function(xhr, status, error) {
						// Menangani error jika AJAX gagal
						$('#pilih_santri').html('<option value="">Error loading Santri</option>');
						console.log("Error: " + error); // Menampilkan pesan error di console
					}
				});
			} else {
				$('#pilih_santri').html('<option value="">Pilih Santri</option>'); // Opsi default jika tidak ada tahun_ajaran yang dipilih
			}
		});
	});
</script>



<script type="text/javascript">
	$(document).ready(function() {
		// Event listener untuk dropdown lembaga
		$('#lembaga').change(function() {
			var lembagaId = $(this).val(); // Ambil nilai id_lembaga yang dipilih

			// Kosongkan dropdown kelas
			$('#kelas').empty();
			$('#kelas').append('<option value="">Pilih Kelas</option>'); // Tambahkan opsi default

			if (lembagaId != '') {
				// Kirim permintaan AJAX untuk mendapatkan kelas berdasarkan lembaga
				$.ajax({
					url: "<?php echo base_url('data_rombel/get_kelas_by_lembaga'); ?>", // URL untuk fungsi get_kelas_by_lembaga
					method: "POST",
					data: {
						lembaga: lembagaId
					}, // Kirim data id_lembaga
					dataType: 'json',
					success: function(response) {
						var html = '<option value="">Pilih Kelas</option>';
						if (response.length > 0) {
							for (var i = 0; i < response.length; i++) {
								html += '<option value="' + response[i].id_kelas + '">' + response[i].nama_kelas + '</option>';
							}
						} else {
							html += '<option value="">Tidak ada kelas tersedia</option>';
						}
						$('#kelas').html(html);
					},
					error: function() {
						$('#kelas').html('<option value="">Error loading kelas</option>');
						// console.log(error);
					}
				});
			} else {
				$('#kelas').html('<option value="">Pilih Kelas</option>');
			}
		});
	});
</script>


<!-- script untuk jquery chain -->
