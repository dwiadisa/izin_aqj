<div class="content-body" style="min-height: 798px;">
    <div class="row page-titles mx-0"></div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Penempatan Santri</h4>
                        <hr>
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <?php foreach ($load_wilayah as $wilayah): ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo $wilayah->id_wilayah == $load_wilayah[0]->id_wilayah ? 'active' : ''; ?>" data-toggle="tab" href="#wilayah<?php echo $wilayah->id_wilayah; ?>">
                                        <?php echo $wilayah->nama_wilayah; ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach ($load_wilayah as $wilayah): ?>
                                <div class="tab-pane fade <?php echo $wilayah->id_wilayah == $load_wilayah[0]->id_wilayah ? 'show active' : ''; ?>" id="wilayah<?php echo $wilayah->id_wilayah; ?>" role="tabpanel">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 col-lg-3">
                                            <div class="nav flex-column nav-pills">
                                                <?php 
                                                $kamar = $this->data_penempatan_model->lihat_penempatan_by_kamar($wilayah->id_wilayah);
                                                foreach ($kamar as $k): ?>
                                                    <a href="#v-pills-<?php echo $k->id_kamar; ?>" data-toggle="pill" class="nav-link <?php echo $k === reset($kamar) ? 'active show' : ''; ?>">
                                                        <?php echo $k->nama_kamar; ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="tab-content">
                                                <?php foreach ($kamar as $k): ?>
                                                <div id="v-pills-<?php echo $k->id_kamar; ?>" class="tab-pane fade <?php echo $k === reset($kamar) ? 'active show' : ''; ?>">
                                                    <ul class="list-group">
                                                    <?php 
                                                    $penghuni = $this->data_penempatan_model->lihat_penghuni($k->id_kamar);
                                                    foreach ($penghuni as $p): ?>
                                                        <li class="list-group-item">
                                                            <?php echo $p->no_induk_santri . " - " . $p->nama_lengkap_santri; ?>
                                                            <a href="<?php echo site_url('data_penempatan_santri/pindah_penempatan/') . $p->id_penghuni; ?>" class="btn btn-primary btn-sm float-right ml-2">Pindah</a>
                                                            <button class="btn btn-danger btn-sm float-right ml-2 btn-delete" data-id="<?php echo $p->id_penghuni; ?>" data-name="<?php echo $p->nama_lengkap_santri; ?>">Hapus</button>
                                                        </li>
                                                    <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

<!-- Modal Hapus -->
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapus penempatan untuk <strong id="deleteName"></strong>?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="#" id="confirmDelete" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- JS Modal -->
<script>
    $(document).ready(function() {
        $('.btn-delete').click(function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            $('#deleteName').text(name);
            $('#confirmDelete').attr('href', '<?php echo site_url("data_penempatan_santri/hapus_penempatan/"); ?>' + id);
            $('#modalDelete').modal('show');
        });
    });
</script>
