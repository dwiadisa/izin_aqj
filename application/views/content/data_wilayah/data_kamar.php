<div class="content-body" style="min-height: 798px;">
	<div class="row page-titles mx-0"></div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Kamar Wilayah</h4>
						<hr>
						<!-- Nav tabs -->
						<div class="default-tab">
							<ul class="nav nav-tabs mb-3" role="tablist">
								<?php $first = true; ?>
								<?php foreach ($wilayah as $wl) : ?>
									<li class="nav-item">
										<a class="nav-link <?php if ($first) echo 'active'; ?>" data-toggle="tab" href="#<?php echo $wl->singkatan_wilayah ?>">
											<?php echo $wl->nama_wilayah ?>
										</a>
									</li>
									<?php $first = false; ?>
								<?php endforeach; ?>
							</ul>
							<div class="tab-content">
								<?php $first = true; ?>
								<?php foreach ($wilayah as $wl) : ?>
									<div class="tab-pane fade <?php if ($first) echo 'show active'; ?>" id="<?php echo $wl->singkatan_wilayah ?>" role="tabpanel">
										<div class="p-t-15">
											<div class="table-responsive">
												<div class="dataTables_wrapper container-fluid dt-bootstrap4">
													<div class="row">
														<div class="col-sm-12">
															<table class="table table-striped table-bordered zero-configuration">
																<thead>
																	<tr>
																		<th>No.</th>
																		<th>Nama Kamar</th>
																		<th>Nama Wilayah</th>
																		<th>Aksi</th>
																	</tr>
																</thead>
																<?php
																$this->load->model('data_wilayah_model');
																$query_kamar = $this->data_wilayah_model->lihat_kamar_perwilayah($wl->id_wilayah);
																?>
																<tbody>
																	<?php $no = 1; ?>
																	<?php foreach ($query_kamar as $km) : ?>
																		<tr>
																			<td><?php echo $no++ ?></td>
																			<td><?php echo $km->nama_kamar ?></td>
																			<td><?php echo $km->nama_wilayah . " - " . $wl->singkatan_wilayah ?></td>
																			<td>
																				<div class="btn-group" role="group">
																					<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
																					<div class="dropdown-menu">
																						<a class="dropdown-item" href="<?php echo base_url('data_wilayah/ubah_kamar/') . $km->id_kamar ?>">Ubah</a>
																						<button class="dropdown-item btn-delete" data-id="<?php echo $km->id_kamar ?>" data-name="<?php echo $km->nama_kamar ?>">Hapus</button>
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
									<?php $first = false; ?>
								<?php endforeach; ?>
							</div>
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
				<p>Apakah Anda yakin ingin menghapus kamar <strong id="deleteName"></strong>?</p>
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
			$('#confirmDelete').attr('href', '<?php echo base_url("data_wilayah/hapus_kamar/"); ?>' + id);
			$('#modalDelete').modal('show');
		});
	});
</script>