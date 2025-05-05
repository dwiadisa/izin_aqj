<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Ubah Lembaga Pendidikan</h4>
						<hr>
						<div class="form-validation">
							<form class="form-valide" action="<?php echo base_url('data_lembaga_pendidikan/ubah_lembaga/' . $lembaga->id_lembaga) ?>" method="post" novalidate="novalidate">
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-username">Kode Lembaga<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="kode_lembaga" name="kode_lembaga" placeholder="Masukkan kode Lembaga" value="<?php echo $lembaga->singkatan_lembaga; ?>">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-email">Nama Lembaga Pendidikan<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" placeholder="Masukkan Nama Lembaga" value="<?php echo $lembaga->nama_lembaga; ?>">
									</div>
								</div>

								<div class="form-group row">
									<div class="col-lg-8 ml-auto">
										<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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