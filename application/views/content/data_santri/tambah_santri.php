<div class="content-body" style="min-height: 1110px;">

            <div class="row page-titles mx-0">
                
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Tambah Data Santri</h4>
                                <hr>
                                <div class="form-validation">
                                    <?php echo form_open_multipart('data_santri/tambah_santri') ?>
                                    
                                      <div class="alert alert-success">Untuk NIS (Nomor Induk Santri) akan digenerate otomatis berdasarkan tahun dan bulan pendaftaran</div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Nama Santri <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_santri" name="nama_santri" placeholder="Masukkan Nama Santri">
                                                <?php echo form_error('nama_santri', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Tanggal Masuk Santri <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="tanggal_masuk_santri" name="tanggal_masuk_santri" placeholder="Masukkan Tanggal Masuk Santri">
                                                <?php echo form_error('tanggal_masuk_santri', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Tempat Lahir <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                                                <?php echo form_error('tempat_lahir', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Tanggal Lahir <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
                                                <?php echo form_error('tanggal_lahir', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Dusun 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="alamat_dusun" name="alamat_dusun" placeholder="Masukkan Dusun">
                                                <?php echo form_error('alamat_dusun', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Desa/Kelurahan 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="alamat_desa" name="alamat_desa" placeholder="Masukkan Desa/Kelurahan">
                                                <?php echo form_error('alamat_desa', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Kecamatan 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="alamat_kecamatan" name="alamat_kecamatan" placeholder="Masukkan Kecamatan">
                                                <?php echo form_error('alamat_kecamatan', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Kabupaten/Kota 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="alamat_kabupaten" name="alamat_kabupaten" placeholder="Masukkan Kabupaten/Kota">
                                                <?php echo form_error('alamat_kabupaten', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Provinsi 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="alamat_provinsi" name="alamat_provinsi" placeholder="Masukkan Provinsi">
                                                <?php echo form_error('alamat_provinsi', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Lembaga Pendidikan yang dipilih<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="lembaga_pendidikan" name="lembaga_pendidikan">
                                                    <option value="">Pilih Lembaga Pendidikan</option>
                                                    <?php foreach($lembaga as $l): ?>
                                                    <option value="<?php echo $l->id_lembaga ?>"><?php echo $l->nama_lembaga ?></option>
                                                   <?php endforeach; ?>
                                                </select>
                                                <?php echo form_error('lembaga_pendidikan', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Nama Ayah <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah">
                                                <?php echo form_error('nama_ayah', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">Pekerjaan Ayah <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah">
                                                <?php echo form_error('pekerjaan_ayah', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Nama Ibu <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu">
                                                <?php echo form_error('nama_ibu', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phoneus">No HP<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan No Hp cth: 08123456xxx">
                                                <?php echo form_error('no_hp', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-status">Status <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="status" name="status">
                                                    <option value="AKTIF">Aktif</option>
                                                    <option value="NONAKTIF">Nonaktif</option>
                                                    <option value="ALUMNI">ALUMNI</option>
                                                </select>
                                                <?php echo form_error('status', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-digits">Foto Santri <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="foto_santri" name="foto_santri">
                                                <?php echo form_error('foto_santri', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>