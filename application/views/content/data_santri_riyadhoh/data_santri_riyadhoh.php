    <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                   
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Santri Riyadhoh</h4>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Detail Santri Riyadhoh</th>
                                                <th>Alamat Lengkap</th>
                                                <th>Detail Wali</th>
                                                <th>Tanggal/Tahun Pendaftaran</th>
                                                <th>Aksi</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no =1;
                                            foreach ($load_santri_riyadhoh as $sr) :?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <td> Nama : <?php echo $sr->nama_santri_riyadhoh ?> <br>
                                                    Tempat/Tanggal Lahir : <?php echo $sr->tempat_lahir ?> / <?php echo $sr->tanggal_lahir ?> <br>
                                                    NIK : <?php echo $sr->no_nik ?> <br>
                                                    No HP : <?php echo $sr->no_hp ?> <br>
                                                    
                                            
                                            </td>
                                                <td>
                                                    Desa : <?php echo $sr->alamat_desa ?> <br>    
                                                    Kecamatan : <?php echo $sr->alamat_kecamatan ?> <br>    
                                                    Kabupaten : <?php echo $sr->alamat_kabupaten ?> <br>
                                                    Provinsi : <?php echo $sr->alamat_provinsi ?> <br>

                                                
                                                </td>
                                                <td> Nama Wali : <?php echo $sr->nama_wali ?> <br>
                                                    No HP : <?php echo $sr->no_hp_wali ?> <br>
                                            </td>
                                                <td>
                                                    Tanggal Pendaftaran : <?php echo $sr->tanggal_daftar ?> <br>
                                                    Tahun Pendaftaran : <?php echo $sr->tahun_daftar ?> <br>

                                                </td>
                                                <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 37px, 0px);">
                                                        <a class="dropdown-item" href="<?php echo base_url('data_santri_riyadhoh/ubah_santri_riyadhoh/'.$sr->id_santri_riyadhoh) ?>">Ubah/Detail</a>
                                                        <a class="dropdown-item" href="<?php echo base_url('data_santri_riyadhoh/hapus_santri_riyadhoh/'.$sr->id_santri_riyadhoh) ?>">Hapus</a>
                                                    </div>
                                                </div>
                                    </div>    

                                                </td>
                                            </tr>
                                          <?php endforeach; ?>
                                          
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>