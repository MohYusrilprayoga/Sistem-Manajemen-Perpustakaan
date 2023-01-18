<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'db_mhs';

    $koneksi = mysqli_connect($hostname, $username, $password, $db);
    if(!$koneksi)
    {
        echo'<script>alert ("koneksi gagal!")</script>';
    }