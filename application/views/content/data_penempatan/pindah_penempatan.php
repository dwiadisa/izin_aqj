<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="text-center">Pindah Penempatan Santri</h4>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<p class="font-weight-bold">Penempatan Awal</p>
								<div class="form-validation">
									<form class="form-valide" action="#" method="post" novalidate="novalidate">
										<div class="form-group row">
											<label class="col-lg-4 col-form-label" for="val-username"> No Induk / Nama Lengkap Santri <span class="text-danger">*</span>
											</label>
											<div class="col-lg-6">
												<input type="text" class="form-control" disabled id="nama_lengkap_santri" name="nama_lengkap_santri" placeholder="Enter a username.." value="<?php echo $load_penempatan->no_induk_santri; ?> / <?php echo $load_penempatan->nama_lengkap_santri; ?>">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-lg-4 col-form-label" for="val-email">Wilayah / Kamar <span class="text-danger">*</span>
											</label>
											<div class="col-lg-6">
												<input type="text" class="form-control" disabled id="val-email" name="val-email" placeholder="Your valid email.." value="<?php echo $load_penempatan->nama_wilayah; ?> / <?php echo $load_penempatan->nama_kamar; ?>">
											</div>
										</div>

									</form>
								</div>
							</div>
							<div class="col-md-6">
								<p class="font-weight-bold">Penempatan Tujuan</p>
								<div class="form-validation">
									<form class="form-valide" action="<?php echo base_url(); ?>/Data_penempatan_santri/pindah_penempatan/<?php echo $load_penempatan->id_penghuni; ?>" method="post" novalidate="novalidate">

										<div class="form-group row">
											<label class="col-lg-4 col-form-label" for="val-skill">Pilih Wilayah Baru <span class="text-danger">*</span>
											</label>
											<div class="col-lg-6">
												<select class="form-control" id="pilih_wilayah" name="pilih_wilayah">
													<option value="">Pilih Wilayah Baru</option>
													<?php foreach ($load_wilayah as $wilayah) { ?>
														<option value="<?php echo $wilayah->id_wilayah; ?>"><?php echo $wilayah->nama_wilayah; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<label class="col-lg-4 col-form-label" for="val-skill">Pilih Kamar Baru <span class="text-danger">*</span>
											</label>
											<div class="col-lg-6">
												<select class="form-control" id="pilih_kamar" name="pilih_kamar">
													<option value="">Pilih Kamar Baru</option>
												</select>
											</div>
										</div>

										<div class="form-group row">
											<div class="col-lg-8 ml-auto">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										</div>
									</form>
								</div>

								<!-- Modal -->
								<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pemindahan</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Apakah Anda yakin ingin memindahkan penempatan?
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
												<button type="button" class="btn btn-primary" onclick="document.querySelector('.form-valide').submit();">Ya, Pindahkan</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
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