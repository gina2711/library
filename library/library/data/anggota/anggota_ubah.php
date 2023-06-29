<?php
    include "../../header.php";
    $id = $_GET['id'];
$edit = "select * from anggota where nis = '$id'";
$hasil = mysqli_query($koneksi, $edit);
$data = mysqli_fetch_array($hasil);
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Edit Data Siswa
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <form action="anggota_ubah_aksi.php" method="GET">
                    <!-- isi field tabel -->
                  <div class="form-group">
                    <label for="">NIS</label>
                    <input type="text" class="form-control" placeholder="NIS" name="nis" value="<?php echo $data['nis']?>">
                  </div>
                  <div class="form-group">
                    <label for="">NAMA SISWA</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap Siswa" name="nama_anggota" value="<?php echo $data['nama_anggota']?>">
                  </div>
                  <div class="form-group">
                    <label for="">KELAS</label>
                    <input type="text" class="form-control" placeholder="Kelas" name="kelas" value="<?php echo $data['kelas']?>">
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