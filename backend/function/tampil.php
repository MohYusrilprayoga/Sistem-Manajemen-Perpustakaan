<?php
require 'koneksi.php';

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../styles/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>SIM Perpus</title>
</head>

<body>

  <?php include '../layout/navbar.php' ?>
  <main>
    <div class="container-fluid mt-3">
      <div class="card bg-light">
        <div class="card-body">
          <h1 class="text-center">Data Mahasiswa</h1>
          <a href="tambah.php" class="btn btn-primary mb-2">Tambah Data</a>
          <?php
          if (@$_GET['tambah'] == 'sukses') {
            $color = 'success';
            $msg = 'Data Mahasiswa berhasil di tambah';
          } elseif (@$_GET['update'] == 'sukses') {
            $color = 'info';
            $msg = 'Data Mahasiswa berhasi di ubah';
          } elseif (@$_GET['delete'] == 'sukses') {
            $color = 'danger';
            $msg = 'Data Mahasiswa berhasil di hapus';
          } else {
            $msg = '';
          }

          $limit = 4;
          if (@$_GET['hal'] == '') {
            $offset = 0;
            $hal = 1;
            $no = 1;
          } else {
            $offset = ($_GET['hal'] - 1) * $limit;
            $hal = $_GET['hal'];
            $no = $offset + 1;
          }

          if (@$_POST['cari']) {
            $cari = $_POST['cari'];
            $mahasiswa = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE 
                      nama LIKE '%$cari%'
                      OR nim LIKE '%$cari%'
                      OR email LIKE '%$cari%'
                      OR telp LIKE '%$cari%'
                      ORDER BY nama ASC ") or die(mysqli_error($konek));
          } else {
            $mahasiswa = mysqli_query($konek, "SELECT * FROM mahasiswa ORDER BY nama ASC  LIMIT $offset, $limit") or die(mysqli_error($konek));
          }
          ?>

          <?php
          if ($msg != '') { ?>
            <div class="alert alert-<?= $color ?> alert-dismissible fade show" role="alert">
              <?= $msg ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

          <?php } ?>
          <form action="" method="post">
            <div class="form-row align-items-center">
              <div class="col-auto">
                <input type="text" name="cari" class="form-control mb-2" id="cari" placeholder="Cari data">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary mb-2" type="submit">Cari</button>
              </div>
            </div>
          </form>
          <table class="table table-sm table-striped">
            <tr>
              <th>No.</th>
              <th>NIM</th>
              <th>Profile</th>
              <th>Nama Mahasiswa</th>
              <th>Email</th>
              <th>Telp</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>Menu</th>
            </tr>

            <?php
            $mahasiswa_tot = mysqli_query($konek, "SELECT * FROM mahasiswa") or die(mysqli_error($konek));

            $no = 1;
            $total = mysqli_num_rows($mahasiswa_tot);
            require 'fungsi.php';
            foreach ($mahasiswa as $row) : {

                $jk = ($row['jk'] == 'L') ? 'Laki-laki' : 'Perempuan';
                $foto = ($row['foto'] == '') ? 'no-profile.jpg' : $row['foto'];
            ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $row["nim"] ?></td>
                  <td><img src="../../frontend/images/<?= $foto ?>" width="75" alt=""></td>
                  <td><?= $row["nama"] ?></td>
                  <td><?= $row["email"] ?></td>
                  <td><?= $row["telp"] ?></td>
                  <td><?= $jk ?></td>
                  <td><?= hitung_umur($row["tanggal_lahir"]) ?></td>
                  <td>
                    <div class="btn-group" role="group" aria-label="basic example">
                      <a href="tambah.php?id=<?= $row['id_mahasiswa']; ?>" class="btn btn-info">Edit</a>
                      <a href="simpan.php?id=<?= $row['id_mahasiswa']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
                    </div>
                  </td>
                </tr>

              <?php $no++;
              } ?>
            <?php endforeach ?>
          </table>
          <p>Total Data : <?= $total; ?></p>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <?php
              $jml_hal = ceil($total / $limit);
              for ($i = 1; $i <= $jml_hal; $i++) {
                if ($i != $hal) {
              ?>
                  <li class="page-item">
                    <a href="tampil.php?hal=<?= $i ?>" class="page-link"><?= $i ?></a>
                  </li>
                <?php
                } else {
                ?>
                  <li class="page-item active">
                    <a class="page-link"><?= $i ?></a>
                  </li>
              <?php
                }
              }
              ?>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </main>
  <?php include '../layout/footer.php' ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>