<?php
    //koneksikan dengan database
    include "../../koneksi.php";

    //ambil idbuku yang akan dihapus sebagai referensi
    $kd_buku=$_GET['id'];

    //query untuk menghapus data buku
    mysqli_query($koneksi,"delete from buku where kd_buku='$kd_buku'");

    //arahkan ke halaman data buku setelah menghapus 1 data buku
    header("location:data_buku.php");
?>