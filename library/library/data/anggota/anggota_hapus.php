<?php
    //koneksikan dengan database
    include "../../koneksi.php";

    //ambil idbuku yang akan dihapus sebagai referensi
    $nis=$_GET['id'];

    //query untuk menghapus data buku
    mysqli_query($koneksi,"delete from anggota where nis='$nis'");

    //arahkan ke halaman data buku setelah menghapus 1 data buku
    header("location:data_anggota.php");
?>