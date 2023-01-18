<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_mhs";

    $konek = mysqli_connect($hostname, $username, $password, $database);
    if(!$konek)
    {
        echo"connection failed";
    }

?>