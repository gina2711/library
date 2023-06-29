<?php
    include "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Data Siswa
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                <a href="#" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="col">
                  <form action="" class="form-inline float-right">
                    <input type="text" class="form-control" placeholder="Cari Data">
                    <input type="button" class="btn btn-primary ml-2"value="Cari">
                  </form>
                </div>
              </div>
            <!-- <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a> -->
            <div class="row mt-3">
              <div class="col">
                <table class="table table-bordered table-striped">
                <tr>
                  <!-- header tabel -->
                  <th> No</th>
                  <th>NIS</th>
                  <th>Nama Siswa</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                </tr>
                <!-- isi tabel -->
                <td> 1 </td>
                <td> 2647 </td>
                <td> Gina Nur R </td>
                <td> 6 </td>
                <td> Perempuan </td>
                <td> Gedong, JAKTIM </td>
                </table>
              </div>
            </div>
            </div>
          </div>
        </div>
    </div>
</div>


<?php
    include "footer.html"
?>