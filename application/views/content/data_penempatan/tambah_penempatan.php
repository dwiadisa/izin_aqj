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
                                                    <option value="">Please select</option>
                                                    <option value="html">HTML</option>
                                                    <option value="css">CSS</option>
                                                    <option value="javascript">JavaScript</option>
                                                    <option value="angular">Angular</option>
                                                    <option value="angular">React</option>
                                                    <option value="vuejs">Vue.js</option>
                                                    <option value="ruby">Ruby</option>
                                                    <option value="php">PHP</option>
                                                    <option value="asp">ASP.NET</option>
                                                    <option value="python">Python</option>
                                                    <option value="mysql">MySQL</option>
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