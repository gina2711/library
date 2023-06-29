<?php
include "../../koneksi.php";

$id = $_GET['kd_buku'];
$judul = $_GET['judul'];
$pengarang = $_GET['pengarang'];
$penerbit = $_GET['penerbit'];
$thn_terbit = $_GET['thn_terbit'];
$kategori=$_GET['kategori'];
$bnyk_item=$_GET['bnyk_item'];
$no_rak=$_GET['no_rak'];
$update  = "update buku set judul ='$judul',pengarang ='$pengarang',penerbit ='$penerbit', 
thn_terbit = '$thn_terbit', kategori='$kategori',bnyk_item='$bnyk_item',no_rak='$no_rak' where  kd_buku = '$id'";

$hasil = mysqli_query($koneksi, $update);

if ($hasil){
     header("location:data_buku.php");
}
 else {
    echo "Update data gagal";
}

?>

?>