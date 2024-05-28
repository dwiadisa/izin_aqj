 <div class="content-body">

            <div class="row page-titles mx-0">
               
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $title ?></h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Kode Wilayah</th>
                                                <th>Nama Wilayah</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no =1; ?>
                                            <?php foreach ($wilayah as $wl) :?>
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $wl->singkatan_wilayah ?></td>
                                                <td><?php echo $wl->nama_wilayah ?></td>
                                                <td>

                                                </td>
                                               
                                            </tr>
                                            <?php endforeach; ?>
                                           
                                          
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