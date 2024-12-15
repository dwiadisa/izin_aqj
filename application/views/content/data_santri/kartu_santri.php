<div class="content-body" style="min-height: 1110px;">
    <div class="row page-titles mx-0"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo $title; ?> <b> (BETA) </b></h4>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="id_santri">Pilih Santri<span class="text-danger">*</span></label>
                            <div class="col-lg-6 col-md-8 col-sm-12">
                                     <form class="form-valide" action="" method="get" novalidate="novalidate">
                                                <select class="form-control select2" id="id_santri" name="id_santri">
                                                    <option value="">Please select</option>
                                                    <?php foreach($data_santri as $santri): ?>
                                                    <option value="<?php echo $santri->id_santri; ?>" <?php echo ($this->session->userdata('id_santri') == $santri->id_santri) ? 'selected' : ''; ?>><?php echo $santri->no_induk_santri .  " - " . $santri->nama_lengkap_santri ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <?php echo form_error('id_santri', '<div class="text-danger">', '</div>'); ?>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-12">
                                                <button type="submit" class="btn btn-sm mb-1 btn-flat btn-success"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
                                            </div>
                                        </form>

                            </div>
                         
                        
                        <hr>
                                                        

									 <?php if ($lihat_santri == null) : ?>
                                             <div class="alert alert-danger" role="alert">
  													Pilih Santri Terlebih dahulu!
											</div>
                                                <?php else : ?>
									<!-- Alert Section -->
									<div id="alert-container" class="mb-4" style="display: none;">
										<div class="alert alert-danger" role="alert">Harap aktifkan akses webcam Anda!</div>
									</div>

									<?php if($lihat_santri->foto == '') : ?>
										<div id="alert-container" class="mb-4" style="display: none;">
                           		 <div class="alert alert-warning" role="alert">Santri ini tidak memiliki foto, silakan melakukan perekaman foto</div>
                        		</div>
									<?php endif; ?>
                        <!-- Webcam & Actions Section -->
                        <div id="main-content" style="display: none;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-primary text-white text-center">Pratinjau Kamera</div>
                                        <div class="card-body text-center">
                                            <video id="video" class="border mb-3" width="100%" autoplay></video>
                                            <canvas id="canvas" width="640" height="480" style="display:none;"></canvas>
                                            <button id="capture" class="btn btn-success btn-block"> <i class="fa-solid fa-camera"></i> Ambil Gambar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-secondary text-white text-center">Crop Foto</div>
                                        <div class="card-body text-center">
                                            <img id="photo" class="img-fluid mb-3" alt="Captured Photo" style="display:none;">
                                            <div id="crop-container" style="display:none;">
                                                <img id="crop-image" class="img-fluid" alt="Image for Cropping">
                                            </div>
                                            <button id="cropPhoto" class="btn btn-warning btn-block mt-3" style="display:none;"> <i class="fa-solid fa-crop"></i> Crop Foto</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header bg-info text-white text-center">Pengunggahan Foto</div>
                                        <div class="card-body text-center">
                                            <button id="uploadPhoto" class="btn btn-primary btn-block" style="display:none;"><i class="fa-solid fa-upload"></i> Unggah Foto</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <!-- Other Santri Details -->
                        <div class="alert alert-success">
                            <b>Data Santri:</b>
                        <div class="  row">
                                            <div class=" container col-md-8">

                                            <?php if ($lihat_santri == null) : ?>
                                                <p>PIlih santri terlebih dahulu</p>
                                                <?php else : ?>
                                                     <table class="table table-bordered">
                                                    <tr>
                                                        <th>Nama</th>
                                                        <td><?php echo $lihat_santri->nama_lengkap_santri; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tempat Lahir</th>
                                                        <td><?php echo $lihat_santri->tempat_lahir; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Tanggal Lahir</th>
                                                        <td><?php echo $lihat_santri->tanggal_lahir; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Alamat</th>
                                                        <td><?php echo $lihat_santri->alamat_dusun . ', ' . $lihat_santri->alamat_desa . ', ' . $lihat_santri->alamat_kecamatan . ', ' . $lihat_santri->alamat_kabupaten . ', ' . $lihat_santri->alamat_provinsi; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status Santri</th>
                                                        <td><?php echo $lihat_santri->status_santri; ?></td>
                                                    </tr>
                                                </table>
											<a href="javascript:void(0);" onclick="window.open('<?php echo base_url('data_santri/cetak_kts') ?>', '_blank', 'width=800,height=600');" class="btn btn-success">Cetak Kartu Tanda Santri</a>
											<a href="javascript:void(0);" onclick="window.open('<?php echo base_url('data_santri/cetak_kts_belakang') ?>', '_blank', 'width=800,height=600');" class="btn btn-success">Cetak Belakang Kartu Tanda Santri</a>

                                           
                                                    <?php endif ?>
                                               
                                            </div>
                                            <div class="col-md-4">
                                                   <?php if ($lihat_santri == null) : ?>
                                              
                                                <?php else : ?>
                                                   
													<?php if ($lihat_santri->foto == ''): ?>
															<div class="alert alert-danger" role="alert">
															Santri ini belum mengunggah foto diri
															</div>

													<?php else : ?>
                                                        <img src="<?php echo base_url($lihat_santri->foto); ?>" alt="Foto Santri" width="160px" class="img-fluid mx-auto d-block">
														<?php endif; ?>
                                                    <?php endif ?>
                                            </div>
                                        </div>
                                                    
												
											</div>
											<?php endif ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


