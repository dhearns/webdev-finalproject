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
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
<div class="container">

<div class="row mt-3">
    <div class="col md-6">
        <form action="" method="POST">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari produk" name="keyword">
            <button class="btn btn-dark" type="submit">Cari</button>
        </div>
        </form>
    </div>
</div> 

<div class="col-md-13">
<div class="list-group">
<?php foreach($toko as $produk) : ?>
  <a href="<?= base_url(); ?>toko/detail/<?= $produk['id']; ?>" class="list-group-item list-group-item-action" aria-current="true">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?= $produk['nama']; ?></h5>
      <small>Tersedia</small>
    </div>
    <small>Rp. <?= $produk['harga']; ?></small>
  </a>
<?php endforeach; ?>

</div>
</div>
</div>
