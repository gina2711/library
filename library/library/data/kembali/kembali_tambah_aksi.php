<?php
    include "../../koneksi.php";

    $kd=$_GET['kd_pinjam'];
    $nis=$_GET['nis'];
    $nama_anggota=$_GET['nama_anggota'];
    $kd_buku=$_GET['kd_buku'];
    $judul=$_GET['judul'];
    $id_pustakawan=$_GET['id_pustakawan'];
    $nama_pustakawan=$_GET['nama_pustakawan'];
    $tgl_pinjam=$_GET['tgl_pinjam']; 
    $tgl_kembali=$_GET['tgl_kembali']; 
    

    $input = "insert into peminjaman (kd_pinjam,nis,nama_anggota,kd_buku,judul,id_pustakawan,
    nama_pustakawan,tgl_pinjam,tgl_kembali)"
        . "values ('$kd','$nis','$nama_anggota','$kd_buku','$judul','$id_pustakawan','$nama_pustakawan','$tgl_pinjam','$tgl_kembali')";
    $hasil = mysqli_query($koneksi, $input);

if ($hasil) {
    header("location:data_pinjam.php");
    
}
 else {
    echo 'data tidak berhasil';
}

?>