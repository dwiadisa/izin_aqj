<div class="content-body" style="min-height: 1110px;">

            <div class="row page-titles mx-0">
                
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ubah Tahun Ajaran</h4>
                                <hr>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo base_url('data_tahun_ajaran/ubah_tahun_ajaran/' . $tahun_ajaran->id_tahun_ajaran) ?>" method="post" novalidate="novalidate">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Tahun Ajaran<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
												<input type="hidden" name="id_tahun_ajaran" value="<?php echo $tahun_ajaran->id_tahun_ajaran ?>">
                                                <input type="text" class="form-control" id="nama_tahun_ajaran" name="nama_tahun_ajaran" placeholder="Masukkan Tahun Ajaran" value="<?php echo $tahun_ajaran->nama_tahun_ajaran ?>">
												<small class = 'text-danger'>
													<?php echo form_error('nama_tahun_ajaran') ?>
												</small>	
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
