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
                                                            <th>Tanggal & Jam Mulai - Akhir</th>
                                                            <th>Status</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php if (!empty($load_perizinan_semua)): ?>
                                                        <?php $no = 1; foreach ($load_perizinan_semua as $izin): ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><strong><?= $izin->kode_perizinan ?></strong></td>
                                                            <td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?></td>
                                                            <td><?= $izin->tanggal_mulai ?><br><?= $izin->jam_mulai ?> - <?= $izin->tanggal_akhir ?><br><?= $izin->jam_akhir ?>
                                                                    <?php 
                                                                    $current_time = date('Y-m-d H:i:s');
                                                                    $end_time = $izin->tanggal_akhir . ' ' . $izin->jam_akhir;
                                                                    if (strtotime($current_time) > strtotime($end_time)):
                                                                        $diff = strtotime($current_time) - strtotime($end_time);
                                                                        $days_late = floor($diff / (60 * 60 * 24));
                                                                        echo "<span class='badge badge-danger'>Terlambat $days_late hari</span>";
                                                                    endif; ?></td>
                                                            <td><?= $izin->status ?> <br>
                                                            <?php if ($izin->status_izin == 'BELUM DIIZINKAN'): ?>
                                                                <span class='badge badge-danger'>BELUM DIIZINKAN</span>
                                                            <?php elseif ($izin->status_izin == 'SUDAH DIIZINKAN'): ?>
                                                                <span class='badge badge-success'>SUDAH DIIZINKAN</span>
                                                            <?php endif; ?>
                                                            </td>
                                                            <td>
                                                                <div class="btn-group" role="group">
                                                                    <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="<?= base_url('data_perizinan_santri/ubah_perizinan/'.$izin->id_izin) ?>">Detail/Ubah</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmDeleteModal<?= $izin->id_izin ?>">Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                        <?php else: ?>
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
                                                                <th>Tanggal Mulai - Akhir</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if (!empty($load_perizinan_kembali)): ?>
                                                            <?php $no = 1; foreach ($load_perizinan_kembali as $izin): ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td><strong><?= $izin->kode_perizinan ?></strong></td>
                                                                <td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?></td>
                                                                <td><?= $izin->tanggal_mulai ?><br><?= $izin->jam_mulai ?> - <?= $izin->tanggal_akhir ?><br><?= $izin->jam_akhir ?>
                                                                    <?php 
                                                                    $current_time = date('Y-m-d H:i:s');
                                                                    $end_time = $izin->tanggal_akhir . ' ' . $izin->jam_akhir;
                                                                    if (strtotime($current_time) > strtotime($end_time)):
                                                                        $diff = strtotime($current_time) - strtotime($end_time);
                                                                        $days_late = floor($diff / (60 * 60 * 24));
                                                                        echo "<span class='badge badge-danger'>Terlambat $days_late hari</span>";
                                                                    endif; ?></td>
                                                                <td><?= $izin->status ?> <br>
                                                                <?php if ($izin->status_izin == 'BELUM DIIZINKAN'): ?>
                                                                    <span class='badge badge-danger'>BELUM DIIZINKAN</span>
                                                                <?php elseif ($izin->status_izin == 'SUDAH DIIZINKAN'): ?>
                                                                    <span class='badge badge-success'>SUDAH DIIZINKAN</span>
                                                                <?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="ubah_perizinan.php?id=<?= $izin->kode_perizinan ?>">Detail/Ubah</a>
                                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmDeleteModal<?= $izin->kode_perizinan ?>">Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                            <?php else: ?>
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
                                                                <th>Tanggal Mulai - Akhir</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if (!empty($load_perizinan_belum_kembali)): ?>
                                                            <?php $no = 1; foreach ($load_perizinan_belum_kembali as $izin): ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td><strong><?= $izin->kode_perizinan ?></strong></td>
                                                                <td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?></td>
                                                                <td><?= $izin->tanggal_mulai ?><br><?= $izin->jam_mulai ?> - <?= $izin->tanggal_akhir ?><br><?= $izin->jam_akhir ?>
                                                                    <?php 
                                                                    $current_time = date('Y-m-d H:i:s');
                                                                    $end_time = $izin->tanggal_akhir . ' ' . $izin->jam_akhir;
                                                                    if (strtotime($current_time) > strtotime($end_time)):
                                                                        $diff = strtotime($current_time) - strtotime($end_time);
                                                                        $days_late = floor($diff / (60 * 60 * 24));
                                                                        echo "<span class='badge badge-danger'>Terlambat $days_late hari</span>";
                                                                    endif; ?></td>
                                                                <td><?= $izin->status ?> <br>
                                                                <?php if ($izin->status_izin == 'BELUM DIIZINKAN'): ?>
                                                                    <span class='badge badge-danger'>BELUM DIIZINKAN</span>
                                                                <?php elseif ($izin->status_izin == 'SUDAH DIIZINKAN'): ?>
                                                                    <span class='badge badge-success'>SUDAH DIIZINKAN</span>
                                                                <?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="ubah_perizinan.php?id=<?= $izin->kode_perizinan ?>">Detail/Ubah</a>
                                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmDeleteModal<?= $izin->kode_perizinan ?>">Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                            <?php else: ?>
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
                                                                <th>Tanggal Mulai - Akhir</th>
                                                                <th>Status</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php if (!empty($load_perizinan_terlambat)): ?>
                                                            <?php $no = 1; foreach ($load_perizinan_terlambat as $izin): ?>
                                                            <tr>
                                                                <td><?= $no++ ?></td>
                                                                <td><strong><?= $izin->kode_perizinan ?></strong></td>
                                                                <td><?= $izin->no_induk_santri ?> - <?= $izin->nama_lengkap_santri ?></td>
                                                                <td><?= $izin->tanggal_mulai ?><br><?= $izin->jam_mulai ?> - <?= $izin->tanggal_akhir ?><br><?= $izin->jam_akhir ?>
                                                                    <?php 
                                                                    $current_time = date('Y-m-d H:i:s');
                                                                    $end_time = $izin->tanggal_akhir . ' ' . $izin->jam_akhir;
                                                                    if (strtotime($current_time) > strtotime($end_time)):
                                                                        $diff = strtotime($current_time) - strtotime($end_time);
                                                                        $days_late = floor($diff / (60 * 60 * 24));
                                                                        echo "<span class='badge badge-danger'>Terlambat $days_late hari</span>";
                                                                    endif; ?>
                                                                </td>
                                                                <td><?= $izin->status ?> <br>
                                                                <?php if ($izin->status_izin == 'BELUM DIIZINKAN'): ?>
                                                                    <span class='badge badge-danger'>BELUM DIIZINKAN</span>
                                                                <?php elseif ($izin->status_izin == 'SUDAH DIIZINKAN'): ?>
                                                                    <span class='badge badge-success'>SUDAH DIIZINKAN</span>
                                                                <?php endif; ?>
                                                                </td>
                                                                <td>
                                                                    <div class="btn-group" role="group">
                                                                        <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="ubah_perizinan.php?id=<?= $izin->kode_perizinan ?>">Detail/Ubah</a>
                                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmDeleteModal<?= $izin->kode_perizinan ?>">Hapus</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                            <?php else: ?>
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
</div>
</div>