<!-- js webcam dan kawan kawan -->

 <!-- Bootstrap JS and Dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Cropper.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>


 <script>
    $(document).ready(function () {
        const video = $('#video')[0];
        const canvas = $('#canvas')[0];
        const photo = $('#photo')[0];
        const cropImage = $('#crop-image')[0];
        let cropper;

        // Cek akses webcam
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;

                // Jika akses berhasil
                $('#main-content').show(); // Tampilkan konten utama
                $('#alert-container').hide(); // Sembunyikan alert
            })
            .catch(error => {
                console.error('Webcam access denied:', error);

                // Jika akses gagal
                $('#main-content').hide(); // Sembunyikan konten utama
                $('#alert-container').show(); // Tampilkan alert
            });

        // Capture photo
        $('#capture').click(function () {
            const context = canvas.getContext('2d');
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            const dataURL = canvas.toDataURL('image/png');
            $('#photo').attr('src', dataURL).show();
            $('#crop-container').show();
            $('#cropPhoto').show();

            // Initialize cropper
            cropImage.src = dataURL;
            cropper = new Cropper(cropImage, {
                viewMode: 1,
                scalable: true,
            });
        });

        // Crop photo
        $('#cropPhoto').click(function () {
            const croppedCanvas = cropper.getCroppedCanvas();
            const croppedDataURL = croppedCanvas.toDataURL('image/png');

            $('#photo').attr('src', croppedDataURL);
            $('#uploadPhoto').show();
            cropper.destroy(); // Remove cropper after cropping
        });

        // Upload photo
        $('#uploadPhoto').click(function () {
            const dataURL = $('#photo').attr('src');

            // Kirim data gambar yang sudah dipotong ke backend untuk disimpan
            $.ajax({
                url: '<?php echo base_url('data_santri/upload_foto_kts') ?>',
                type: 'POST',
                data: {
                    image: dataURL // Mengirimkan gambar dalam format base64
                },
                success: function (response) {
                    const responseObj = JSON.parse(response); // Menangani respons dari backend
                    if (responseObj.status) {
                        alert(responseObj.message); // Menampilkan pesan sukses
                    } else {
                        alert(responseObj.message); // Menampilkan pesan kesalahan
                    }
                },
                error: function () {
                    alert('Failed to upload image.');
                }
            });
        });
    });
</script>



<!-- js webcam dan kawan kawan -->
