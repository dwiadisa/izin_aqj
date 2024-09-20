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
                                                <button type="button" class="btn mb-1 btn-success">Success</button>
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
                                            <tr>
                                                <th>1</th>
                                                <td>Kolor Tea Shirt For Man</td>
                                                <td><span class="badge badge-primary px-2">Sale</span>
                                                </td>
                                                <td>January 22</td>
                                                <td class="color-primary">$21.56</td>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Kolor Tea Shirt For Women</td>
                                                <td><span class="badge badge-danger px-2">Tax</span>
                                                </td>
                                                <td>January 30</td>
                                                <td class="color-success">$55.32</td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Blue Backpack For Baby</td>
                                                <td><span class="badge badge-success px-2">Extended</span>
                                                </td>
                                                <td>January 25</td>
                                                <td class="color-danger">$14.85</td>
                                            </tr>
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