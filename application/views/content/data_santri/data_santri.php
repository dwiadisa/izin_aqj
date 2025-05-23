<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Santri</h4>
						<hr>
						<!-- Nav tabs -->
						<form method="post" action="<?php echo base_url('Data_santri/update_status_batch'); ?>">
							<div class="row">
								<div class="col-md-12">
									<div class=" container row justify-content-center">
										<div class="col-md-6">
											<div class="form-group">
												<label for="status">Pilih Status Santri:</label>
												<select class="form-control" name="status" id="status">
													<option value="ALUMNI">ALUMNI</option>
													<option value="AKTIF">AKTIF</option>
													<option value="NONAKTIF">NONAKTIF</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<button type="submit" class="btn btn-primary mt-4" onclick="return confirm('Apakah Anda yakin ingin memperbarui status santri ini?');">Update Status</button>
										</div>
									</div>
								</div>
							</div>
							<div class="default-tab">
								<ul class="nav nav-tabs mb-3" role="tablist">
									<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#semua">Semua</a>
									</li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#aktif">Aktif</a>
									</li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#nonaktif">Nonaktif</a>
									</li>
									<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#alumni">Alumni</a>
									</li>

								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="semua" role="tabpanel">
										<div class="p-t-15">
											<div class="btn-group" role="group">
												<!-- <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Set Status Santri</button> -->
												<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
													<a class="dropdown-item" href="#">Dropdown link</a>
													<a class="dropdown-item" href="#">Dropdown link</a>
												</div>
											</div>
											<div class="table-responsive">
												<table class="table table-striped table-bordered zero-configuration">
													<thead>
														<tr>
															<th>Checkbox</th>
															<th>No.</th>
															<th>Foto</th>
															<th>Detail Santri</th>
															<th>Alamat Lengkap</th>
															<th>Orangtua</th>
															<th>No. HP</th>
															<th>Aksi</th>
														</tr>
													</thead>
													<tbody>
														<?php $no = 1; ?>
														<?php foreach ($data_santri as $santri) : ?>
															<tr>
																<td>
																	<input type="checkbox" id="cb<?php echo $santri->id_santri; ?>" name="id_santri[]" value="<?php echo $santri->id_santri; ?>">
																</td>
																<td><?php echo $no++ ?></td>
																<td> <img src="<?php echo empty($santri->foto) ? base_url('assets/images/user.png') : base_url($santri->foto); ?>" alt="Foto Santri" style="width: 100px; height: auto;"></td>
																<td>
																	No. Induk Santri: <?php echo $santri->no_induk_santri ?><br>
																	Nama: <?php echo $santri->nama_lengkap_santri ?><br>
																	Tgl Lahir: <?php echo $santri->tanggal_lahir ?><br>
																	Lembaga: <?php echo $santri->nama_lembaga ?> <br>
																	Status: <span class="badge badge-<?php echo ($santri->status_santri == 'AKTIF') ? 'success' : 'danger'; ?>"><?php echo $santri->status_santri; ?></span>
																</td>
																<td>
																	Dusun: <?php echo $santri->alamat_dusun ?><br>
																	Desa : <?php echo $santri->alamat_desa ?> <br>
																	Kecamatan: <?php echo $santri->alamat_kecamatan ?><br>
																	Kabupaten : <?php echo $santri->alamat_kabupaten ?> <br>
																	Provinsi: <?php echo $santri->alamat_provinsi ?>
																</td>
																<td>
																	Nama Ayah: <?php echo $santri->nama_ayah ?><br>
																	Pekerjaan Ayah: <?php echo $santri->pekerjaan_ayah ?><br>
																	Nama Ibu: <?php echo $santri->nama_ibu ?><br>

																</td>
																<td><?php echo $santri->no_hp ?></td>
																<td>
																	<div class="btn-group" role="group">
																		<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
																		<div class="dropdown-menu">
																			<a class="dropdown-item" href="<?php echo base_url('data_santri/ubah_santri/') . $santri->id_santri ?>">Ubah</a>
																			<a class="dropdown-item" href="<?php echo base_url('data_santri/print_santri/') . $santri->id_santri ?>">Cetak</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmDeleteModal<?php echo $santri->id_santri ?>">Hapus</a>
																		</div>
																	</div>
																</td>
															</tr>
															<!-- modal hapus  -->
															<div class="modal fade" id="confirmDeleteModal<?php echo $santri->id_santri ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel<?php echo $santri->id_santri ?>" aria-hidden="true">
																<div class="modal-dialog" role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="confirmDeleteModalLabel<?php echo $santri->id_santri ?>">Konfirmasi Hapus</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			Apakah Anda yakin ingin menghapus data santri ini?
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
																			<a id="confirmDeleteButton<?php echo $santri->id_santri ?>" class="btn btn-danger" href="<?php echo base_url('data_santri/hapus_santri/') . $santri->id_santri ?>">Hapus</a>
																		</div>
																	</div>
																</div>
															</div>
															<!-- modal hapus -->
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>

										</div>
									</div>
									<div class="tab-pane fade" id="aktif">
										<div class="p-t-15">
											<div class="table-responsive">
												<table class="table table-striped table-bordered zero-configuration">
													<thead>
														<tr>
															<th>Checkbox</th>
															<th>No.</th>
															<th>Foto</th>
															<th>Detail Santri</th>
															<th>Alamat Lengkap</th>
															<th>Orangtua</th>
															<th>No. HP</th>
															<th>Aksi</th>
														</tr>
													</thead>
													<tbody>
														<?php $no = 1; ?>
														<?php foreach ($santri_aktif as $santri) : ?>
															<tr>
																<td>
																	<input type="checkbox" id="cb<?php echo $santri->id_santri; ?>" name="id_santri[]" value="<?php echo $santri->id_santri; ?>">
																</td>
																<td><?php echo $no++ ?></td>
																<td> <img src="<?php echo empty($santri->foto) ? base_url('assets/images/user.png') : base_url($santri->foto); ?>" alt="Foto Santri" style="width: 100px; height: auto;"></td>
																<td>
																	No. Induk Santri: <?php echo $santri->no_induk_santri ?><br>
																	Nama: <?php echo $santri->nama_lengkap_santri ?><br>
																	Tgl Lahir: <?php echo $santri->tanggal_lahir ?><br>
																	Lembaga: <?php echo $santri->nama_lembaga ?> <br>
																	Status: <span class="badge badge-success"><?php echo $santri->status_santri; ?></span>
																</td>
																<td>
																	Dusun: <?php echo $santri->alamat_dusun ?><br>
																	Desa : <?php echo $santri->alamat_desa ?> <br>
																	Kecamatan: <?php echo $santri->alamat_kecamatan ?><br>
																	Kabupaten : <?php echo $santri->alamat_kabupaten ?> <br>
																	Provinsi: <?php echo $santri->alamat_provinsi ?>
																</td>
																<td>
																	Nama Ayah: <?php echo $santri->nama_ayah ?><br>
																	Pekerjaan Ayah: <?php echo $santri->pekerjaan_ayah ?><br>
																	Nama Ibu: <?php echo $santri->nama_ibu ?><br>
																</td>
																<td><?php echo $santri->no_hp ?></td>
																<td>
																	<div class="btn-group" role="group">
																		<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
																		<div class="dropdown-menu">
																			<a class="dropdown-item" href="<?php echo base_url('data_santri/ubah_santri/') . $santri->id_santri ?>">Ubah</a>
																			<a class="dropdown-item" href="<?php echo base_url('data_santri/print_santri/') . $santri->id_santri ?>">Cetak</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmDeleteModalSantriAktif<?php echo $santri->id_santri ?>">Hapus</a>
																		</div>
																	</div>
																</td>
															</tr>
															<!-- Modal Hapus -->
															<div class="modal fade" id="confirmDeleteModalSantriAktif<?php echo $santri->id_santri ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel<?php echo $santri->id_santri ?>" aria-hidden="true">
																<div class="modal-dialog" role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="confirmDeleteModalLabel<?php echo $santri->id_santri ?>">Konfirmasi Hapus</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			Apakah Anda yakin ingin menghapus data santri ini?
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
																			<a id="confirmDeleteButton<?php echo $santri->id_santri ?>" class="btn btn-danger" href="<?php echo base_url('data_santri/hapus_santri/') . $santri->id_santri ?>">Hapus</a>
																		</div>
																	</div>
																</div>
															</div>
															<!-- End Modal Hapus -->
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="nonaktif">
										<div class="p-t-15">
											<div class="table-responsive">
												<table class="table table-striped table-bordered zero-configuration">
													<thead>
														<tr>
															<th>Checkbox</th>
															<th>No.</th>
															<th>Foto</th>
															<th>Detail Santri</th>
															<th>Alamat Lengkap</th>
															<th>Orangtua</th>
															<th>No. HP</th>
															<th>Aksi</th>
														</tr>
													</thead>
													<tbody>
														<?php $no = 1; ?>
														<?php foreach ($santri_nonaktif as $santri) : ?>
															<tr>
																<td>
																	<input type="checkbox" id="cb<?php echo $santri->id_santri; ?>" name="id_santri[]" value="<?php echo $santri->id_santri; ?>">
																</td>
																<td><?php echo $no++ ?></td>
																<td>
																	<img src="<?php echo empty($santri->foto) ? base_url('assets/images/user.png') : base_url($santri->foto); ?>" alt="Foto Santri" style="width: 100px; height: auto;">
																</td>
																<td>
																	No. Induk Santri: <?php echo $santri->no_induk_santri ?><br>
																	Nama: <?php echo $santri->nama_lengkap_santri ?><br>
																	Tgl Lahir: <?php echo $santri->tanggal_lahir ?><br>
																	Lembaga: <?php echo $santri->nama_lembaga ?> <br>
																	Status: <span class="badge badge-danger"><?php echo $santri->status_santri; ?></span>
																</td>
																<td>
																	Dusun: <?php echo $santri->alamat_dusun ?><br>
																	Desa : <?php echo $santri->alamat_desa ?> <br>
																	Kecamatan: <?php echo $santri->alamat_kecamatan ?><br>
																	Kabupaten : <?php echo $santri->alamat_kabupaten ?> <br>
																	Provinsi: <?php echo $santri->alamat_provinsi ?>
																</td>
																<td>
																	Nama Ayah: <?php echo $santri->nama_ayah ?><br>
																	Pekerjaan Ayah: <?php echo $santri->pekerjaan_ayah ?><br>
																	Nama Ibu: <?php echo $santri->nama_ibu ?><br>
																</td>
																<td><?php echo $santri->no_hp ?></td>
																<td>
																	<div class="btn-group" role="group">
																		<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
																		<div class="dropdown-menu">
																			<a class="dropdown-item" href="<?php echo base_url('data_santri/ubah_santri/') . $santri->id_santri ?>">Ubah</a>
																			<a class="dropdown-item" href="<?php echo base_url('data_santri/print_santri/') . $santri->id_santri ?>">Cetak</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmDeleteModalSantriNonaktif<?php echo $santri->id_santri ?>">Hapus</a>
																		</div>
																	</div>
																</td>
															</tr>
															<!-- Modal Hapus -->
															<div class="modal fade" id="confirmDeleteModalSantriNonaktif<?php echo $santri->id_santri ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel<?php echo $santri->id_santri ?>" aria-hidden="true">
																<div class="modal-dialog" role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="confirmDeleteModalLabel<?php echo $santri->id_santri ?>">Konfirmasi Hapus</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			Apakah Anda yakin ingin menghapus data santri ini?
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
																			<a id="confirmDeleteButton<?php echo $santri->id_santri ?>" class="btn btn-danger" href="<?php echo base_url('data_santri/hapus_santri/') . $santri->id_santri ?>">Hapus</a>
																		</div>
																	</div>
																</div>
															</div>
															<!-- End Modal Hapus -->
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>

									<div class="tab-pane fade" id="alumni">
										<div class="p-t-15">
											<div class="table-responsive">
												<table class="table table-striped table-bordered zero-configuration">
													<thead>
														<tr>

															<th>Checkbox</th>
															<th>No.</th>
															<th>Foto</th>
															<th>Detail Santri</th>
															<th>Alamat Lengkap</th>
															<th>Orangtua</th>
															<th>No. HP</th>
															<th>Aksi</th>
														</tr>
													</thead>
													<tbody>
														<?php $no = 1; ?>
														<?php foreach ($santri_alumni as $santri) : ?>
															<tr>
																<td>
																	<input type="checkbox" id="cb<?php echo $santri->id_santri; ?>" name="id_santri[]" value="<?php echo $santri->id_santri; ?>">
																</td>
																<td><?php echo $no++ ?></td>
																<td> <img src="<?php echo empty($santri->foto) ? base_url('assets/images/user.png') : base_url($santri->foto); ?>" alt="Foto Santri" style="width: 100px; height: auto;"></td>
																<td>
																	No. Induk Santri: <?php echo $santri->no_induk_santri ?><br>
																	Nama: <?php echo $santri->nama_lengkap_santri ?><br>
																	Tgl Lahir: <?php echo $santri->tanggal_lahir ?><br>
																	Lembaga: <?php echo $santri->nama_lembaga ?> <br>
																	Status: <span class="badge badge-success"><?php echo $santri->status_santri; ?></span>
																</td>
																<td>
																	Dusun: <?php echo $santri->alamat_dusun ?><br>
																	Desa : <?php echo $santri->alamat_desa ?> <br>
																	Kecamatan: <?php echo $santri->alamat_kecamatan ?><br>
																	Kabupaten : <?php echo $santri->alamat_kabupaten ?> <br>
																	Provinsi: <?php echo $santri->alamat_provinsi ?>
																</td>
																<td>
																	Nama Ayah: <?php echo $santri->nama_ayah ?><br>
																	Pekerjaan Ayah: <?php echo $santri->pekerjaan_ayah ?><br>
																	Nama Ibu: <?php echo $santri->nama_ibu ?><br>
																</td>
																<td><?php echo $santri->no_hp ?></td>
																<td>
																	<div class="btn-group" role="group">
																		<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
																		<div class="dropdown-menu">
																			<a class="dropdown-item" href="<?php echo base_url('data_santri/ubah_santri/') . $santri->id_santri ?>">Ubah</a>
																			<a class="dropdown-item" href="<?php echo base_url('data_santri/print_santri/') . $santri->id_santri ?>">Cetak</a>
																			<a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmDeleteModalSantriAktif<?php echo $santri->id_santri ?>">Hapus</a>
																		</div>
																	</div>
																</td>
															</tr>
															<!-- Modal Hapus -->
															<div class="modal fade" id="confirmDeleteModalSantriAktif<?php echo $santri->id_santri ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel<?php echo $santri->id_santri ?>" aria-hidden="true">
																<div class="modal-dialog" role="document">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h5 class="modal-title" id="confirmDeleteModalLabel<?php echo $santri->id_santri ?>">Konfirmasi Hapus</h5>
																			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																				<span aria-hidden="true">&times;</span>
																			</button>
																		</div>
																		<div class="modal-body">
																			Apakah Anda yakin ingin menghapus data santri ini?
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
																			<a id="confirmDeleteButton<?php echo $santri->id_santri ?>" class="btn btn-danger" href="<?php echo base_url('data_santri/hapus_santri/') . $santri->id_santri ?>">Hapus</a>
																		</div>
																	</div>
																</div>
															</div>
															<!-- End Modal Hapus -->
														<?php endforeach; ?>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Selection -->
</div>
</form>