        <div class="content-body">

            <div class="row page-titles mx-0">
              
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ekspor Data Santri Per-wilayah Ke Excel</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Wilayah</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $no =1;
                                            
                                            foreach ($wilayah as $wl) :
                                            ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td><?php echo $wl->singkatan_wilayah; ?> / <?php echo $wl->nama_wilayah; ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('Data_penempatan_santri/download_excel_perwilayah/') . $wl->id_wilayah ?>" class="btn mb-1 btn-rounded btn-success">
                                                        <span class="btn-icon-left">
                                                            <i class="fa fa-download color-warning"></i>
                                                        </span>
                                                        Download
                                                    </a>
                                                </td>
                                            </tr>
                                           <?php endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>