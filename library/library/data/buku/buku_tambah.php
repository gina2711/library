<?php
    include "../../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Tambah Data Koleksi Buku
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form action="buku_tambah_aksi.php" method="GET">
                    <!-- isi field tabel -->
                  <div class="form-group">
                    <label for="">KODE BUKU</label>
                    <input type="text" class="form-control" placeholder="Masukan Kode buku" name="kd_buku">
                  </div>
                  <div class="form-group">
                    <label for="">JUDUL</label>
                    <input type="text" class="form-control" placeholder="Judul Buku" name="judul">
                  </div>
                  <div class="form-group">
                    <label for="">PENGARANG</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Pengarang" name="pengarang">
                  </div>
                  <div class="form-group">
                    <label for="">PENERBIT</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Penerbit" name="penerbit">
                  </div>
                  <div class="form-group">
                    <label for="">TAHUN TERBIT</label>
                    <input type="text" class="form-control" placeholder="Masukan Tahun Terbit Buku" name="thn_terbit">
                  </div>
                  <div class="form-group">
                    <label class="my-1 mr-2" for="">KATEGORI</label>
                      <select class="custom-select my-1 mr-sm-2" name="kategori" id="">
                        <option selected>Pilih Kategori Buku</option>
                        <option value="UMUM">UMUM</option>
                        <option value="BUDAYA">BUDAYA</option>
                        <option value="KOMPUTER">KOMPUTER</option>
                        <option value="SOSIAL">SOSIAL</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="">BANYAK ITEM BUKU</label>
                    <input type="text" class="form-control" placeholder="Masukan Banyaknya Buku Yang Tersedia" name="bnyk_item">
                  </div>
                  <div class="form-group">
                    <label class="my-1 mr-2" for="">NO RAK BUKU</label>
                      <select class="custom-select my-1 mr-sm-2" name="no_rak" id="">
                        <option selected>Pilih No Rak Penyimpanan Buku</option>
                        <option value="1A">1A</option>
                        <option value="2A">2A</option>
                        <option value="3B">3B</option>
                        <option value="4B">4B</option>
                      </select>
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