<?php
include "../../koneksi.php";

$id = $_GET['nis'];
$nama = $_GET['nama_anggota'];
$kelas = $_GET['kelas'];
$jns_klmn = $_GET['jk'];
$alamat = $_GET['alamat'];
$update  = "update anggota set nama_anggota ='$nama',kelas ='$kelas',jns_klmn ='$jns_klmn', alamat = '$alamat' where  nis = '$id'";

$hasil = mysqli_query($koneksi, $update);

if ($hasil){
     header("location:data_anggota.php");
}
 else {
    echo "Update data gagal";
}

?>

?>