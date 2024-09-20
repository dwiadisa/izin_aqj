<div class="content-body" style="min-height: 1110px;">

            <div class="row page-titles mx-0">
               
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Histori Pendidikan Santri</h4>
                                <hr>
                                <!-- <p>Pilih Santri</p> -->
                                  <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="id_santri">Pilih Santri<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6 col-md-8 col-sm-12">

                                              <form class="form-valide" action="" method="get" novalidate="novalidate">
                                                <select class="form-control select2" id="id_santri" name="id_santri">
                                                    <option value="">Please select</option>
                                                    <?php foreach($data_santri as $santri): ?>
                                                    <option value="<?php echo $santri->id_santri; ?>" <?php echo ($this->session->userdata('id_santri') == $santri->id_santri) ? 'selected' : ''; ?>><?php echo $santri->no_induk_santri .  " - " . $santri->nama_lengkap_santri ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php echo form_error('id_santri', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-12">
                                                <button type="submit" class="btn btn-sm mb-1 btn-flat btn-success"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
                                            </div>
                                        </form>

                                        
                                        </div>
                                        <hr>
                                        <div class="alert alert-success">
                                        <b>Data Santri : </b>
                                        <div class="  row">
                                            <div class=" container col-md-8">

                                            <?php if ($lihat_santri == null) : ?>
                                                <p>PIlih santri terlebih dahulu</p>
                                                <?php else : ?>
                                                     <table class="table table-bordered">
                                                    <tr>
                                                        <th>Nama</th>
                                                        <td><?php echo $lihat_santri->nama_lengkap_santri; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tempat Lahir</th>
                                                        <td><?php echo $lihat_santri->tempat_lahir; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Lahir</th>
                                                        <td><?php echo $lihat_santri->tanggal_lahir; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td><?php echo $lihat_santri->alamat_dusun . ', ' . $lihat_santri->alamat_desa . ', ' . $lihat_santri->alamat_kecamatan . ', ' . $lihat_santri->alamat_kabupaten . ', ' . $lihat_santri->alamat_provinsi; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status Santri</th>
                                                        <td><?php echo $lihat_santri->status_santri; ?></td>
                                                    </tr>
                                                </table>
                                              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_tambah_history">Tambah Histori Pendidikan</button>
                                                    <?php endif ?>
                                               
                                            </div>
                                            <div class="col-md-4">
                                                   <?php if ($lihat_santri == null) : ?>
                                              
                                                <?php else : ?>
                                                   
                                                    <img src="<?php echo base_url($lihat_santri->foto); ?>" alt="Foto Santri" width="160px" class="img-fluid mx-auto d-block">
                                                    <?php endif ?>
                                            </div>
                                        </div>

                                        </div>
                             <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lembaga</th>
                                                <th>Tahun Awal</th>
                                                <th>Tahun Akhir</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no=1;
                                            foreach ($lihat_history as $hs): ?>
                                            <tr>
                                                <th><?php echo$no++ ?></th>
                                                <td><?php echo $hs->nama_lembaga ?></td>
                                                <td><?php echo $hs->tahun_masuk_lembaga ?></td>
                                                <td><?php echo $hs->tahun_keluar_lembaga ?></td>
                                                <td class="color-primary">
                                                    
                                  <div class="btn-group" role="group">
                                        <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>

                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                          
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

        <!-- modal history -->

        <div class="modal fade" id="modal_tambah_history" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tambah History Pendidikan</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-valide" action="<?php echo base_url('data_santri/tambah_history_pendidikan_santri') ?>" method="post" novalidate="novalidate">
                                                    <input type="hidden" name="id_santri" value="<?php echo $lihat_santri->id_santri ?>">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Nama Lembaga<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="nama_lembaga" name="nama_lembaga">
                                                    <option value="">Pilih Lembaga</option>
                                                    <?php foreach ($lembaga as $lg) : ?>
                                                    <option value="<?php echo $lg->id_lembaga ?>"><?php echo  $lg->nama_lembaga ?></option>
                                                    <?php endforeach ?>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Tahun Awal <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="tahun_awal" name="tahun_awal" placeholder="Masukkan Tahun Awal Masuk">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">Tahun Akhir<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="number" class="form-control" id="tahun_akhir" name="tahun_akhir" placeholder="Masukkan Tahun Akhir Masuk">
                                            </div>
                                        </div>
                                     
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                                   
                                                </div>
                                                <!-- <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>