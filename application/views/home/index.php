<html lang="en">
  <head>
    <!-- css -->
    <style>
    /* CSS style for Navbar */
    .navbar{
        position: relative;
        z-index: 1;
    }

    .navbar-brand{
        font-family: 'Dancing Script', cursive;
        font-size: 32px;
    }

    .nav-link{
        text-transform: uppercase;
        margin-right: 40px;
    }

    .nav-link:hover{
        border-bottom: 3px solid #4e73df;
        padding-bottom: 3px;
    }

    .navbar-brand, .nav-link{
        color: black !important;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    }

    /* CSS style for utilities */
    .button{
        text-transform: uppercase;
        border-radius: 25px;
    }

    /* CSS style for jumbotron */
    .jumbotron{
        background-image: url(<?=base_url('assets/img/pexels-shiny-diamond-3762642')?>);
        background-size: cover;
        height: 720px;
        position: relative;
    }

    .jumbotron .display-4{
        color: white;
        text-align: left;
        margin-top: 25px;
        font-weight: 350;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
    }

    .jumbotron .display-4 span{
        font-weight: 500;
    }

    .jumbotron::after{
        content: '';
        display: block;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(to top, rgba(0,0,0,1), rgba(0,0,0,0));
        position: absolute;
        bottom: 0;
    }

    .jumbotron .container{
        z-index: 1;
        position: relative;
    }

    /* CSS style for Workingspace */
    .info-panel{
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.5);
        border-radius: 12px;
        margin-top: 100px;
        background-color: white;
        padding: 30px
    }

    .info-panel img{
        width: 200px;
        height: 150px;
        margin-bottom: 10px;
        margin-top: 10px;

    }

    .info-panel h4{
        margin-top: 10px;
        margin-right: 5px;
    }

    .info-panel p{
        margin-top: 5px;
    }
    </style>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Fonts that will be used -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Lobster&display=swap" rel="stylesheet">

    <!-- Our CSS -->

    <title><?=$title?> | BBC</title>
  </head>
  <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Berkah Beauty Clinic</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="<?=base_url()?>">Home</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Features
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?=base_url()?>caridokter">Cari Dokter</a></li>
                <li><a class="dropdown-item" href="<?=base_url()?>toko">Toko</a></li>
              </ul>
            </li>
            <a class="nav-link" href="<?=base_url()?>about">About</a>
            <a class="btn btn-primary button" href="<?=base_url()?>auth/login">Login</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <br><br><br>
        <h1 class="display-4">Butuh rekomendasi Skin Care dari Dokter Profesional? <br> <span>Berkah Beauty Clinic</span> jawabannya!</h1>
    </div>

    <br><br><br>

    <!-- Start container -->
    <div class="container">
      <!-- Workingspace -->
      <div class="row justify-content-center">
        <div class="col-lg-15 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="<?=base_url();?>assets/img/doctor.png" alt="Doctor" class="float-left">
            </div>
            <div class="col-lg">
              <h4>Cari Dokter</h4>
              <p>Ingin konsultasi dengan dokter namun terkendala waktu? Hubungi dokter pilihanmu disini!</p>
              <a class="btn btn-primary button" href="<?=base_url();?>caridokter">Cari Dokter</a>
            </div>
            <div class="col-lg">
              <img src="<?=base_url();?>assets/img/skincare.png" alt="Skincare" class="float-left">
            </div>
            <div class="col-lg">
              <h4>Beli Produk BBC</h4>
              <p>Ingin memanjakan wajahmu dengan produk kecantikan kami? Klik disini untuk mendapatkan daftar produk kecantikan kami!</p>
              <a class="btn btn-primary button" href="<?=base_url();?>toko">Beli Produk</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End container -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>