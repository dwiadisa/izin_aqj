<div class="content-body" style="min-height: 1110px;">

            <div class="row page-titles mx-0">
              
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Tambah Perizinan Santri</h4>
                                <hr>
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post" novalidate="novalidate">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Kode Perizinan <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="kode_perizinan" readonly name="kode_perizinan" placeholder="Enter a username.." value="<?php echo strtoupper(random_string('alnum',5)); ?>">
                                                <?php echo form_error('kode_perizinan', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="id_santri">NIS / Nama Santri / Wilayah<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control select2" id="id_santri" name="id_santri">
                                                    <option value="">Please select</option>
                                                    <?php foreach($load_penempatan as $penempatan): ?>
                                                    <option value="<?php echo $penempatan->id_santri; ?>"><?php echo $penempatan->no_induk_santri .  " - " . $penempatan->nama_lengkap_santri . " - " . $penempatan->nama_wilayah ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php echo form_error('id_santri', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Tanggal Mulai <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="$21.60">
                                                <?php echo form_error('tanggal_mulai', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Jam Mulai <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" placeholder="$21.60">
                                                <?php echo form_error('jam_mulai', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">Tanggal Akhir <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir" placeholder="http://example.com">
                                                <?php echo form_error('tanggal_akhir', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">Jam Akhir <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="time" class="form-control" id="jam_akhir" name="jam_akhir" placeholder="http://example.com">
                                                <?php echo form_error('jam_akhir', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                        <hr>
                                     <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Status<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="status" name="status">
                                                    <option value="">Pilih Status</option>
                                                    <option value="SUDAH KEMBALI">SUDAH KEMBALI</option>
                                                    <option value="BELUM KEMBALI">BELUM KEMBALI</option>
                                                    <option value="TERLAMBAT KEMBALI">TERLAMBAT</option>
                                                    
                                                </select>
                                                <?php echo form_error('status', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                     <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Status Izin<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="status_izin" name="status_izin">
                                                    <option value="">Pilih Status</option>
                                                    <option value="SUDAH DIIZINKAN">SUDAH DIIZINKAN</option>
                                                    <option value="BELUM DIIZINKAN">BELUM DIIZINKAN</option>
                                                    
                                                </select>
                                                <?php echo form_error('status_izin', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Keperluan <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="keperluan" name="keperluan" rows="5" placeholder="Tulis Keperluan Perizinan"></textarea>
                                                <?php echo form_error('keperluan', '<div class="text-danger">', '</div>'); ?>
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

<!--          
<script>
    $(document).ready(function() {
        $('#id_santri').select2({
            placeholder: "Select a santri",
            allowClear: true
        });
    });
</script> -->