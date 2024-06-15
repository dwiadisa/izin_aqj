<div class="content-body" style="min-height: 798px;">

    <div class="row page-titles mx-0">
       
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4>Tambah Penempatan Santri</h4>
                        <hr>
                        <div class="form-validation">
                            <form class="form-valide" action="#" method="post" novalidate="novalidate">
                               
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Pilih Santri<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="pilih_santri" name="pilih_santri">
                                            <option value="">Pilih Santri</option>
                                            <?php foreach ($load_santri as $santri ):?>
                                            <option value="<?php echo $santri->id_santri ?>"><?php echo $santri->no_induk_santri . " - " . $santri->nama_lengkap_santri ?></option>
                                            <?php endforeach ;?>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Pilih Wilayah<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="pilih_wilayah" name="pilih_wilayah">
                                            <option value="">Pilih Wilayah</option>
                                            <?php foreach ($load_wilayah as $wilayah ) :?>
                                            <option value="<?php echo $wilayah->id_wilayah ?>"><?php echo $wilayah->singkatan_wilayah. " - " . $wilayah->nama_wilayah ?></option>
                                            <?php endforeach; ?>
                                            
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-skill">Pilih Kamar<span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="pilih_kamar" name="pilih_kamar">
                                            <option value="">Pilih Kamar</option>
                                        </select>
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


<!-- jquery chainnya -->

<script>
$(document).ready(function() {
    $('#pilih_wilayah').change(function() {
        var id_wilayah = $(this).val();
        if (id_wilayah) {
            $.ajax({
                url: "<?php echo base_url('data_penempatan_santri/get_kamar_by_wilayah'); ?>",
                method: "POST",
                data: {id_wilayah: id_wilayah},
                dataType: 'json',
                success: function(data) {
                    $('#pilih_kamar').empty().append('<option value="">Pilih Kamar</option>');
                    $.each(data, function(key, value) {
                        $('#pilih_kamar').append('<option value="'+ value.id_kamar +'">'+ value.nama_kamar +'</option>');
                    });
                }
            });
        } else {
            $('#pilih_kamar').empty().append('<option value="">Pilih Kamar</option>');
        }
    });
});
</script>
