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
										<th>No Registrasi Pendaftaran</th>
										<th>Detail Santri</th>
										<th>Alamat Lengkap</th>
										<th>Orangtua</th>
										<th>No. HP</th>
										<th>Aksi</th>

									</tr>
								</thead>
								<tbody>
									<?php $no = 1; ?>
									<?php foreach ($data_psb as $psb): ?>
										<tr>
											<td><?php echo $no++ ?></td>
											<td><?php echo $psb->no_induk_santri ?></td>
											<td>
												Nama: <?php echo $psb->nama_lengkap_santri ?><br>
												Tgl Lahir: <?php echo $psb->tanggal_lahir ?><br>
												Lembaga: <?php echo $psb->pendidikan_dipilih ?> <br>

											</td>
											<td> Dusun: <?php echo $psb->alamat_dusun ?><br>
												Desa : <?php echo $psb->nama_desa ?> <br>
												Kecamatan: <?php echo $psb->nama_kecamatan ?><br>
												Kabupaten : <?php echo $psb->nama_kabupaten ?> <br>
												Provinsi: <?php echo $psb->nama_provinsi ?></td>
											<td> Nama Ayah: <?php echo $psb->nama_ayah ?><br>
												Pekerjaan Ayah: <?php echo $psb->pekerjaan_ayah ?><br>
												Nama Ibu: <?php echo $psb->nama_ibu ?><br></td>
											<td><?php echo $psb->no_hp ?></td>

											<td>
												<a href="<?php echo base_url('data_psb/lihat_santri/' . $psb->id) ?>"
													class="btn mb-1 btn-success">Lihat Santri</a>
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