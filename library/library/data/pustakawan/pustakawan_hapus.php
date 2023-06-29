<?php
    //koneksikan dengan database
    include "../../koneksi.php";

    //ambil idbuku yang akan dihapus sebagai referensi
    $id_pustakawan=$_GET['id'];

    //query untuk menghapus data buku
    mysqli_query($koneksi,"delete from pustakawan where id_pustakawan='$id_pustakawan'");

    //arahkan ke halaman data buku setelah menghapus 1 data buku
    header("location:data_pustakawan.php");
?>