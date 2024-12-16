<div class="content-body" style="min-height: 798px;">

	<div class="row page-titles mx-0">
		<div class="col p-md-0">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
			</ol>
		</div>
	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4>Tambah Data Kamar</h4>
						<hr>
						<div class="form-validation">
							<form class="form-valide" action="<?php echo base_url('data_wilayah/tambah_kamar') ?>" method="post" novalidate="novalidate">
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-skill">Pilih Wilayah <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<select class="form-control" id="nama_wilayah" name="nama_wilayah">
											<option value="">Pilih Wilayah</option>
											<?php foreach ($wilayah as $wl) : ?>
												<option value="<?php echo $wl->id_wilayah ?>"><?php echo $wl->nama_wilayah ?></option>
											<?php endforeach; ?>

										</select>
										<?php echo form_error('nama_wilayah', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-username">Nama Kamar <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="nama_kamar" name="nama_kamar" placeholder="Enter a username..">
										<?php echo form_error('nama_kamar', '<div class="text-danger">', '</div>'); ?>
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