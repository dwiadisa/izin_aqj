      <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">
               <div class="alert alert-success">Selamat Datang , <?php echo $this->session->userdata('username'); ?></div>
                <div class="row">


                 <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-5">
                            <div class="card-body">
                                <h3 class="card-title text-white">Jumlah Seluruh Santri</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $hitung_aktif + $hitung_nonaktif; ?></h2>
                                  
                                </div>
                                <span class="float-right display-5 opacity-5"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Santri Aktif</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $hitung_aktif; ?></h2>
                                   
                                </div>
                                <span class="float-right display-5 opacity-5"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Santri Non-Aktif</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $hitung_nonaktif; ?></h2>
                                 
                                </div>
                                <span class="float-right display-5 opacity-5"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Santri Izin</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $hitung_izin; ?></h2>
                                 
                                </div>
                                <span class="float-right display-5 opacity-5"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Santri Riyadhoh</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $hitung_riyadhoh; ?></h2>
                                  
                                </div>
                                <span class="float-right display-5 opacity-5"></span>
                            </div>
                        </div>
                    </div>
                   
                </div>

              
                

                <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sebaran Santri Per-Wilayah</h4>
                                <div id="morris-bar-chart"></div>
                               

                                    
                                </div>
                            </div>
                            
                        </div>    
                        <!-- <div class="col col-md-6">
                            <div class="card card-widget">
                                <div class="card-body">
                                    <h5 class="text-muted">Order Overview </h5>
                                    <h2 class="mt-4">5680</h2>
                                    <span>Total Revenue</span>
                                    <div class="mt-4">
                                        <h4>30</h4>
                                        <h6>Online Order <span class="pull-right">30%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-primary" style="width: 30%;" role="progressbar"><span class="sr-only">30% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4>50</h4>
                                        <h6 class="m-t-10 text-muted">Offline Order <span class="pull-right">50%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-success" style="width: 50%;" role="progressbar"><span class="sr-only">50% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h4>20</h4>
                                        <h6 class="m-t-10 text-muted">Cash On Develery <span class="pull-right">20%</span></h6>
                                        <div class="progress mb-3" style="height: 7px">
                                            <div class="progress-bar bg-warning" style="width: 20%;" role="progressbar"><span class="sr-only">20% Order</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> -->
                       
                    </div>
                
           

            
                </div>

             
                

            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        