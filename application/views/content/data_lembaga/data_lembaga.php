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
                                                <td><?php echo $l->singkatan_lembaga?></td>
                                                <td><?php echo $l->nama_lembaga?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="<?php echo base_url('data_lembaga_pendidikan/ubah_lembaga/') . $l->id_lembaga ?>">Ubah</a>
                                                            <a class="dropdown-item" href="<?php echo base_url('data_lembaga_pendidikan/hapus_lembaga/') . $l->id_lembaga ?>">Hapus</a>
                                                         
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

    <!-- JS modal -->
    <script>
        $(document).ready(function() {
            // No need for additional JavaScript as the modal ID is now unique for each record
        });
    </script>
    <!-- JS modal -->
</body>
</html>