<div class="content-body" style="min-height: 1110px;">

	<div class="row page-titles mx-0">

	</div>
	<!-- row -->

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Data Perizinan Santri</h4>
						<hr>
						<!-- Nav tabs -->
						<div class="default-tab">
							<ul class="nav nav-tabs mb-3" role="tablist">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home">Semua Perizinan</a>
								</li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile">Sudah Kembali</a>
								</li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#contact">Belum Kembali</a>
								</li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#message">Terlambat</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="home" role="tabpanel">
									<div class="p-t-15">
										<div class="table-responsive">
											<table class="table table-striped table-bordered zero-configuration">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode Izin</th>
														<th>Detail Santri</th>
														<th>Tanggal & Jam Mulai - Akhir <br>
															Tanggal & Jam Masuk Pondok (Check In Kiosk)
														</th>
														<th>Status</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php if (!empty($load_perizinan_semua)) : ?>
														<?php $no = 1;
														foreach ($load_perizinan_semua as $izin) : ?>
															<tr>
																<td><?= $no++ ?></td>
																<td><strong><?= $izin->kode_perizinan ?></strong></td>
																<<<<<<< HEAD
																	<td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?> <br>
																	No. HP Wali Santri : <?= $izin->no_wali ?>

																	</td>
																	=======
																	<td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?></td>
																	>>>>>>> c828bd154037bc276d83a44c67e059eff275fbd0
																	<td><?= $izin->tanggal_mulai ?> | <?= $izin->jam_mulai ?> s/d <?= $izin->tanggal_akhir ?> | <?= $izin->jam_akhir ?>
																		<?php
																		$current_time = date('Y-m-d H:i:s');
																		$end_time = $izin->tanggal_akhir . ' ' . $izin->jam_akhir;
																		if ($izin->status === "SUDAH KEMBALI") {
																			echo "<span class='badge badge-success'>Perizinan sudah selesai</span>";
																		} elseif ($izin->status === "BELUM KEMBALI") {
																			if (strtotime($current_time) > strtotime($end_time)) {
																				$diff = strtotime($current_time) - strtotime($end_time);
																				$days_late = floor($diff / (60 * 60 * 24));
																				echo "<span class='badge badge-danger'>Terlambat $days_late hari</span>";
																			} else {
																				$diff = strtotime($end_time) - strtotime($current_time);
																				$days_remaining = floor($diff / (60 * 60 * 24));
																				echo "<span class='badge badge-success'>Sisa $days_remaining hari</span>";
																			}
																		}
																		echo "<div style='margin-top: 10px;'><strong>Check-in:</strong> " . $izin->tanggal_checkin . " |  " . $izin->jam_checkin . "</div>";
																		?></td>
																	<td><?= $izin->status ?> <br>
																		<?php if ($izin->status_izin == 'BELUM DIIZINKAN') : ?>
																			<span class='badge badge-danger'>BELUM DIIZINKAN</span>
																		<?php elseif ($izin->status_izin == 'SUDAH DIIZINKAN') : ?>
																			<span class='badge badge-success'>SUDAH DIIZINKAN</span>
																		<?php endif; ?>
																	</td>
																	<td>
																		<div class="btn-group" role="group">
																			<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
																			<div class="dropdown-menu">
																				<a class="dropdown-item" href="<?= base_url('data_perizinan_santri/ubah_perizinan/' . $izin->id_izin) ?>">Detail/Ubah</a>
																				<?php if ($izin->status_izin === "BELUM DIIZINKAN") : ?>
																				<?php else : ?>
																					<a class="dropdown-item" href="javascript:void(0);" onclick="window.open('<?= base_url('data_perizinan_santri/print_perizinan/' . $izin->id_izin) ?>', 'newwindow', 'width=800,height=600'); return false;">Print</a>
																				<?php endif; ?>
																				<a class="dropdown-item" href="<?= base_url('data_perizinan_santri/hapus_perizinan/' . $izin->id_izin) ?>" onclick="return confirm('Apakah anda yakin menghapus perizinan ini?')">Hapus</a>
																			</div>
																		</div>
																	</td>
															</tr>
														<?php endforeach; ?>
													<?php else : ?>
														<tr>
															<td colspan="6" class="text-center">Tidak ada data perizinan.</td>
														</tr>
													<?php endif; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="profile">
									<div class="p-t-15">
										<div class="table-responsive">
											<table class="table table-striped table-bordered zero-configuration">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode Izin</th>
														<th>Detail Santri</th>
														<th>Tanggal & Jam Mulai - Akhir <br>
															Tanggal & Jam Masuk Pondok (Check In Kiosk)
														</th>
														<th>Status</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php if (!empty($load_perizinan_kembali)) : ?>
														<?php $no = 1;
														foreach ($load_perizinan_kembali as $izin) : ?>
															<tr>
																<td><?= $no++ ?></td>
																<td><strong><?= $izin->kode_perizinan ?></strong></td>
																<<<<<<< HEAD
																	<td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?>
																	<br>
																	No. HP Wali Santri : <?= $izin->no_wali ?>
																	</td>
																	=======
																	<td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?></td>
																	>>>>>>> c828bd154037bc276d83a44c67e059eff275fbd0
																	<td><?= $izin->tanggal_mulai ?> | <?= $izin->jam_mulai ?> s/d <?= $izin->tanggal_akhir ?> | <?= $izin->jam_akhir ?>
																		<?php
																		$current_time = date('Y-m-d H:i:s');
																		$end_time = $izin->tanggal_akhir . ' ' . $izin->jam_akhir;
																		if ($izin->status === "SUDAH KEMBALI") {
																			echo "<span class='badge badge-success'>Perizinan sudah selesai</span>";
																		} elseif ($izin->status === "BELUM KEMBALI") {
																			if (strtotime($current_time) > strtotime($end_time)) {
																				$diff = strtotime($current_time) - strtotime($end_time);
																				$days_late = floor($diff / (60 * 60 * 24));
																				echo "<span class='badge badge-danger'>Terlambat $days_late hari</span>";
																			} else {
																				$diff = strtotime($end_time) - strtotime($current_time);
																				$days_remaining = floor($diff / (60 * 60 * 24));
																				echo "<span class='badge badge-success'>Sisa $days_remaining hari</span>";
																			}
																		}
																		echo "<div style='margin-top: 10px;'><strong>Check-in:</strong> " . $izin->tanggal_checkin . " |  " . $izin->jam_checkin . "</div>";
																		?></td>
																	<td><?= $izin->status ?> <br>
																		<?php if ($izin->status_izin == 'BELUM DIIZINKAN') : ?>
																			<span class='badge badge-danger'>BELUM DIIZINKAN</span>
																		<?php elseif ($izin->status_izin == 'SUDAH DIIZINKAN') : ?>
																			<span class='badge badge-success'>SUDAH DIIZINKAN</span>
																		<?php endif; ?>
																	</td>
																	<td>
																		<div class="btn-group" role="group">
																			<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
																			<div class="dropdown-menu">
																				<a class="dropdown-item" href="<?= base_url('data_perizinan_santri/ubah_perizinan/' . $izin->id_izin) ?>">Detail/Ubah</a>
																				<?php if ($izin->status_izin === "BELUM DIIZINKAN") : ?>
																				<?php else : ?>
																					<a class="dropdown-item" href="javascript:void(0);" onclick="window.open('<?= base_url('data_perizinan_santri/print_perizinan/' . $izin->id_izin) ?>', 'newwindow', 'width=800,height=600'); return false;">Print</a>
																				<?php endif; ?>
																				<a class="dropdown-item" href="<?= base_url('data_perizinan_santri/hapus_perizinan/' . $izin->id_izin) ?>" onclick="return confirm('Apakah anda yakin menghapus perizinan ini?')">Hapus</a>
																			</div>
																		</div>
																	</td>
															</tr>
														<?php endforeach; ?>
													<?php else : ?>
														<tr>
															<td colspan="6" the text-center">Tidak ada data perizinan.</td>
														</tr>
													<?php endif; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="contact">
									<div class="p-t-15">
										<div class="table-responsive">
											<table class="table table-striped table-bordered zero-configuration">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode Izin</th>
														<th>Detail Santri</th>
														<th>Tanggal & Jam Mulai - Akhir <br>
															Tanggal & Jam Masuk Pondok (Check In Kiosk)
														</th>
														<th>Status</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php if (!empty($load_perizinan_belum_kembali)) : ?>
														<?php $no = 1;
														foreach ($load_perizinan_belum_kembali as $izin) : ?>
															<tr>
																<td><?= $no++ ?></td>
																<td><strong><?= $izin->kode_perizinan ?></strong></td>
																<td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?>
																	<br>
																	No. HP Wali Santri : <?= $izin->no_wali ?>
																</td>
																<td><?= $izin->tanggal_mulai ?> | <?= $izin->jam_mulai ?> s/d <?= $izin->tanggal_akhir ?> | <?= $izin->jam_akhir ?>
																	<?php
																	$current_time = date('Y-m-d H:i:s');
																	$end_time = $izin->tanggal_akhir . ' ' . $izin->jam_akhir;
																	if ($izin->status === "SUDAH KEMBALI") {
																		echo "<span class='badge badge-success'>Perizinan sudah selesai</span>";
																	} elseif ($izin->status === "BELUM KEMBALI") {
																		if (strtotime($current_time) > strtotime($end_time)) {
																			$diff = strtotime($current_time) - strtotime($end_time);
																			$days_late = floor($diff / (60 * 60 * 24));
																			echo "<span class='badge badge-danger'>Terlambat $days_late hari</span>";
																		} else {
																			$diff = strtotime($end_time) - strtotime($current_time);
																			$days_remaining = floor($diff / (60 * 60 * 24));
																			echo "<span class='badge badge-success'>Sisa $days_remaining hari</span>";
																		}
																	}
																	echo "<div style='margin-top: 10px;'><strong>Check-in:</strong> " . $izin->tanggal_checkin . " |  " . $izin->jam_checkin . "</div>";
																	?></td>
																<td><?= $izin->status ?> <br>
																	<?php if ($izin->status_izin == 'BELUM DIIZINKAN') : ?>
																		<span class='badge badge-danger'>BELUM DIIZINKAN</span>
																	<?php elseif ($izin->status_izin == 'SUDAH DIIZINKAN') : ?>
																		<span class='badge badge-success'>SUDAH DIIZINKAN</span>
																	<?php endif; ?>
																</td>
																<td>
																	<div class="btn-group" role="group">
																		<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
																		<div class="dropdown-menu">
																			<a class="dropdown-item" href="<?= base_url('data_perizinan_santri/ubah_perizinan/' . $izin->id_izin) ?>">Detail/Ubah</a>
																			<?php if ($izin->status_izin === "BELUM DIIZINKAN") : ?>
																			<?php else : ?>
																				<a class="dropdown-item" href="javascript:void(0);" onclick="window.open('<?= base_url('data_perizinan_santri/print_perizinan/' . $izin->id_izin) ?>', 'newwindow', 'width=800,height=600'); return false;">Print</a>
																			<?php endif; ?>
																			<a class="dropdown-item" href="<?= base_url('data_perizinan_santri/hapus_perizinan/' . $izin->id_izin) ?>" onclick="return confirm('Apakah anda yakin menghapus perizinan ini?')">Hapus</a>
																		</div>
																	</div>
																</td>
															</tr>
														<?php endforeach; ?>
													<?php else : ?>
														<tr>
															<td colspan="6" class="text-center">Tidak ada data perizinan.</td>
														</tr>
													<?php endif; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="message">
									<div class="p-t-15">
										<div class="table-responsive">
											<table class="table table-striped table-bordered zero-configuration">
												<thead>
													<tr>
														<th>No</th>
														<th>Kode Izin</th>
														<th>Detail Santri</th>
														<th>Tanggal & Jam Mulai - Akhir <br>
															Tanggal & Jam Masuk Pondok (Check In Kiosk)
														</th>
														<th>Status</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php if (!empty($load_perizinan_terlambat)) : ?>
														<?php $no = 1;
														foreach ($load_perizinan_terlambat as $izin) : ?>
															<tr>
																<td><?= $no++ ?></td>
																<td><strong><?= $izin->kode_perizinan ?></strong></td>
																<<<<<<< HEAD
																	<td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?>
																	<br>
																	No. HP Wali Santri : <?= $izin->no_wali ?>
																	</td>
																	=======
																	<td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?></td>
																	>>>>>>> c828bd154037bc276d83a44c67e059eff275fbd0
																	<td><?= $izin->tanggal_mulai ?> | <?= $izin->jam_mulai ?> s/d <?= $izin->tanggal_akhir ?> | <?= $izin->jam_akhir ?>
																		<?php
																		$current_time = date('Y-m-d H:i:s');
																		$end_time = $izin->tanggal_akhir . ' ' . $izin->jam_akhir;
																		if ($izin->status === "SUDAH KEMBALI") {
																			echo "<span class='badge badge-success'>Perizinan sudah selesai</span>";
																		} elseif ($izin->status === "BELUM KEMBALI") {
																			if (strtotime($current_time) > strtotime($end_time)) {
																				$diff = strtotime($current_time) - strtotime($end_time);
																				$days_late = floor($diff / (60 * 60 * 24));
																				echo "<span class='badge badge-danger'>Terlambat $days_late hari</span>";
																			} else {
																				$diff = strtotime($end_time) - strtotime($current_time);
																				$days_remaining = floor($diff / (60 * 60 * 24));
																				echo "<span class='badge badge-success'>Sisa $days_remaining hari</span>";
																			}
																		}
																		echo "<div style='margin-top: 10px;'><strong>Check-in:</strong> " . $izin->tanggal_checkin . " |  " . $izin->jam_checkin . "</div>";
																		?></td>
																	<td><?= $izin->status ?> <br>
																		<?php if ($izin->status_izin == 'BELUM DIIZINKAN') : ?>
																			<span class='badge badge-danger'>BELUM DIIZINKAN</span>
																		<?php elseif ($izin->status_izin == 'SUDAH DIIZINKAN') : ?>
																			<span class='badge badge-success'>SUDAH DIIZINKAN</span>
																		<?php endif; ?>
																	</td>
																	<td>
																		<div class="btn-group" role="group">
																			<button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
																			<div class="dropdown-menu">
																				<a class="dropdown-item" href="<?= base_url('data_perizinan_santri/ubah_perizinan/' . $izin->id_izin) ?>">Detail/Ubah</a>
																				<?php if ($izin->status_izin === "BELUM DIIZINKAN") : ?>
																				<?php else : ?>
																					<a class="dropdown-item" href="javascript:void(0);" onclick="window.open('<?= base_url('data_perizinan_santri/print_perizinan/' . $izin->id_izin) ?>', 'newwindow', 'width=800,height=600'); return false;">Print</a>
																				<?php endif; ?>
																				<a class="dropdown-item" href="<?= base_url('data_perizinan_santri/hapus_perizinan/' . $izin->id_izin) ?>" onclick="return confirm('Apakah anda yakin menghapus perizinan ini?')">Hapus</a>

																			</div>
																		</div>
																	</td>
															</tr>
														<?php endforeach; ?>
													<?php else : ?>
														<tr>
															<td colspan="6" class="text-center">Tidak ada data perizinan.</td>
														</tr>
													<?php endif; ?>
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
	<!-- #/ container -->
	<<<<<<< HEAD
		</div>
		=======
		>>>>>>> c828bd154037bc276d83a44c67e059eff275fbd0
</div>
