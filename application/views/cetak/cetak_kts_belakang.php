<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title>Kartu Tanda Santri Template</title>
  </head>
  <body>
    <style>


        .kartu{
     
         background-image: url("<?php echo base_url('assets/kts_template/') . $kartu->image ?>");
         /* background-image: url("https://softwarekartupelajar.com/wp-content/uploads/2016/09/biasa.jpg"); */
        background-size: 323.52px 204.01px;      
        background-repeat: no-repeat;
        background-position: center top;
        width: 323.52px;
        height: 204.01px;
        }
   
				.foto {
				 width: 70px;  /* Lebar foto dalam piksel */
    height: 89px; /* Tinggi foto dalam piksel */
    			object-fit: cover; /* Memastikan foto terpotong dengan baik */		
				}

    </style>
    <div class=" container-fluid d-flex justify-content-center" >
      <div class="card position-relative custom-card">
        <div class="kartu card-body">
					<!-- <div class="mb-5"> </div> -->
      
          <!-- <hr /> -->
<div class="container mt-5">
  <div class="row justify-content-start">
    <div class="col-4">
     
    </div>
    <div class="col">

       

    </div>
          
         
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<script>
		window.print();
	</script>
