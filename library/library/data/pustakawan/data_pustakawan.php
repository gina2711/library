<?php
    include "../../header.php";
    $tampil = "select * from pustakawan ";
	
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12" style="min-height:600px;">
          <div class="card mt-3">
            <div class="card-header ">
            Data Pustakawan Perpustakaan
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                <a href="pustakawan_tambah.php" class="btn btn-primary">Tambah Data</a>
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
                  <th class="text-center">ID Pustakawan</th>
                  <th class="text-center">Nama Pustakawan</th>
                  <th class="text-center">Tanggal Lahir</th>
                  <th class="text-center">Jenis Kelamin</th>
                  <th class="text-center">Alamat</th>
                  <th class="text-center">No. HP</th>
                  <th class="text-center">Aksi</th>
                </tr>
                <!-- isi tabel -->
                <?php
                    if(isset($_GET['cari'])){
                        $keyword=$_GET['kata_kunci'];
                        $hasil=mysqli_query($koneksi,"select * from pustakawan where id_pustakawan like '$keyword'
                        or nama_pustakawan like '$keyword'
                        or ttl like '$keyword'
                        or jns_klmn like '$keyword'
                        or alamat like '$keyword'
                        or no_hp like '$keyword' order by id_pustakawan");
                    }else{
                        $hasil=mysqli_query($koneksi, $tampil);
                    }
                    $no=1;
                    while ($ambil_data=mysqli_fetch_array($hasil)) {
                    
                ?>
                <tr>
                <td class="text-center"> <?php echo $no++?></td>
                <td> <?php echo $ambil_data['id_pustakawan'];?></td>
                <td> <?php echo $ambil_data['nama_pustakawan'];?> </td>
                <td> <?php echo $ambil_data['ttl'];?> </td>
                <td> <?php echo $ambil_data['jns_klmn'];?></td>
                <td> <?php echo $ambil_data['alamat'];?></td>
                <td> <?php echo $ambil_data['no_hp'];?></td>
                <td class="text-center"> <a href="pustakawan_ubah.php?id=<?php echo $ambil_data['id_pustakawan'];?>" class="btn btn-warning">Ubah</a> 
                <a href="pustakawan_hapus.php?id=<?php echo $ambil_data['id_pustakawan'];?>" onclick="return confirm('Apa Anda yakin akan menghapus Data pustakawan ?')" class="btn btn-danger">Hapus</a> </td>
                </tr>
                <?php
                    }
                ?>
                </table>
              </div>
            </div>
            <div class="row text-center"> 
                  <div class="col">
                  <a href="pustakawan_cetak.php" class="btn btn-secondary">Cetak Data</a>
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