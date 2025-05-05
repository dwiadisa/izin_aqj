<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Ubah Data Wilayah/Rayon</h4>
						<hr>
						<div class="form-validation">
							<form class="form-valide" action="<?php echo base_url('data_wilayah/update_wilayah') ?>" method="post" novalidate="novalidate">
								<?php foreach ($wilayah as $wy) : ?>
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-username">Kode Wilayah<span class="text-danger">*</span>
										</label>
										<div class="col-lg-6">
											<input type="hidden" class="form-control" id="id_wilayah" name="id_wilayah" placeholder="Masukkan kode wilayah" value="<?php echo $wy->id_wilayah ?>">
											<input type="text" class="form-control" id="kode_wilayah" name="kode_wilayah" placeholder="Masukkan kode wilayah" value="<?php echo $wy->singkatan_wilayah ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-lg-4 col-form-label" for="val-email">Nama Wilayah<span class="text-danger">*</span>
										</label>
										<div class="col-lg-6">
											<input type="text" class="form-control" id="nama_wilayah" name="nama_wilayah" placeholder="Masukkan Nama Wilayah" value="<?php echo $wy->nama_wilayah ?>">
										</div>
									</div>

								<?php endforeach; ?>
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