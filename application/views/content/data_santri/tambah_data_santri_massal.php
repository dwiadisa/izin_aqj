<div class="content-body" style="min-height: 1110px;">

            <div class="row page-titles mx-0">
                
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Tambah Data Santri Massal</h4>
                                <hr>
                                <p>Untuk menambahkan santri secara massal (bulk) silakan download template dibawah ini! </p>
                                <a href="<?php echo base_url('data_santri/download_template_excel') ?>" class="btn btn-primary" download="Template Santri.xlsx">Download Template</a>
                                <p>Jika sudah diisi, silakan upload kembali disini</p>
                                <form action="<?php echo base_url('data_santri/tambah_santri_massal_proses') ?>" method="post" enctype="multipart/form-data">
                                    <input type="file" name="file" id="file">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>