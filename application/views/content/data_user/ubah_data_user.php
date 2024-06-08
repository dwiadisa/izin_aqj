<div class="content-body" style="min-height: 1110px;">

            <div class="row page-titles mx-0">
                
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Tambah Data User</h4>
                                
                                <hr>
                                <div class="form-validation">
                                    <form class="form-valide" action="<?php echo base_url('data_user/tambah_user') ?>" method="post" novalidate="novalidate">
                                        <?php foreach ($load_user as $user):?>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" value="<?php echo $user->username ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email yang valid" value="<?php echo $user->email ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password"> Konfirmasi Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="konfir_password" name="konfir_password" placeholder="Masukkan Konfirmasi Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-currency">Nama Lengkap<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="<?php echo $user->nama_lengkap?>">
                                            </div>
                                        </div>
                                      
                                       
                                      
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-website">No HP <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan No HP cth : 0892887777xxx" value="<?php echo $user->no_hp ?>">
                                            </div>
                                        </div>
                                        
                                     <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-skill">Level<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="level" name="level">
                                                    <option value="">Pilih Level </option>
                                                    <option value="ADMIN">Administrator</option>
                                                    <option value="PENGURUS">Pengurus</option>
                                                   
                                                </select>
                                            </div>
                                        </div>


                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-skill">Status <span class="text-danger">*</span></label>
                                        <div class="col-lg-6">
                                            <select class="form-control" id="status" name="status">
                                                <option value="">Pilih Status</option>
                                                <option value="AKTIF" <?php echo ($user->status == 'AKTIF') ? 'selected' : ''; ?>>Aktif</option>
                                                <option value="NONAKTIF" <?php echo ($user->status == 'NONAKTIF') ? 'selected' : ''; ?>>Nonaktif</option>
                                            </select>
                                        </div>
                                    </div>  
                                      <hr>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>