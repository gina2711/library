<?php 
  include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>My Library</title>
</head>

<body>
  <!-- awal navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">My Library</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../../template.html">Beranda <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Data Master
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../pustakawan/data_pustakawan.php">Pustakawan</a>
              <a class="dropdown-item" href="../anggota/data_anggota.php">Anggota</a>
              <a class="dropdown-item" href="../buku/data_buku.php">Koleksi Buku</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Transaksi
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../pinjam/data_pinjam.php">Peminjaman</a>
              <a class="dropdown-item" href="../kembali/data_kembali.php">Pengembalian</a>
              <a class="dropdown-item" href="denda.php">Bayar Denda</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="keluar.php">Keluar</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <h5 for="" style="color:white">SMP IT ASSALAAM </h5>
          <img class="img-responsive" width="60px" height="" src="../../logoSMPIT.png">
          <!-- <img width="130px" height="70px"src="{% static "gambar/logoSMPIT.png"%}"> -->
          <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Cari"> -->
          <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button> -->
        </form>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
