<div class="content-body">
	<div class="row page-titles mx-0"></div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title"><?php echo $title ?></h4>
						<hr>
						<div class="table-responsive">
							<table class="table table-striped table-bordered zero-configuration">
								<thead>
									<tr>
										<th>No.</th>
										<th>Kode Lembaga</th>
										<th>Nama Lembaga</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($lembaga as $l) : ?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $l->singkatan_lembaga ?></td>
											<td><?php echo $l->nama_lembaga ?></td>
											<td>
												<div class="btn-group" role="group">
													<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="<?php echo base_url('data_lembaga_pendidikan/ubah_lembaga/') . $l->id_lembaga ?>">Ubah</a>
														<button class="dropdown-item btn-delete" data-id="<?php echo $l->id_lembaga ?>" data-name="<?php echo $l->nama_lembaga ?>">Hapus</button>
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
			$('#confirmDelete').attr('href', '<?php echo base_url("data_lembaga_pendidikan/hapus_lembaga/"); ?>' + id);
			$('#modalDelete').modal('show');
		});
	});
</script>