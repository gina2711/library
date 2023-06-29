<?php
    include "../../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Tambah Data Pengembalian
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form action="kembali_tambah_aksi.php" method="GET" >
                    <!-- isi field tabel -->
                  <div class="form-group">
                    <label for="">KODE KEMBALI</label>
                    <input type="text" class="form-control" placeholder="Masukan ID kembali" name="kd_kembali">
                  </div>
                  <div class="form-group">
                  <label class="my-1 mr-2" for="">KODE PINJAM</label>
                    <select class="custom-select my-1 mr-sm-2" name="kd_pinjam" id="" >
                      <option hidden>Pilih Kode Pinjam</option>
                      <?php
                          $pinjam_query = mysqli_query($koneksi,"select * from peminjaman");
                          while($pinjam_data = mysqli_fetch_array($pinjam_query))
                          {
                      ?>     
                          <option value="<?php echo $pinjam_data['kd_pinjam']?>">
                              <?php echo /*$nis_data['nis'],"-",*/ $pinjam_data['kd_pinjam']?>
                          </option>    
                      <?php
                          }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="my-1 mr-2" for="">NIS</label>
                    <select class="custom-select my-1 mr-sm-2" name="nis" id="">
                      <option hidden>Pilih NIS Anggota Berdasarkan Nama Anggota</option>
                      <?php
                          $nis_query = mysqli_query($koneksi,"select * from peminjaman where kd_pinjam='$pinjam_data'");
                          while($nis_data = mysqli_fetch_array($nis_query))
                          {
                      ?>     
                          <option value="<?php echo $nis_data['nis']?>">
                              <?php echo /*$nis_data['nis'],"-",*/ $nis_data['nis']?>
                          </option>    
                      <?php
                          }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="my-1 mr-2" for="">NAMA ANGGOTA</label>
                    <select class="custom-select my-1 mr-sm-2" name="nama_anggota" id="">
                      <option hidden>Pilih Nama Anggota</option>
                      <?php
                          $nis_query = mysqli_query($koneksi,"select * from anggota");
                          while($nis_data = mysqli_fetch_array($nis_query))
                          {
                      ?>     
                          <option value="<?php echo $nis_data['nama_anggota']?>">
                              <?php echo $nis_data['nama_anggota']?>
                          </option>    
                      <?php
                          }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="my-1 mr-2" for="">KODE BUKU</label>
                    <select class="custom-select my-1 mr-sm-2" name="kd_buku" id="">
                      <option hidden>Pilih Kode Buku Berdasarkan Judul Buku</option>
                      <?php
                          $buku_query = mysqli_query($koneksi,"select * from buku");
                          while($buku_data = mysqli_fetch_array($buku_query))
                          {
                      ?>     
                          <option value="<?php echo $buku_data['kd_buku']?>">
                              <?php echo /*$buku_data['kd_buku'],"-",*/ $buku_data['judul']?>
                          </option>    
                      <?php
                          }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="my-1 mr-2" for="">JUDUL BUKU</label>
                    <select class="custom-select my-1 mr-sm-2" name="judul" id="">
                      <option hidden>Pilih Judul Buku </option>
                      <?php
                          $buku_query = mysqli_query($koneksi,"select * from buku");
                          while($buku_data = mysqli_fetch_array($buku_query))
                          {
                      ?>     
                          <option value="<?php echo $buku_data['judul']?>">
                              <?php echo $buku_data['judul']?>
                          </option>    
                      <?php
                          }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="my-1 mr-2" for="">ID Pustakawan</label>
                    <select class="custom-select my-1 mr-sm-2" name="id_pustakawan" id="">
                      <option hidden>Pilih ID Pustakawan berdasarkan Nama Pustakawan</option>
                      <?php
                          $pustakawan_query = mysqli_query($koneksi,"select * from pustakawan");
                          while($pustakawan_data = mysqli_fetch_array($pustakawan_query))
                          {
                      ?>     
                          <option value="<?php echo $pustakawan_data['id_pustakawan']?>">
                              <?php echo /*$pustakawan_data['id_pustakawan'],"-",*/ $pustakawan_data['nama_pustakawan']?>
                          </option>    
                      <?php
                          }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="my-1 mr-2" for="">NAMA PUSTAKAWAN</label>
                    <select class="custom-select my-1 mr-sm-2" name="nama_pustakawan" id="">
                      <option hidden>Pilih Nama Pustakawan</option>
                      <?php
                          $pustakawan_query = mysqli_query($koneksi,"select * from pustakawan");
                          while($pustakawan_data = mysqli_fetch_array($pustakawan_query))
                          {
                      ?>     
                          <option value="<?php echo $pustakawan_data['nama_pustakawan']?>">
                              <?php echo $pustakawan_data['nama_pustakawan']?>
                          </option>    
                      <?php
                          }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">TANGGAL PEMINJAMAN</label>
                    <input type="date" class="form-control" placeholder="Tanggal Peminjaman Buku" name="tgl_kembali">
                  </div>
                  <div class="form-group">
                    <label for="">TANGGAL PENGEMBALIAN</label>
                    <input type="date" class="form-control" placeholder="Tanggal Pengembalian Buku" name="tgl_kembali">
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