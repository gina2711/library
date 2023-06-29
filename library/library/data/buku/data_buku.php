<?php
    include "../../header.php";
    $tampil = "select * from buku ";
	
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Data Koleksi Buku Perpustakaan
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                <a href="buku_tambah.php" class="btn btn-primary">Tambah Data</a>
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
                  <th class="text-center">Kode buku</th>
                  <th class="text-center">Judul</th>
                  <th class="text-center">Pengarang</th>
                  <th class="text-center">Penerbit</th>
                  <th class="text-center">Tahun Terbit</th>
                  <th class="text-center">Kategori</th>
                  <th class="text-center">Banyak Item</th>
                  <th class="text-center">No Rak</th>
                  <th colspan='2' class="text-center">Aksi</th>
                </tr>
                <!-- isi tabel -->
                <?php
                    if(isset($_GET['cari'])){
                        $keyword=$_GET['kata_kunci'];
                        $hasil=mysqli_query($koneksi,"select * from buku where kd_buku like '$keyword'
                        or judul like '$keyword'
                        or pengarang like '$keyword'
                        or penerbit like '$keyword'
                        or thn_terbit like '$keyword'
                        or kategori like '$keyword'
                        or bnyk_item like '$keyword'
                        or no_rak like '$keyword' order by kd_buku");
                    }else{
                        $hasil=mysqli_query($koneksi, $tampil);
                    }
                    $no=1;
                    while ($ambil_data=mysqli_fetch_array($hasil)) {
                    
                ?>
                <tr>
                <td class="text-center"> <?php echo $no++?></td>
                <td> <?php echo $ambil_data['kd_buku'];?></td>
                <td> <?php echo $ambil_data['judul'];?></td>
                <td> <?php echo $ambil_data['pengarang'];?> </td>
                <td> <?php echo $ambil_data['penerbit'];?></td>
                <td> <?php echo $ambil_data['thn_terbit'];?></td>
                <td> <?php echo $ambil_data['kategori'];?></td>
                <td> <?php echo $ambil_data['bnyk_item'];?></td>
                <td> <?php echo $ambil_data['no_rak'];?></td>
                <td class="text-center"> <a href="buku_ubah.php?id=<?php echo $ambil_data['kd_buku'];?>" class="btn btn-warning">Ubah</a></td>
                <td class="text-center"> <a href="buku_hapus.php?id=<?php echo $ambil_data['kd_buku'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data buku ?')" class="btn btn-danger">Hapus</a> </td>
                </tr>
                <?php
                    }
                ?>
                </table>
              </div>
            </div>
            <div class="row text-center"> 
                  <div class="col">
                  <a href="buku_cetak.php" class="btn btn-secondary">Cetak Data</a>
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