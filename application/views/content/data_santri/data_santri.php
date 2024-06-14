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
                                <div class="default-tab">
                                    <ul class="nav nav-tabs mb-3" role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#semua">Semua</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#aktif">Aktif</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#nonaktif">Nonaktif</a>
                                        </li>
                                      
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="semua" role="tabpanel">
                                            <div class="p-t-15">
                                           
                                               <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Induk Santri</th>
                                            <th>Nama Lengkap</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat Dusun</th>
                                            <th>Alamat Kecamatan</th>
                                            <th>Alamat Provinsi</th>
                                            <th>Lembaga Pendidikan</th>
                                            <th>Nama Ayah</th>
                                            <th>Pekerjaan Ayah</th>
                                            <th>No. HP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($data_santri as $santri) : ?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $santri->no_induk_santri ?></td>
                                                <td><?php echo $santri->nama_lengkap_santri ?></td>
                                                <td><?php echo $santri->tanggal_masuk ?></td>
                                                <td><?php echo $santri->tempat_lahir ?></td>
                                                <td><?php echo $santri->tanggal_lahir ?></td>
                                                <td><?php echo $santri->alamat_dusun ?></td>
                                                <td><?php echo $santri->alamat_kecamatan ?></td>
                                                <td><?php echo $santri->alamat_provinsi ?></td>
                                                <td><?php echo $santri->nama_lembaga ?></td>
                                                <td><?php echo $santri->nama_ayah ?></td>
                                                <td><?php echo $santri->pekerjaan_ayah ?></td>
                                                <td><?php echo $santri->no_hp ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="<?php echo base_url('data_santri/ubah_santri/') . $santri->id_santri ?>">Ubah</a>
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
                                                <h4>ini aktif</h4>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
                                                <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nonaktif">
                                            <div class="p-t-15">
                                                <h4>ini nonaktif</h4>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
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