<?php
    include "../../header.php";
    $id = $_GET['id'];
$edit = "select * from buku where kd_buku = '$id'";
$hasil = mysqli_query($koneksi, $edit);
$data = mysqli_fetch_array($hasil);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Edit Data Koleksi Buku
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form action="buku_ubah_aksi.php" method="GET">
                    <!-- isi field tabel -->
                  <div class="form-group">
                    <label for="">KODE BUKU</label>
                    <input type="text" class="form-control" placeholder="Masukan Kode buku" name="kd_buku" value="<?php echo $data['kd_buku']?>">
                  </div>
                  <div class="form-group">
                    <label for="">JUDUL BUKU </label>
                    <input type="text" class="form-control" placeholder="Masukan Judul Buku" name="judul" value="<?php echo $data['judul']?>">
                  </div>
                  <div class="form-group">
                    <label for="">PENGARANG</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Pengarang" name="pengarang" value="<?php echo $data['pengarang']?>">
                  </div>
                  <div class="form-group">
                    <label for="">PENERBIT</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Penerbit" name="penerbit" value="<?php echo $data['penerbit']?>">
                  </div>
                  <div class="form-group">
                    <label for="">TAHUN TERBIT</label>
                    <input type="text" name="thn_terbit" rows="5" cols="30" class="form-control" placeholder="Masukan Tahun Terbit Buku" value="<?php echo$data['thn_terbit']?>">
                  </div>
                  <div class="form-group">
                    <label class="my-1 mr-2" for="">KATEGORI</label>
                      <select class="custom-select my-1 mr-sm-2" name="kategori" value="<?php echo $data['kategori']?>" id="">
                        <option selected><?php echo $data['kategori']?></option>
                        <option value="UMUM">UMUM</option>
                        <option value="BUDAYA">BUDAYA</option>
                        <option value="KOMPUTER">KOMPUTER</option>
                        <option value="SOSIAL">SOSIAL</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="">BANYAK ITEM</label>
                    <input type="text" name="bnyk_item" rows="5" cols="30" class="form-control" placeholder="Masukan Banyak Buku Yang Tersedia" value="<?php echo$data['bnyk_item']?>">
                  </div>
                  <div class="form-group">
                    <label class="my-1 mr-2" for="">NO RAK</label>
                      <select class="custom-select my-1 mr-sm-2" name="no_rak" value="<?php echo $data['no_rak']?>" id="">
                        <option selected><?php echo $data['no_rak']?></option>
                        <option value="1A">1A</option>
                        <option value="2A">2A</option>
                        <option value="3B">3B</option>
                        <option value="4B">4B</option>
                      </select>
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