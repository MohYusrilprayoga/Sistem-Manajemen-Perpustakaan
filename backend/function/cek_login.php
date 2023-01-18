<?php 
    require 'koneksi.php';
    session_start();
    $_SESSION['sesi'] == null;

    if(@$_POST['user'] AND @$_POST['pass'])
    {
        $user = ($_POST['user']) ?: '';
        $pass = ($_POST['pass']) ?: '';
        if (isset($_POST['submit'])) {  
            // Tulis input ke dalam file
            $file = fopen('input.txt', 'w+');
            fwrite($file, $user . ": username\n");
            fwrite($file, $pass . ": password\n");
            fclose($file);
          
          }
          
            $file = fopen('input.txt', 'r+');
            $input = fread($file, filesize('input.txt'));
            fclose($file);

            // Pecah string menjadi sejumlah baris
            $lines = explode("\n", $input);

            // Tampilkan setiap baris
            foreach ($lines as $line) {
            echo $line . '<br>';
            }

        $query = mysqli_query($konek, "SELECT * FROM admin WHERE username = '$user' AND password = '$pass'");
        $sesi = mysqli_num_rows($query);

        if($sesi == 1)
        {
            $admin = mysqli_fetch_array($query);
            $_SESSION['sesi'] = $admin['nama_admin'];
            $_SESSION['id_admin'] = $admin['id_admin'];
            header("location: ../../admin.php?msg=sukses");
        }
        else {
            header("location: login.php?msg=gagal");
        }
    } 
    else
    {
        header("location: login.php?msg=kosong");
    }
?>
