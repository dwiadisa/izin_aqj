<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4>Kiosk Setting</h4>
						<hr>
						<div class="form-validation">
							<form class="form-valide" action="<?php echo base_url('kiosk_setting/ubah_setting') ?>" method="post" novalidate="novalidate">

								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-skill">Pilih Aktivasi Sistem Kiosk<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<select class="form-control" id="status" name="status">
											<?php if ($setting->status == 'AKTIF') : ?>
												<option value="AKTIF" selected>AKTIF</option>
												<option value="NONAKTIF">NONAKTIF</option>
											<?php else : ?>
												<option value="AKTIF">AKTIF</option>
												<option value="NONAKTIF" selected>NONAKTIF</option>
											<?php endif; ?>

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
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- #/ container -->
</div>