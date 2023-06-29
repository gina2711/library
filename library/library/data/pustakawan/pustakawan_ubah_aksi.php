<?php
include "../../koneksi.php";

$id = $_GET['id_pustakawan'];
$nama_pustakawan = $_GET['nama_pustakawan'];
$ttl = $_GET['ttl'];
$jns_klmn = $_GET['jk'];
$alamat = $_GET['alamat'];
$nohp=$_GET['no_hp'];
$update  = "update pustakawan set nama_pustakawan ='$nama_pustakawan',ttl ='$ttl',jns_klmn ='$jns_klmn', alamat = '$alamat', no_hp='$nohp' where  id_pustakawan = '$id'";

$hasil = mysqli_query($koneksi, $update);

if ($hasil){
     header("location:data_pustakawan.php");
}
 else {
    echo "Update data gagal";
}

?>

?>