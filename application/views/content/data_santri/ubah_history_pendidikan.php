<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Ubah History Pendidikan</h5>
            <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
        </div>
        <div class="modal-body">
            <form class="form-valide" action="<?php echo base_url('data_santri/ubah_history_pendidikan_santri?id_history=' . $history->id_history) ?>" method="post" novalidate="novalidate">
                <input type="hidden" name="id_santri" value="<?php echo $history->id_santri ?>">
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="nama_lembaga">Nama Lembaga<span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <select class="form-control" id="nama_lembaga" name="nama_lembaga">
                            <option value="">Pilih Lembaga</option>
                            <?php foreach ($lembaga as $lg) : ?>
                                <option value="<?php echo $lg->id_lembaga ?>" <?php echo ($lg->id_lembaga == $history->id_lembaga) ? 'selected' : ''; ?>><?php echo $lg->nama_lembaga ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="tahun_awal">Tahun Awal <span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="tahun_awal" name="tahun_awal" placeholder="Masukkan Tahun Awal Masuk" value="<?php echo $history->tahun_masuk_lembaga ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-4 col-form-label" for="tahun_akhir">Tahun Akhir<span class="text-danger">*</span></label>
                    <div class="col-lg-6">
                        <input type="number" class="form-control" id="tahun_akhir" name="tahun_akhir" placeholder="Masukkan Tahun Akhir" value="<?php echo $history->tahun_keluar_lembaga ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
