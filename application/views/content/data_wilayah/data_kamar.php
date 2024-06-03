<div class="content-body" style="min-height: 798px;">

            <div class="row page-titles mx-0">
               
            </div>
            <!-- row -->

          <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Kamar Wilayah</h4>
                    <hr>
                    <!-- Nav tabs -->
                    <div class="default-tab">
                        <ul class="nav nav-tabs mb-3" role="tablist">
                            <?php $first = true; ?>

                            <?php foreach ($wilayah as $wl) : ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if ($first) echo 'active'; ?>" data-toggle="tab" href="#<?php echo $wl->singkatan_wilayah ?>">
                                        <?php echo $wl->nama_wilayah ?>
                                    </a>
                                </li>
                                <?php $first = false; ?>
                            <?php endforeach; ?>
                        </ul>
                        <div class="tab-content">
                            <?php $first = true; ?>
                            <?php foreach ($wilayah as $wl) : ?>
                                <div class="tab-pane fade <?php if ($first) echo 'show active'; ?>" id="<?php echo $wl->singkatan_wilayah ?>" role="tabpanel">
                                    <div class="p-t-15">
                                       
                                        <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                    <thead>
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Nama Kamar</th>
                                                            <th>Nama Wilayah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                <?php
                                                    // load model 
                                                    $this->load->model('data_wilayah_model');
                                                    $query_kamar = $this->data_wilayah_model->lihat_kamar_perwilayah($wl->id_wilayah)

                                                ?>
                                                    <tbody>
                                                        <?php 
                                                        $no =1;
                                                        foreach ($query_kamar as $km):
                                                        var_dump($km);
                                                        ?>
                                                        
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1"><?php echo $no++ ?></td>
                                                            <td><?php echo $km->nama_kamar ?></td>
                                                            <td><?php echo $km->nama_wilayah . " - " . $wl->singkatan_wilayah ?></td>
                                                            <td>
                                                                  <div class="btn-group" role="group">
                                                        <button type="button" class="btn mb-1 btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="<?php echo base_url('data_wilayah/ubah_kamar/') . $km->id_kamar ?>">Ubah</a>
                                                            <a class="dropdown-item" href="<?php echo base_url('data_wilayah/hapus_kamar/') . $km->id_kamar ?>">Hapus</a>
                                                            
                                                        </div>
                                                    </div>



                                                            </td>
                                                          
                                                        </tr>
                                                      <?php endforeach; ?>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
       
                             </div>
                                </div>

                                        <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p>
                                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p> -->
                                    </div>
                                </div>
                                <?php $first = false; ?>
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