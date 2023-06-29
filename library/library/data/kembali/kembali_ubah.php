<?php
    include "../../header.php";
    $id = $_GET['id'];
$edit = "select * from peminjaman where kd_pinjam = '$id'";
$hasil = mysqli_query($koneksi, $edit);
$data = mysqli_fetch_array($hasil);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Edit Data Peminjaman Koleksi Buku
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form action="pinjam_ubah_aksi.php" method="GET">
                    <!-- isi field tabel -->
                  <div class="form-group">
                    <label for="">KODE PINJAM</label>
                    <input type="text" class="form-control" placeholder="Masukan Kode Pinjam" name="kd_pinjam" value="<?php echo $data['kd_pinjam']?>" readonly>
                  </div>
                  <div class="form-group">
                  <label class="my-1 mr-2" for="">NIS (Pilih NIS Sesuai Nama Anggota)</label>
                    <select class="custom-select my-1 mr-sm-2" name="nis" id="">
                      <option selected><?php echo $data['nis']?></option>
                      <?php
                          $nis_query = mysqli_query($koneksi,"select * from anggota");
                          while($nis_data = mysqli_fetch_array($nis_query))
                          {
                      ?>     
                          <option value="<?php echo $nis_data['nis']?>">
                              <?php echo /*$nis_data['nis'],"-",*/ $nis_data['nama_anggota']?>
                          </option>    
                      <?php
                          }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="my-1 mr-2" for="">NAMA ANGGOTA</label>
                    <select class="custom-select my-1 mr-sm-2" name="nama_anggota" id="">
                      <option selected> <?php echo $data['nama_anggota']?></option>
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
                  <label class="my-1 mr-2" for="">KODE BUKU (Pilih Kode Buku Berdasarkan Judul Buku)</label>
                    <select class="custom-select my-1 mr-sm-2" name="kd_buku" id="">
                      <option selected><?php echo $data['kd_buku']?></option>
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
                      <option selected><?php echo $data['judul']?></option>
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
                  <label class="my-1 mr-2" for="">ID Pustakawan (Pilih ID sesuai Nama Pustakawan)</label>
                    <select class="custom-select my-1 mr-sm-2" name="id_pustakawan" id="">
                      <option selected><?php echo $data['id_pustakawan']?></option>
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
                    <select class="custom-select my-1 mr-sm-2" name="nama_pustakawan" id="" >
                      <option selected><?php echo $data['nama_pustakawan']?></option>
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
                    <input type="date" class="form-control" placeholder="Tanggal Peminjaman Buku" name="tgl_pinjam" value="<?php echo $data['tgl_pinjam']?>">
                  </div>
                  <div class="form-group">
                    <label for="">TANGGAL PENGEMBALIAN</label>
                    <input type="date" class="form-control" placeholder="Tanggal Pengembalian Buku" name="tgl_kembali" value="<?php echo $data['tgl_kembali']?>">
                  </div>
                  <input type="submit" name="" id="" class="btn btn-warning" value="Ubah Data">
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