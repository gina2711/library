<?php
    include "../../header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Tambah Data Pustakawan
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form action="pustakawan_tambah_aksi.php" method="GET">
                    <!-- isi field tabel -->
                  <div class="form-group">
                    <label for="">ID PUSTAKAWAN</label>
                    <input type="text" class="form-control" placeholder="Masukan ID Pustakawan" name="id_pustakawan">
                  </div>
                  <div class="form-group">
                    <label for="">Nama PUSTAKAWAN</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap Pustakawan" name="nama_pustakawan">
                  </div>
                  <div class="form-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="ttl">
                  </div>
                  <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-sm-2 pt-0">JENIS KELAMIN</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-Laki" >
                          <label class="form-check-label" for="">
                            Laki-Laki
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan">
                          <label class="form-check-label" for="">
                            Perempuan
                          </label>
                        </div>
                      </div>
                    </div>
                  </fieldset>
                  <!-- <div class="form-group">
                    <label for="">JENIS KELAMIN</label>
                    <input type="radio" name="jk" class="ml-5" value="Laki-Laki"> Laki-Laki <input type="radio" name="jk" class="ml-5" value="Perempuan">Perempuan
                  </div> -->
                  <div class="form-group">
                    <label for="" class="text-center">ALAMAT</label>
                    <textarea name="alamat" rows="5" cols="30" class="form-control"placeholder="Alamat Lengkap"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="" class="text-center">NO HANDPHONE (Whatsapp)</label>
                    <input type="text" name="no_hp" rows="5" cols="30" class="form-control"placeholder="No HandPhone (+62123456789)">
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