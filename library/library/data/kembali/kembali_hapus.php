<?php
    //koneksikan dengan database
    include "../../koneksi.php";

    //ambil idbuku yang akan dihapus sebagai referensi
    $kd_pinjam=$_GET['id'];

    //query untuk menghapus data buku
    mysqli_query($koneksi,"delete from peminjaman where kd_pinjam='$kd_pinjam'");

    //arahkan ke halaman data buku setelah menghapus 1 data buku
    header("location:data_pinjam.php");
?>