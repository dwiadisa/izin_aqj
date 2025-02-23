<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4>Tambah Data Santri Riyadhoh</h4>
						<hr>
						<div class="form-validation">
							<form class="form-valide" action="#" method="post" novalidate="novalidate">
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-username">Nama Santri Riyadhoh <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="nama_santri_riyadhoh" name="nama_santri_riyadhoh" placeholder="Masukkan Nama Santri Riyadhoh..">
										<?php echo form_error('nama_santri_riyadhoh', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-email">Tempat Lahir<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir..">
										<?php echo form_error('tempat_lahir', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-password">Tanggal Lahir<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Choose a safe one..">
										<?php echo form_error('tanggal_lahir', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-confirm-password">Desa / Kelurahan<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="alamat_desa" name="alamat_desa" placeholder="Masukkan Desa/Kelurahan..">
										<?php echo form_error('alamat_desa', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-confirm-password">Kecamatan<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="alamat_kecamatan" name="alamat_kecamatan" placeholder="Masukkan Kecamatan..">
										<?php echo form_error('alamat_kecamatan', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-confirm-password">Kabupaten/Kota<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="alamat_kabupaten" name="alamat_kabupaten" placeholder="Masukkan Kabupaten/Kota..">
										<?php echo form_error('alamat_kabupaten', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-confirm-password">Provinsi<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="alamat_provinsi" name="alamat_provinsi" placeholder="Masukkan Provinsi..">
										<?php echo form_error('alamat_provinsi', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>


								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-currency">No. NIK<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="no_nik" name="no_nik" placeholder="Masukkan No. NIK..">
										<?php echo form_error('no_nik', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-website">No.HP <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan No.HP..">
										<?php echo form_error('no_hp', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-phoneus">Nama Wali<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="nama_wali" name="nama_wali" placeholder="Masukkan Nama Wali..">
										<?php echo form_error('nama_wali', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-digits">No. HP Wali <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="no_hp_wali" name="no_hp_wali" placeholder="Masukkan No. HP Wali..">
										<?php echo form_error('no_hp_wali', '<div class="text-danger">', '</div>'); ?>
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