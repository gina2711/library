<?php
    include "../../header.php";
    $tampil = "select * from peminjaman";
	
?>

<!-- <div class="container"> -->
    <div class="row ml-4 mr-4">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Data Peminjaman Buku Perpustakaan
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                <a href="pinjam_tambah.php" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="col">
                  <form class="form-inline float-right" method="GET">
                    <input type="text" class="form-control" placeholder="Cari Data" name="kata_kunci">
                    <input type="submit" class="btn btn-info ml-2" name="cari" value="Cari">
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
                  <th class="text-center">No</th>
                  <th class="text-center">Kode Pinjam</th>
                  <th class="text-center">NIS</th>
                  <th class="text-center">Nama Anggota</th>
                  <th class="text-center">Kode Buku</th>
                  <th class="text-center">Judul</th>
                  <th class="text-center">ID Pustakawan</th>
                  <th class="text-center">Nama Pustakawan</th>
                  <th class="text-center">Tanggal Peminjaman</th>
                  <th class="text-center">Tanggal Pengembalian</th>
                  <th colspan="2" class="text-center">Aksi</th>
                </tr>
                <!-- isi tabel -->
                <?php
                    if(isset($_GET['cari'])){
                        $keyword=$_GET['kata_kunci'];
                        $hasil=mysqli_query($koneksi,"select * from peminjaman where kd_pinjam like '$keyword'
                        or nis like '$keyword'
                        or nama_anggota like '$keyword'
                        or kd_buku like '$keyword'
                        or judul like '$keyword'
                        or id_pustakawan like '$keyword'
                        or nama_pustakawan like '$keyword'
                        or tgl_pinjam like '$keyword'
                        or tgl_kembali like '$keyword'");
                    }else{
                        $hasil=mysqli_query($koneksi, $tampil);
                    }
                    $no=1;
                    while ($ambil_data=mysqli_fetch_array($hasil)) {
                    
                ?>
                <tr>
                <td class="text-center"> <?php echo $no++?></td>
                <td> <?php echo $ambil_data['kd_pinjam'];?></td>
                <td> <?php echo $ambil_data['nis'];?> </td>
                <td> <?php echo $ambil_data['nama_anggota'];?> </td>
                <td> <?php echo $ambil_data['kd_buku'];?></td>
                <td> <?php echo $ambil_data['judul'];?></td>
                <td> <?php echo $ambil_data['id_pustakawan'];?></td>
                <td> <?php echo $ambil_data['nama_pustakawan'];?></td>
                <td> <?php echo $ambil_data['tgl_pinjam'];?></td>
                <td> <?php echo $ambil_data['tgl_kembali'];?></td>
                <td class="text-center"> <a href="pinjam_ubah.php?id=<?php echo $ambil_data['kd_pinjam'];?>" class="btn btn-warning">Ubah</a></td>
                <td class="text-center"> <a href="pinjam_hapus.php?id=<?php echo $ambil_data['kd_pinjam'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data pinjam ?')" class="btn btn-danger">Hapus</a> </td>
                </tr>
                <?php
                    }
                ?>
                </table>
              </div>
            </div>
            <div class="row text-center"> 
                  <div class="col">
                  <a href="pinjam_cetak.php" class="btn btn-secondary">Cetak Data</a>
                  </div>
                </div> 
            </div>
          </div>
        </div>
    </div>
<!-- </div> -->


<?php
    include "../../footer.html"
?>