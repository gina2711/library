<?php
    include "../../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Tambah Data Siswa
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form action="anggota_tambah_aksi.php" method="GET">
                    <!-- isi field tabel -->
                  <div class="form-group">
                    <label for="">NIS</label>
                    <input type="text" class="form-control" placeholder="NIS" name="nis">
                  </div>
                  <div class="form-group">
                    <label for="">NAMA SISWA</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" name="nama_anggota">
                  </div>
                  <div class="form-group">
                    <label for="">KELAS</label>
                    <input type="text" class="form-control" placeholder="Kelas" name="kelas">
                  </div>
                  <div class="form-group">
                    <label for="">JENIS KELAMIN</label>
                    <input type="radio" name="jk" class="ml-5" value="Laki-Laki"> Laki-Laki <input type="radio" name="jk" class="ml-5" value="Perempuan">Perempuan
                  </div>
                  <div class="form-group">
                    <label for="" class="text-center">ALAMAT</label>
                    <textarea name="alamat" rows="5" cols="30" class="form-control"placeholder="Alamat Lengkap"></textarea>
                  </div>
                  <input type="submit" name="" id="" class="btn btn-success" value="Simpan Data">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>


<?php
    include "../../footer.html"
?>