<?php
    require 'koneksi.php';


    $nim  = @$_POST['nim'];
    $nama = @$_POST['nama'];
    $email = @$_POST['email'];
    $telp = @$_POST['telp'];
    $jk = @$_POST['jk'];
    $tanggal_lahir = @$_POST['tanggal_lahir'];


    if(@$_POST['id'])
    {
        $id = $_POST['id'];

        // jika ada file/foto yang diupload 
        if(@$_FILES['foto']['name'])
        {
            $tmp_foto = explode(".", $_FILES['foto']['name']);

            $foto = $nim.'.'.$tmp_foto[1];
            $new_foto = 'foto/'.$foto;
            move_uploaded_file($_FILES['foto']['tmp_name'], $new_foto);

        }
        // jika tidak ada file yang diupload
        else 
        {
            $foto = '';
        }
        $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', email='$email',jk = '$jk', foto = '$foto', telp='$telp', tanggal_lahir='$tanggal_lahir' WHERE id_mahasiswa = '$id'";
        mysqli_query($konek, $query) or die('error');
        header("location:tampil.php?update=sukses");
    }
    elseif(@$_GET['id'])
    {
        $id = $_GET['id'];
        mysqli_query($konek, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id'") or die(mysqli_error($konek));

        header("location: tampil.php?delete=sukses");
    }
    else {
         // jika ada file/foto yang diupload 
         if(@$_FILES['foto']['name'])
         {
             $tmp_foto = explode(".", $_FILES['foto']['name']);
 
             $foto = $nim.'.'.$tmp_foto[1];
             $new_foto = 'foto/'.$foto;
             move_uploaded_file($_FILES['foto']['tmp_name'], $new_foto);
 
         }
         // jika tidak ada file yang diupload
         else 
         {
             $foto = '';
         }
        
        $query = "INSERT INTO mahasiswa(nama, nim, email, jk, foto, telp, tanggal_lahir) VALUES ('$nama', '$nim', '$email','$jk', '$foto', '$telp', '$tanggal_lahir')";
        mysqli_query($konek, $query) or die('error');

        header("location: tampil.php?tambah=sukses");
    }
