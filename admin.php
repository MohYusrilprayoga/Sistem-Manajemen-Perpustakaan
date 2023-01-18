<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="frontend/images/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SIM Perpus</title>
  </head>
  <style>
    html {
    scroll-behavior: smooth;
  }
  body {
    font-family: "poppins", sans-serif;
  }
  
  .navbar-brand img {
    max-height: 40px;
  }
  
  .navbar-light .navbar-nav .nav-link {
    color: #071c4d;
  }
  .navbar-light .navbar-nav .nav-link.active {
    font-weight: bold;
    color: #071c4d !important;
  }
  
  .btn-navbar-right {
    margin-top: -10px !important;
    margin-bottom: -8px !important;
    margin-right: -18px !important;
    height: 70px;
    border-radius: 0;
  }
  
  .btn-login {
    background-color: #071c4d;
    color: #fff;
  }
  .btn-login:hover {
    background-color: #1e3772;
    color: #fff;
  }
  
  .section-footer a {
    color: #071c4d;
    text-decoration: none;
  }
  .section-footer a:hover {
    color: #071c4d;
    text-decoration: underline;
  }
  </style>
  <body>
  
  <div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white shadow">
      <a class="navbar-brand" href="#">
        <img src="frontend/images/logo.png" alt="Logo SIM Perpus" />
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="navb">
        <ul class="navbar-nav ml-auto mr-3">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" aria-current="page" href="admin.php">Beranda</a>
          </li>
          <li class="nav-item dropdown mx-md-2">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Data Master
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="backend/function/tampil.php">Anggota</a></li>
              <li><a class="dropdown-item" href="backend/function/tambah_buku.php">Buku</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown mx-md-2">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Transaksi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Peminjaman</a></li>
              <li><a class="dropdown-item" href="#">Pengembalian</a></li>
            </ul>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#">Laporan</a>
          </li>
        </ul>

        <!-- Mobile button -->
        <form class="form-inline d-sm-block d-md-none">
          <button class="btn btn-login my-2 my-sm-0">
          <a href="backend/function/logout.php" style="color: white; text-decoration:none;">
            Log Out
            </a>
          </button>
        </form>
        <!-- Desktop Button -->
        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
          <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
          <a href="backend/function/logout.php" style="color: white; text-decoration:none;">
            Log Out
            </a>
          </button>
        </form>
      </div>
    </nav>
  </div>
     <main>
        <div class="container mt-3">
          <div class="card-bg-light">
          <div class="jumbotron">
            <h1 class="display-4">Hello, Admin!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="backend/function/tambah.php" role="button">+ Mahasiswa</a>
          </div>
          </div>
        </div>
     </main>
     <footer class="section-footer mt-4 mb-4 border-top">
      <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-3">
                <h5>FEATURES</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Reviews</a></li>
                  <li><a href="#">Community</a></li>
                  <li><a href="#">Social Media Kit</a></li>
                  <li><a href="#">Affiliate</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>ACCOUNT</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Refund</a></li>
                  <li><a href="#">Security</a></li>
                  <li><a href="#">Rewards</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>COMPANY</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Career</a></li>
                  <li><a href="#">Help Center</a></li>
                  <li><a href="#">Media</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-3">
                <h5>GET CONNECTED</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Yogyakarta</a></li>
                  <li><a href="#">Indonesia</a></li>
                  <li><a href="#">0821-2222-8888</a></li>
                  <li><a href="#">support@nomads.id</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid border-top">
        <div class="row justify-content-center align-items-center pt-4">
          <div class="col-auto text-gray-500 font-weight-light">
            2022 Copyright SIM Perpus • All rights reserved • Made in Yogyakarta
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>