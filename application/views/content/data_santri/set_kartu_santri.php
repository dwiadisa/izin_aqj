<div class="content-body">
	<div class="row page-titles mx-0"></div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?php echo $title ?></h4>
						<hr>

						<div class="alert alert-success" role="alert">
							<p>Berikut ini digunakan untuk mengunggah template kartu identitas santri.</p>
							<p>Untuk mengunduh layout untuk patokan desain kartu silakan klik
								<a href="<?php echo base_url('assets/images/contoh_template_kartu.jpg') ?>" span class="font-weight-bold">Disini</a>
							</p>
						</div>
						<div class="row">
							<div class="col-12">

								<div class="row">
									<div class="col-md-6 col-lg-3">
										<div class="card">
											<img class="img-fluid" src="<?php echo base_url('assets/kts_template/') . $kartu_depan->image ?>" alt="">
											<div class="card-body">
												<h5 class="card-title">Bagian Depan Kartu</h5>
												<p class="card-text">Bagian ini digunakan untuk menampilkan informasi dasar santri.</p>
											</div>
											<div class="card-footer">
												<?php echo form_open_multipart('data_santri/upload_kartu_depan/1', ['onsubmit' => 'return confirmUpload();']) ?>
												<input type="file" name="upload_kartu_depan" id="upload_kartu_depan">
												<button type="submit" class="btn btn-success upload-btn mt-2">Upload</button>
												<?php echo form_close() ?>
											</div>
										</div>
									</div>
									<!-- End Col -->
									<div class="col-md-6 col-lg-3">
										<div class="card">
											<img class="img-fluid" src="<?php echo base_url('assets/kts_template/') . $kartu_belakang->image ?>" alt="">
											<div class="card-body">
												<h5 class="card-title">Bagian Belakang Kartu</h5>
												<p class="card-text">Bagian ini digunakan untuk menampilkan visi misi dll</p>
											</div>
											<div class="card-footer">
												<?php echo form_open_multipart('data_santri/upload_kartu_belakang/2', ['onsubmit' => 'return confirmUpload();']) ?>
												<input type="file" name="upload_kartu_belakang" id="upload_kartu_belakang">
												<button type="submit" class="btn btn-success upload-btn mt-2">Upload</button>
												<?php echo form_close() ?>
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



<script>
	function confirmUpload() {
		return confirm('Apakah Anda yakin ingin mengunggah file ini?');
	}
</script>