<div class="content-body" style="min-height: 798px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Sebaran Rombel</h4>
						<hr>

						<!-- Form Pemilihan Tahun Ajaran -->
						<div class="form-validation">
							<form class="form-valide" action="<?php echo base_url('data_rombel'); ?>" method="get" novalidate="novalidate">
								<div class="form-group row">
									<label class="col-lg-4 col-form-label" for="tahun_ajaran">Pilih Tahun Ajaran<span class="text-danger">*</span></label>
									<div class="col-lg-6">
										<select class="form-control" id="tahun_ajaran" name="tahun_ajaran">
											<option value="">Pilih Tahun Ajaran</option>
											<?php foreach ($tahun_ajaran as $tahun) : ?>
												<option value="<?php echo $tahun->id_tahun_ajaran; ?>" <?php echo ($selected_tahun_ajaran == $tahun->id_tahun_ajaran) ? 'selected' : ''; ?>>
													<?php echo $tahun->nama_tahun_ajaran; ?>
												</option>
											<?php endforeach; ?>
										</select>
									</div>
									<button type="submit" class="btn btn-sm mb-1 btn-flat btn-success">
										<i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i> Cari
									</button>
								</div>
							</form>

						</div>
						<?php if (!empty($data_rombel)) : ?>
							<hr>

							<!-- Tabs Lembaga -->
							<div class="default-tab">
								<ul class="nav nav-tabs mb-3" role="tablist">

									<?php foreach ($data_rombel as $id_lembaga => $lembaga_data) : ?>
										<li class="nav-item">
											<a class="nav-link <?php echo $id_lembaga === array_key_first($data_rombel) ? 'active' : ''; ?>" data-toggle="tab" href="#lembaga<?php echo $id_lembaga; ?>">
												<?php echo $lembaga_data['nama_lembaga']; ?>
											</a>
										</li>
									<?php endforeach; ?>
								<?php else : ?>
									<!-- <li class="nav-item">
										<span class="nav-link text-muted">Tidak ada lembaga tersedia</span>
									</li> -->
								<?php endif; ?>
								</ul>

								<div class="tab-content">
									<?php if (!empty($data_rombel)) : ?>
										<?php foreach ($data_rombel as $id_lembaga => $lembaga_data) : ?>
											<div class="tab-pane fade <?php echo $id_lembaga === array_key_first($data_rombel) ? 'show active' : ''; ?>" id="lembaga<?php echo $id_lembaga; ?>" role="tabpanel">
												<div class="row align-items-center">
													<!-- List Kelas -->
													<div class="col-md-4 col-lg-3">
														<div class="nav flex-column nav-pills">
															<?php foreach ($lembaga_data['kelas'] as $id_kelas => $kelas) : ?>
																<a class="nav-link <?php echo $id_kelas === array_key_first($lembaga_data['kelas']) ? 'active show' : ''; ?>" data-toggle="pill" href="#kelas<?php echo $id_kelas; ?>">
																	<?php echo $kelas['nama_kelas']; ?>
																</a>
															<?php endforeach; ?>
														</div>
													</div>

													<!-- List Santri -->
													<div class="col-md-8 col-lg-9">
														<div class="tab-content">
															<?php foreach ($lembaga_data['kelas'] as $id_kelas => $kelas) : ?>
																<div class="tab-pane fade <?php echo $id_kelas === array_key_first($lembaga_data['kelas']) ? 'active show' : ''; ?>" id="kelas<?php echo $id_kelas; ?>">
																	<ul class="list-group">
																		<?php if (!empty($kelas['santri'])) : ?>
																			<?php foreach ($kelas['santri'] as $santri) : ?>
																				<li class="list-group-item">
																					<?php echo $santri['no_induk_santri'] . " - " . $santri['nama_lengkap_santri']; ?>

																					<button class="btn btn-danger btn-sm float-right ml-2 btn-delete" data-id="<?php echo $santri['id_santri']; ?>" data-name="<?php echo $santri['nama_lengkap_santri']; ?>">
																						Hapus
																					</button>
																				</li>
																			<?php endforeach; ?>
																		<?php else : ?>
																			<li class="list-group-item text-muted">Tidak ada santri</li>
																		<?php endif; ?>
																	</ul>
																</div>
															<?php endforeach; ?>
														</div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
									<?php else : ?>
										<div class="tab-pane fade show active" role="tabpanel">


											<div class="alert alert-danger" role="alert">
												Silakan memlih Tahun Ajaran
											</div>
										</div>
									<?php endif; ?>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
				<p>Apakah Anda yakin ingin menghapus santri <strong id="deleteName"></strong>?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<a href="#" id="confirmDelete" class="btn btn-danger">Hapus</a>
			</div>
		</div>
	</div>
</div>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		$('.btn-delete').click(function() {
			var id = $(this).data('id');
			var name = $(this).data('name');
			$('#deleteName').text(name);
			$('#confirmDelete').attr('href', '<?php echo site_url("data_rombel/hapus_santri/"); ?>' + id);
			$('#modalDelete').modal('show');
		});
	});
</script>