<?php
    $koneksi=mysqli_connect("localhost","root","","db_perpustakaan");
    if (!$koneksi){
        echo "Koneksi Gagal";
    }
?>