<div class="content-body" style="min-height: 798px;">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <?php foreach ($kamar as $km ):?>
                                <h4>Ubah Data Kamar</h4>
                                <hr>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo base_url('data_wilayah/update_kamar') ?>" method="post" novalidate="novalidate">
                                       
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Nama Wilayah <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="hidden" class="form-control" id="id_kamar" name="id_kamar" readonly placeholder="Enter a username.." value="<?php echo  $km->id_kamar ?>">
                                                <input type="text" class="form-control" id="nama_wilayah" name="nama_wilayah" readonly placeholder="Enter a username.." value="<?php echo  $km->nama_wilayah ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Nama Kamar <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" placeholder="Enter a username.." value="<?php echo  $km->nama_kamar ?>">
                                            </div>
                                        </div>
                                        
                                   
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>