<?php
    include "../../koneksi.php";

    $nis=$_GET['nis'];
    $nama_anggota=$_GET['nama_anggota'];
    $kelas=$_GET['kelas']; 
    $jk=$_GET['jk']; 
    $alamat=$_GET['alamat'];  

    $input = "insert into anggota (nis,nama_anggota,kelas,jns_klmn,alamat)"
        . "values ('$nis','$nama_anggota','$kelas','$jk','$alamat')";
    $hasil = mysqli_query($koneksi, $input);

if ($hasil) {
    header("location:data_anggota.php");
    
}
 else {
    echo 'data tidak berhasil';
}

?>