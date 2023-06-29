<?php
include "../../koneksi.php";

$kd_pinjam=$_GET['kd_pinjam'];
$nis=$_GET['nis'];
$nama_anggota=$_GET['nama_anggota'];
$kd_buku=$_GET['kd_buku'];
$judul=$_GET['judul'];
$id_pustakawan= $_GET['id_pustakawan'];
$nama_pustakawan = $_GET['nama_pustakawan'];
$tgl_pinjam=$_GET['tgl_pinjam'];
$tgl_kembali=$_GET['tgl_kembali'];

$update  = "update peminjaman set nis ='$nis',nama_anggota ='$nama_anggota',
kd_buku ='$kd_buku', judul = '$judul', id_pustakawan='$id_pustakawan', nama_pustakawan='$nama_pustakawan',
tgl_pinjam='$tgl_pinjam',tgl_kembali='$tgl_kembali' where  kd_pinjam = '$kd_pinjam'";

$hasil = mysqli_query($koneksi, $update);

if ($hasil){
     header("location:data_pinjam.php");
}
 else {
    echo "Update data gagal";
}

?>
