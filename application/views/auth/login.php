<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Geofisika Denpasar</title>
        <link rel="icon" type="image/x-icon" href="<?php echo  base_url('gambar/logo bmkg.png') ?>">
        <style>
            .btn-color{
            background-color: #0e1c36;
            color: #fff;
            
            }

            .profile-image-pic{
            height: 200px;
            width: 200px;
            object-fit: cover;
            }



            .cardbody-color{
            background-color: #ebf2fa;
            }

            a{
            text-decoration: none;
            }
        </style>
</head>

<body>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login</h2>
        <!-- <div class="text-center mb-5 text-dark">Made with bootstrap</div> -->
        <div class="card my-5">

          <form class="card-body cardbody-color p-lg-5"  action="<?php echo base_url('auth/login_page')?>" method="post" >

            <div class="text-center">
              <img src="https://cdn.pixabay.com/photo/2016/03/31/19/56/avatar-1295397__340.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
            <?php echo $this->session->flashdata('pesan'); ?>
            <div class="mb-3">
              <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                placeholder="User Name" name="username">
                <?form_error('username' , '<small class="text-danger pl-3">','</small>');?>
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" placeholder="password" name="password">
              <?=form_error('password' , '<small class="text-danger pl-3">','</small>');?>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
        
          </form>
        </div>

      </div>
    </div>
  </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>