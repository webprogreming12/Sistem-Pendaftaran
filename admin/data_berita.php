<?php 
include('header.php');
$berita = mysqli_query($koneksi,"SELECT * FROM berita");
// cek jml
if (!$berita) {
    die('Error'.mysqli_error($koneksi));
}

 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Barita</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Data Berita</h4>
                 <a href="tambah_berita"class="btn btn-primary btn-sm float-right">Tambah Data</a>
              </div>
              <div class="card-body">
              <table class="table table-bordered table-hover" style="font-size:15px;">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                     <th>Tanggal</th>
                    <th>Aksi</th>
              
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                while ($p = mysqli_fetch_array($berita)) { ?>
                    <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $p ['judul'] ?></td>
                    <td><?php echo (str_word_count($p['deskripsi_ber']) > 60 ? substr($p['deskripsi_ber'],0,300)."" : $p['deskripsi_ber']) ?></td>
                    <td><img src="gambar/<?= $p ['gambar'] ?>" style="width: 90px;"></td>
                    <td><?= $p ['tgl'] ?></td>
                    <td><a href="edit_berita?id=<?= $p['id_berita'] ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-compose"></i></a>
                      <a href="hapus_berita?id=<?= $p['id_berita'] ?>" onclick="return confirm('Apa anda yakin hapus data ini ?')" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="Hapus"><i class="ion ion-compose"></i></a></td>
                    
                   </tr>
                <?php    
                }
                    if (mysqli_num_rows($berita) == 0){

                        echo "<tr><td colspan='6'><center><b>Belum ada akun baru</b></center></tr></tr>";
                    }

                ?>
                </tbody>
    </table>
              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>
