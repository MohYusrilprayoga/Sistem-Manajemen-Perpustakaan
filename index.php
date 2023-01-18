<?php
    require "backend/function/koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SIM Perpus</title>
</head>

<body>
    <?php include 'frontend/layout/navbar.php'; ?>

    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br>
            Just by Reading A book
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br>
            moment you never see before
        </p>
        <a href="#shop" class="btn btn-get-started px-4 mt-4">
            <b>Get Started</b> 
        </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2 class="text-center">20K</h2>
                    <p class="text-center">Users</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2 class="text-center">6</h2>
                    <p class="text-center">Genre</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2 class="text-center">120</h2>
                    <p class="text-center">Book</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2 class="text-center">4</h2>
                    <p class="text-center">Favorite</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Recommended Book</h2>
                        <p>
                            Something that you never try
                            <br />
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/list1.jpg');">
                            <div class="travel-button mt-auto">
                                <a href="detail_buku2.php" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/list2.jpg');">
                            <div class="travel-button mt-auto">
                                <a href="detail_buku.php" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/list3.jpg');">
                            <div class="travel-button mt-auto">
                                <a href="detail_buku3.php" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image: url('frontend/images/list4.jpg');"">
                            <div class=" travel-button mt-auto">
                            <a href="detail_buku4.php" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="sesion" id="shop">
            <div class="container">
                <div class="row mb-3">
                    <div class="col mb-4 align-self-end">
                        <h1 class="mb-4">
                            Reading Now
                        </h1>
                        <h6 class="mb-5 fw-lighter" style="color: green;">
                            Temui Buku Berdasarkan Kategori Yang Kami Sediakan
                        </h6>
                    </div>
                </div>
            </div>
            <div class="container">
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Buku Disini" name="search" aria-label="search">
                    </div>
                </form>
            </div>
        </section>
        <section class="list-section" id="list-popular-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list5.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list6.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list7.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list8.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list9.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list10.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list11.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list12.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list13.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list14.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list15.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list16.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list17.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list18.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/list19.jpg');">
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-3 col-md-4 col-lg-3">
                        <a href="">
                        <div class="card-list-popular" style="background-image: url('frontend/images/lsit20.jpg');">
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'frontend/layout/footer.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>