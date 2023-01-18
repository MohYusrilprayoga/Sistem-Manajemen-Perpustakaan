<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIM Perpus</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
  .section-details-header {
    min-height: 310px;
    background: #e4e6eb;
    margin-top: -70px;
  }

  .section-details-content {
    margin-top: -210px;
    min-height: 100vh;
  }

  .section-details-content .breadcrumb {
    background-color: transparent;
    padding: 0;
    margin-bottom: 30px;
  }

  .section-details-content .breadcrumb-item:active {
    font-weight: bold;
    color: #071C4D;
  }

  .section-details-content .card-details {
    padding: 30px;
    border-radius: 11px;
  }

  .section-details-content .card-details h1 {
    font-size: 26px;
  }

  .section-details-content .card-details h2 {
    font-size: 20px;
  }

  .section-details-content .card-details p {
    font-size: 18px;
    color: #b1b1b1;
  }

  .section-details-content .features {
    margin-top: 20px;
  }

  .section-details-content .features h3 {
    font-size: 18px;
    color: #071C4D;
    margin-bottom: 0;
  }

  .section-details-content .features p {
    margin-bottom: 0;
  }

  .section-details-content .features .description {
    margin-left: 10px;
    overflow: hidden;
    float: left;
  }

  .section-details-content .features .features-image {
    width: 45px;
    height: 45px;
    float: left;
  }

  .section-details-content .gallery .xzoom-container {
    display: block;
  }

  .section-details-content .gallery .xzoom-container .xzoom {
    width: 100%;
    box-shadow: none;
    margin-bottom: 10px;
  }

  .section-details-content .gallery .xzoom-container .xactive {
    border: 2px solid #1abc9c;
    box-shadow: none;
  }

  .section-details-content .features {
    margin-top: 20px;
  }

  .section-details-content .features h3 {
    font-size: 18px;
    color: #071c4d;
    margin-bottom: 0;
  }

  .section-details-content .features p {
    margin-bottom: 0;
  }

  .section-details-content .features .description {
    margin-left: 10px;
    overflow: hidden;
    float: left;
  }

  .section-details-content .features .features-image {
    width: 45px;
    height: 45px;
    float: left;
  }

  .section-details-content .join-container {
    margin-top: -16px;
  }

  .section-details-content .btn-join-now {
    background-color: #FF9E53;
    color: #fff;
    border-radius: 0;
  }

  .section-details-content .btn-join-now:hover {
    color: #fff;
  }
</style>

<body>
  <?php include 'frontend/layout/navbar.php' ?>
  <!-- main -->
  <main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1><strong>Surat Terakhir Untuk Jokowi</strong></h1>
              <p>
                Mardigu Wowiek
              </p>

              <div class="gallery">
                <div class="xzoom-container">
                  <img class="xzoom" id="xzoom-default" src="frontend/images/list1.jpg" xoriginal="frontend/images/list1.jpg" />
                </div>
                <h2>Sinposis Surat Terakhir Untuk Jokowi</h2>
                <p class="text-justify">
                    Not Found
                </p>
                <div class="features row">
                  <div class="col-md-4 ">
                    <div class="description">
                      <h3>Address</h3>
                      <p>Not Found</p>
                    </div>
                  </div>
                  <div class="col-md-4 border-start">
                    <div class="description">
                      <h3>Languange</h3>
                      <p>Bahasa Indonesia</p>
                    </div>
                  </div>
                  <div class="col-md-4 border-start">
                    <div class="description">
                      <h3>Email</h3>
                      <p>mardiguwp@gmail.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details card-right rounded-top" style="border-radius: 0;">
              <h2 class="text-center">Members</h2>
              <hr />
              <h2>Book Informations</h2>
              <table class="trip-informations">
              <tr>
                  <th width="50%">Date of Release</th>
                  <td width="50%" class="text-right">Not Found</td>
                </tr>
                <tr>
                  <th width="50%">Type</th>
                  <td width="50%" class="text-right">Politic</td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">Free</td>
                </tr>
                <tr>
                  <th width="50%">Publisher</th>
                  <td width="50%" class="text-right">Mardiguwp</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <div class="d-grid gap-2">
                <a href="https://www.perpus.org/hukum-dan-politik/surat-terakhir-untuk-jokowi" class="btn btn-block btn-join-now mt-3 py-2">Read Now</a>
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>
  <!-- Akhir main -->

  <?php include 'frontend/layout/footer.php'; ?>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>