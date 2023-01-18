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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>SIM Perpus</title>
</head>

<body>
    <?php include '../layout/navbar.php'; ?>

    <main>
        <div class="container mt-3">
            <div class="card bg-light">
                <div class="card-body">
                    <h1 class="text-center">Data Mahasiswa</h1>
                    <?php
                    if (@$_GET['id']) {
                        $id = $_GET['id'];
                        $query = mysqli_query($konek, "SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id'");
                        $mahasiswa = mysqli_fetch_array($query);
                    }
                    ?>
                    <form action="simpan.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" name="nim" value="<?= @$mahasiswa['nim']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= @$mahasiswa['nama']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="<?= @$mahasiswa['email']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="telp">Telp</label>
                            <input type="text" name="telp" value="<?= @$mahasiswa['telp']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" value="<?= @$mahasiswa['tanggal_lahir']; ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="jk_l" name="jk" value="L" class="custom-control-input">
                                <label class="custom-control-label" for="jk_l">Laki-laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="jk_p" name="jk" value="P" class="custom-control-input">
                                <label class="custom-control-label" for="jk_p">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto">Upload Foto : </label>
                            <input type="file" name="foto" id="foto">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?= @$mahasiswa['id_mahasiswa']; ?>">
                            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                            atau
                            <a href="tampil.php" style="color:grey;">Batal</a>
                        </div>
                    </form>
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