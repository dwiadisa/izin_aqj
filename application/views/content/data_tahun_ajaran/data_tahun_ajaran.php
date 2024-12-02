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
                                            <th>Tahun Ajaran</th>
                                            <!-- <th>Nama Lembaga</th> -->
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($tahun_ajaran as $ta) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $ta->nama_tahun_ajaran?></td>
                                              
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="<?php echo base_url('data_tahun_ajaran/ubah_tahun_ajaran/') . $ta->id_tahun_ajaran ?>">Ubah</a>
                                                            <a class="dropdown-item" href="<?php echo base_url('data_tahun_ajaran/hapus_tahun_ajaran/') . $ta->id_tahun_ajaran ?>">Hapus</a>
                                                         
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
