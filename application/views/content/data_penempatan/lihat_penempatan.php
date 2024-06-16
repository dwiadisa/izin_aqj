<div class="content-body" style="min-height: 798px;">

            <div class="row page-titles mx-0">
               
            </div>
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
                                                        <a href="#v-pills-home<?php echo $wilayah->id_wilayah; ?>" data-toggle="pill" class="nav-link active show">Home</a>
                                                        <a href="#v-pills-profile<?php echo $wilayah->id_wilayah; ?>" data-toggle="pill" class="nav-link">Profile</a>
                                                        <a href="#v-pills-messages<?php echo $wilayah->id_wilayah; ?>" data-toggle="pill" class="nav-link">Messages</a>
                                                        <a href="#v-pills-settings<?php echo $wilayah->id_wilayah; ?>" data-toggle="pill" class="nav-link">Settings</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-9">
                                                    <div class="tab-content">
                                                        <div id="v-pills-home<?php echo $wilayah->id_wilayah; ?>" class="tab-pane fade active show">
                                                            <p>Csadasdasillum ad ut irure tempor velit nostrud occaecat ullamco aliqua anim Lorem sint. Veniam sint duis incididunt do esse magna mollit excepteur laborum qui. Deserunt non laborum enim et cillum eu deserunt excepteur ea incididunt minim occaecat.</p>
                                                        </div>
                                                        <div id="v-pills-profile<?php echo $wilayah->id_wilayah; ?>" class="tab-pane fade">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi adipisci cupiditate quo libero doloribus et rem a eos officiis. Eos at consequuntur, fugiat ducimus sapiente sit sequi aliquam, deserunt laboriosam perferendis sed corporis. Unde provident ea quo quibusdam beatae neque.</p>
                                                        </div>
                                                        <div id="v-pills-messages<?php echo $wilayah->id_wilayah; ?>" class="tab-pane fade">
                                                            <p>perspiciatis provm!</p>
                                                            <p>Fugiat id quis dolor culpa eiusmod anim velit excepteur proident dolor aute qui magna. Ad proident laboris ullamco esse anim Lorem Lorem veniam quis Lorem irure occaecat velit nostrud magna nulla. Velit et et proident Lorem do ea tempor officia dolor. Reprehenderit Lorem aliquip labore est magna commodo est ea veniam consectetur.</p>
                                                        </div>
                                                        <div id="v-pills-settings<?php echo $wilayah->id_wilayah; ?>" class="tab-pane fade">
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi adipisci cupiditate quo libero doloribus et rem a eos officiis. Eos at consequuntur, fugiat ducimus sapiente sit sequi aliquam, deserunt laboriosam perferendis sed corporis. Unde provident ea quo quibusdam beatae neque.</p>
                                                        </div>
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