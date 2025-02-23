<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Tambah Kelas</h4>
						<hr>
						<div class="form-validation">
							<form class="form-valide" action="<?php echo base_url('data_kelas/tambah_kelas') ?>" method="post" novalidate="novalidate">
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-username">Nama Kelas<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Masukkan Kelas">
										<?php echo form_error('nama_kelas', '<div class="text-danger">', '</div>'); ?>
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