<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4>Ekspor Data Santri Lengkap</h4>
						<hr>
						<p>Data Lengkap Santri</p>
						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="id_santri">Pilih Santri<span class="text-danger">*</span>
							</label>
							<div class="col-lg-6 col-md-8 col-sm-12">

								<form class="form-valide" action="<?php echo base_url('ekspor_data/ekspor_persantri_pdf') ?>" method="post" novalidate="novalidate">
									<select class="form-control select2" id="id_santri" name="id_santri">
										<option value="">Please select</option>
										<?php foreach ($data_santri as $santri) : ?>
											<option value="<?php echo $santri->id_santri; ?>" <?php echo ($this->session->userdata('id_santri') == $santri->id_santri) ? 'selected' : ''; ?>><?php echo $santri->no_induk_santri .  " - " . $santri->nama_lengkap_santri ?></option>
										<?php endforeach; ?>
									</select>
									<?php echo form_error('id_santri', '<div class="text-danger">', '</div>'); ?>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-12">
								<button type="submit" class="btn btn-sm mb-1 btn-flat btn-success"><i class="fa-solid fa-download"></i> Unduh Data</button>
							</div>
							</form>


						</div>
						<hr>
						<p>List Santri Pertahun Angkatan</p>

						<form class="form-valide" action="<?php echo base_url('ekspor_data/ekspor_pertahun') ?>" method="post" novalidate="novalidate">

							<div class="form-group row">
								<label class="col-lg-4 col-form-label" for="tahun">Pilih Tahun Angkatan<span class="text-danger">*</span>
								</label>
								<div class="col-lg-6">
									<select class="form-control" id="tahun" name="tahun">
										<option value="">Pilih Tahun</option>
										<?php foreach ($tahun_angkatan as $ta) : ?>

											<option value="<?php echo $ta->tahun_masuk ?>"><?php echo $ta->tahun_masuk ?></option>
										<?php endforeach ?>

									</select>
								</div>
								<div class="col-lg-2 col-md-4 col-sm-12">
									<button type="submit" class="btn btn-sm mb-1 btn-flat btn-success"><i class="fa-solid fa-download"></i> Ekspor Excel</button>
								</div>
						</form>
					</div>
					<hr>
					<p>Per-wilayah/Kamar</p>

					<form class="form-valide" action="<?php echo base_url('Ekspor_data/ekspor_perwilayah') ?>" method="post" novalidate="novalidate">



						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-skill">Pilih Wilayah<span class="text-danger">*</span>
							</label>
							<div class="col-lg-6">
								<select class="form-control" id="pilih_wilayah" name="pilih_wilayah">
									<option value="">Pilih Wilayah</option>
									<?php foreach ($load_wilayah as $wilayah) : ?>
										<option value="<?php echo $wilayah->id_wilayah ?>"><?php echo $wilayah->singkatan_wilayah . " - " . $wilayah->nama_wilayah ?></option>
									<?php endforeach; ?>

								</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-lg-4 col-form-label" for="val-skill">Pilih Kamar<span class="text-danger">*</span>
							</label>
							<div class="col-lg-6">
								<select class="form-control" id="pilih_kamar" name="pilih_kamar">
									<option value="">Please select</option>

								</select>
							</div>
						</div>

						<div class="form-group row">
							<div class="col-lg-8 ml-auto">
								<button type="submit" class="btn btn-sm mb-1 btn-flat btn-success"><i class="fa-solid fa-download"></i> Ekspor Excel</button>
							</div>
						</div>
					</form>







				</div>
			</div>
		</div>
	</div>
</div>
<!-- #/ container -->
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#pilih_wilayah').change(function() {
			var id_wilayah = $(this).val();
			if (id_wilayah != '') {
				$.ajax({
					url: "<?php echo base_url(); ?>index.php/Data_penempatan_santri/get_kamar",
					method: "POST",
					data: {
						id: id_wilayah
					},
					dataType: 'json',
					success: function(data) {
						var html = '<option value="">Pilih Kamar</option>';
						if (data.length > 0) {
							for (var i = 0; i < data.length; i++) {
								html += '<option value="' + data[i].id_kamar + '">' + data[i].nama_kamar + '</option>';
							}
						} else {
							html += '<option value="">Tidak ada kamar tersedia</option>';
						}
						$('#pilih_kamar').html(html);
					},
					error: function() {
						$('#pilih_kamar').html('<option value="">Error loading kamar</option>');
					}
				});
			} else {
				$('#pilih_kamar').html('<option value="">Pilih Kamar</option>');
			}
		});
	});
</script>
