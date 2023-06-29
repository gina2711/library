<?php
    include "../../koneksi.php";

    $id=$_GET['id_pustakawan'];
    $nama_pustakawan=$_GET['nama_pustakawan'];
    $ttl=$_GET['ttl']; 
    $jk=$_GET['jk']; 
    $alamat=$_GET['alamat'];  
    $nohp=$_GET['no_hp'];

    $input = "insert into pustakawan (id_pustakawan,nama_pustakawan,ttl,jns_klmn,alamat,no_hp)"
        . "values ('$id','$nama_pustakawan','$ttl','$jk','$alamat','$nohp')";
    $hasil = mysqli_query($koneksi, $input);

if ($hasil) {
    header("location:data_pustakawan.php");
    
}
 else {
    echo 'data tidak berhasil';
}

?>