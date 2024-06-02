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
                                            <th>Kode Wilayah</th>
                                            <th>Nama Wilayah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($wilayah as $wl) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $wl->singkatan_wilayah ?></td>
                                                <td><?php echo $wl->nama_wilayah ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="<?php echo base_url('data_wilayah/ubah_wilayah/') . $wl->id_wilayah ?>">Ubah</a>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#confirmDeleteModal<?php echo $wl->id_wilayah ?>">Hapus</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- modal hapus  -->
                                            <div class="modal fade" id="confirmDeleteModal<?php echo $wl->id_wilayah ?>" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel<?php echo $wl->id_wilayah ?>" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="confirmDeleteModalLabel<?php echo $wl->id_wilayah ?>">Konfirmasi Hapus</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah Anda yakin ingin menghapus data wilayah ini?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                            <a id="confirmDeleteButton<?php echo $wl->id_wilayah ?>" class="btn btn-danger" href="<?php echo base_url('data_wilayah/hapus_wilayah/') . $wl->id_wilayah ?>">Hapus</a>
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
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>

    <!-- JS modal -->
    <script>
        $(document).ready(function() {
            // No need for additional JavaScript as the modal ID is now unique for each record
        });
    </script>
    <!-- JS modal -->
</body>
</html>