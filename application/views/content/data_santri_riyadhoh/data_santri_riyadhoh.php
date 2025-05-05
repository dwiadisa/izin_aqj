<div class="content-body">
	<div class="row page-titles mx-0">
		<div class="col p-md-0"></div>
	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Santri Riyadhoh</h4>
						<hr>
						<div class="table-responsive">
							<table class="table table-striped table-bordered zero-configuration">
								<thead>
									<tr>
										<th>No</th>
										<th>Detail Santri Riyadhoh</th>
										<th>Alamat Lengkap</th>
										<th>Detail Wali</th>
										<th>Tanggal Pendaftaran & Tenggat / Tahun Pendaftaran</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($load_santri_riyadhoh as $sr) : ?>
										<tr>
											<td><?php echo $no++; ?></td>
											<td>Nama: <?php echo $sr->nama_santri_riyadhoh ?> <br>
												Tempat/Tanggal Lahir: <?php echo $sr->tempat_lahir ?> / <?php echo $sr->tanggal_lahir ?> <br>
												NIK: <?php echo $sr->no_nik ?> <br>
												No HP: <?php echo $sr->no_hp ?>
											</td>
											<td>
												Desa: <?php echo $sr->alamat_desa ?> <br>
												Kecamatan: <?php echo $sr->alamat_kecamatan ?> <br>
												Kabupaten: <?php echo $sr->alamat_kabupaten ?> <br>
												Provinsi: <?php echo $sr->alamat_provinsi ?>
											</td>
											<td>Nama Wali: <?php echo $sr->nama_wali ?> <br>
												No HP: <?php echo $sr->no_hp_wali ?>
											</td>
											<td>
												Tanggal Pendaftaran: <?php echo $sr->tanggal_daftar ?> <br>
												Tanggal Tenggat: <?php echo $sr->tanggal_tenggat ?> <br>
												Tahun Pendaftaran: <?php echo $sr->tahun_daftar ?> <br>
												<?php
												$tanggal_daftar = new DateTime($sr->tanggal_daftar);
												$tanggal_tenggat = new DateTime($sr->tanggal_tenggat);
												if ($tanggal_daftar > $tanggal_tenggat) {
													$interval = $tanggal_daftar->diff($tanggal_tenggat);
													echo '<span class="badge badge-danger">Tanggal Riyadhoh telah terlewati ' . $interval->days . ' hari</span>';
												}
												?>
											</td>
											<td>
												<div class="btn-group" role="group">
													<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="<?php echo base_url('data_santri_riyadhoh/ubah_santri_riyadhoh/' . $sr->id_santri_riyadhoh) ?>">Ubah/Detail</a>
														<a class="dropdown-item" href="<?php echo base_url('data_santri_riyadhoh/print_santri_riyadhoh/' . $sr->id_santri_riyadhoh) ?>">Print</a>
														<button class="dropdown-item btn-delete" data-id="<?php echo $sr->id_santri_riyadhoh ?>" data-name="<?php echo $sr->nama_santri_riyadhoh ?>">Hapus</button>
													</div>
												</div>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- #/ container -->
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalDeleteLabel">Konfirmasi Hapus</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Apakah Anda yakin ingin menghapus <strong id="deleteName"></strong>?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<a href="#" id="confirmDelete" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- JS Modal -->
<script>
	$(document).ready(function() {
		$('.btn-delete').click(function() {
			var id = $(this).data('id');
			var name = $(this).data('name');
			$('#deleteName').text(name);
			$('#confirmDelete').attr('href', '<?php echo base_url("data_santri_riyadhoh/hapus_santri_riyadhoh/"); ?>' + id);
			$('#modalDelete').modal('show');
		});
	});
</script>