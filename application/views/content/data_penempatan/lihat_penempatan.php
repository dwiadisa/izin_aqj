<div class="content-body" style="min-height: 798px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Penempatan Santri</h4>
						<hr>
						<!-- Tabs Wilayah -->
						<div class="default-tab">
							<ul class="nav nav-tabs mb-3" role="tablist">
								<?php foreach ($data_penempatan as $id_wilayah => $wilayah) : ?>
									<li class="nav-item">
										<a class="nav-link <?php echo $id_wilayah === array_key_first($data_penempatan) ? 'active' : ''; ?>" data-toggle="tab" href="#wilayah<?php echo $id_wilayah; ?>">
											<?php echo $wilayah['nama_wilayah']; ?>
										</a>
									</li>
								<?php endforeach; ?>
							</ul>

							<div class="tab-content">
								<?php foreach ($data_penempatan as $id_wilayah => $wilayah) : ?>
									<div class="tab-pane fade <?php echo $id_wilayah === array_key_first($data_penempatan) ? 'show active' : ''; ?>" id="wilayah<?php echo $id_wilayah; ?>" role="tabpanel">
										<div class="row align-items-center">
											<!-- List Kamar -->
											<div class="col-md-4 col-lg-3">
												<div class="nav flex-column nav-pills">
													<?php foreach ($wilayah['kamar'] as $id_kamar => $kamar) : ?>
														<a class="nav-link <?php echo $id_kamar === array_key_first($wilayah['kamar']) ? 'active show' : ''; ?>" data-toggle="pill" href="#kamar<?php echo $id_kamar; ?>">
															<?php echo $kamar['nama_kamar']; ?>
														</a>
													<?php endforeach; ?>
												</div>
											</div>

											<!-- List Penghuni -->
											<div class="col-md-8 col-lg-9">
												<div class="tab-content">
													<?php foreach ($wilayah['kamar'] as $id_kamar => $kamar) : ?>
														<div class="tab-pane fade <?php echo $id_kamar === array_key_first($wilayah['kamar']) ? 'active show' : ''; ?>" id="kamar<?php echo $id_kamar; ?>">
															<ul class="list-group">
																<?php if (!empty($kamar['penghuni'])) : ?>
																	<?php foreach ($kamar['penghuni'] as $penghuni) : ?>
																		<li class="list-group-item">
																			<?php echo $penghuni['no_induk_santri'] . " - " . $penghuni['nama_lengkap_santri']; ?>
																			<a href="<?php echo site_url('data_penempatan_santri/pindah_penempatan/' . $penghuni['id_penghuni']); ?>" class="btn btn-primary btn-sm float-right ml-2">
																				Pindah
																			</a>
																			<button class="btn btn-danger btn-sm float-right ml-2 btn-delete" data-id="<?php echo $penghuni['id_penghuni']; ?>" data-name="<?php echo $penghuni['nama_lengkap_santri']; ?>">
																				Hapus
																			</button>
																		</li>
																	<?php endforeach; ?>
																<?php else : ?>
																	<li class="list-group-item text-muted">Tidak ada penghuni</li>
																<?php endif; ?>
															</ul>
														</div>
													<?php endforeach; ?>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
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
				<p>Apakah Anda yakin ingin menghapus penempatan untuk <strong id="deleteName"></strong>?</p>
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
			$('#confirmDelete').attr('href', '<?php echo site_url("data_penempatan_santri/hapus_penempatan/"); ?>' + id);
			$('#modalDelete').modal('show');
		});
	});
</script>