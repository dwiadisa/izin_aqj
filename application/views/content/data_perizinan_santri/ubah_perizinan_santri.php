<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h4>Ubah Perizinan Santri</h4>
						<hr>
						<div class="form-validation">
							<form class="form-valide" action="#" method="post" novalidate="novalidate">
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-username">Kode Perizinan <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="kode_perizinan" readonly name="kode_perizinan" placeholder="Masukkan kode perizinan.." value="<?php echo $perizinan->kode_perizinan; ?>">
										<?php echo form_error('kode_perizinan', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="id_santri">NIS / Nama Santri / Wilayah<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<select class="form-control select2" readonly id="id_santri" name="id_santri">
											<option value="">Silakan pilih</option>
											<?php foreach ($load_penempatan as $penempatan) : ?>
												<option value="<?php echo $penempatan->id_santri; ?>" <?php echo $penempatan->id_santri == $perizinan->id_santri ? 'selected' : ''; ?>><?php echo $penempatan->no_induk_santri .  " - " . $penempatan->nama_lengkap_santri . " - " . $penempatan->nama_wilayah ?></option>
											<?php endforeach; ?>
										</select>
										<?php echo form_error('id_santri', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<hr>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-currency">Tanggal Mulai <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?php echo $perizinan->tanggal_mulai; ?>">
										<?php echo form_error('tanggal_mulai', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-currency">Jam Mulai <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="time" class="form-control" id="jam_mulai" name="jam_mulai" value="<?php echo $perizinan->jam_mulai; ?>">
										<?php echo form_error('jam_mulai', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-website">Tanggal Akhir <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" value="<?php echo $perizinan->tanggal_akhir; ?>">
										<?php echo form_error('tanggal_akhir', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-website">Jam Akhir <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="time" class="form-control" id="jam_akhir" name="jam_akhir" value="<?php echo $perizinan->jam_akhir; ?>">
										<?php echo form_error('jam_akhir', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-website">No. HP Wali Santri<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<input type="number" class="form-control" id="no_wali" name="no_wali" value="<?php echo $perizinan->no_wali; ?>">
										<?php echo form_error('no_wali', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>

								<hr>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-skill">Status<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<select class="form-control" id="status" name="status">
											<option value="">Pilih Status</option>
											<option value="SUDAH KEMBALI" <?php echo $perizinan->status == 'SUDAH KEMBALI' ? 'selected' : ''; ?>>SUDAH KEMBALI</option>
											<option value="BELUM KEMBALI" <?php echo $perizinan->status == 'BELUM KEMBALI' ? 'selected' : ''; ?>>BELUM KEMBALI</option>
											<option value="TERLAMBAT KEMBALI" <?php echo $perizinan->status == 'TERLAMBAT KEMBALI' ? 'selected' : ''; ?>>TERLAMBAT</option>

										</select>
										<?php echo form_error('status', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-skill">Status Izin<span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<select class="form-control" id="status_izin" name="status_izin">
											<option value="">Pilih Status</option>
											<option value="SUDAH DIIZINKAN" <?php echo $perizinan->status_izin == 'SUDAH DIIZINKAN' ? 'selected' : ''; ?>>SUDAH DIIZINKAN</option>
											<option value="BELUM DIIZINKAN" <?php echo $perizinan->status_izin == 'BELUM DIIZINKAN' ? 'selected' : ''; ?>>BELUM DIIZINKAN</option>

										</select>
										<?php echo form_error('status_izin', '<div class="text-danger">', '</div>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="val-suggestions">Keperluan <span class="text-danger">*</span>
									</label>
									<div class="col-lg-6">
										<textarea class="form-control" id="keperluan" name="keperluan" rows="5" placeholder="Tulis Keperluan Perizinan"><?php echo $perizinan->keperluan; ?></textarea>
										<?php echo form_error('keperluan', '<div class="text-danger">', '</div>'); ?>
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
					</div. </div>
				</div>
			</div>
			<!-- #/ container -->
		</div>
	</div>
</div>
<!--          
<script>
    $(document).ready(function() {
        $('#id_santri').select2({
            placeholder: "Select a santri",
            allowClear: true
        });
    });
</script> -->
