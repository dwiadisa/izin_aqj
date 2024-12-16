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
                                        <th>Nama Kelas</th>
                                        <th>lembaga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($kelas as $kl) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $kl->nama_kelas ?></td>
                                            <td><?php echo $kl->nama_lembaga ?></td>
                                            
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="<?php echo base_url('data_tahun_ajaran/ubah_tahun_ajaran/') . $ta->id_tahun_ajaran ?>">Ubah</a>
                                                        <button class="dropdown-item btn-delete" data-id="<?php echo $ta->id_tahun_ajaran ?>" data-name="<?php echo $ta->nama_tahun_ajaran ?>">Hapus</button>
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
