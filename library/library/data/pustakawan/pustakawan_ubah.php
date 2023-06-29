<?php
    include "../../header.php";
    $id = $_GET['id'];
$edit = "select * from pustakawan where id_pustakawan = '$id'";
$hasil = mysqli_query($koneksi, $edit);
$data = mysqli_fetch_array($hasil);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Edit Data Pustakawan
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form action="pustakawan_ubah_aksi.php" method="GET">
                    <!-- isi field tabel -->
                  <div class="form-group">
                    <label for="">ID PUSTAKAWAN</label>
                    <input type="text" class="form-control" placeholder="Masukan ID Pustakawan" name="id_pustakawan" value="<?php echo $data['id_pustakawan']?>">
                  </div>
                  <div class="form-group">
                    <label for="">NAMA PUSTAKAWAN </label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap Pustakawan" name="nama_pustakawan" value="<?php echo $data['nama_pustakawan']?>">
                  </div>
                  <div class="form-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="ttl" value="<?php echo $data['ttl']?>">
                  </div>
                  <div class="form-group">
                    <label for="">JENIS KELAMIN</label>
                    <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jk" value="<?php echo $data['jns_klmn']?>">
                    <!-- <input type="radio" name="jk" class="ml-5" value="Laki-Laki"> Laki-Laki <input type="radio" name="jk" class="ml-5" value="Perempuan">Perempuan -->
                  </div>
                  <div class="form-group">
                    <label for="">ALAMAT</label>
                    <textarea name="alamat" rows="5" cols="30" class="form-control" placeholder="Alamat Lengkap"><?php echo$data['alamat']?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">NO HANDPHONE</label>
                    <input type="text" class="form-control" placeholder="No HandPhone" name="no_hp" value="<?php echo $data['no_hp']?>">
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