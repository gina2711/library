<?php
    include "../../koneksi.php";

    $kode=$_GET['kd_buku'];
    $judul=$_GET['judul'];
    $pengarang=$_GET['pengarang']; 
    $penerbit=$_GET['penerbit']; 
    $thn_terbit=$_GET['thn_terbit'];  
    $kategori=$_GET['kategori'];
    $bnyk_item=$_GET['bnyk_item'];
    $no_rak=$_GET['no_rak'];

    $input = "insert into buku (kd_buku,judul,pengarang,penerbit,thn_terbit,kategori,bnyk_item,no_rak)"
        . "values ('$kode','$judul','$pengarang','$penerbit','$thn_terbit','$kategori','$bnyk_item','$no_rak')";
    $hasil = mysqli_query($koneksi, $input);

if ($hasil) {
    header("location:data_buku.php");
    
}
 else {
    echo 'data tidak berhasil';
}

?>