<?php 
include('header.php');
$gallery = mysqli_query($koneksi,"SELECT * FROM gallery");
// cek jml
if (!$gallery) {
    die('Error'.mysqli_error($koneksi));
}

 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Gallery</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Data Gallery</h4>
                 <a href="tambah_gallery"class="btn btn-primary btn-sm float-right">Tambah Data</a>
              </div>
              <div class="card-body">
              <table class="table table-bordered table-hover text-center" style="font-size:15px;">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Deskripsi</th>
                    <th>tanggal</th>
                    <th>Aksi</th>
              
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                while ($p = mysqli_fetch_array($gallery)) { ?>
                    <tr>
                    <td><?= $no++ ?></td>
                    <td><img src="gallery/<?= $p ['foto'] ?>" style="width: 90px;"></td>
                    <td><?= $p ['keterangan'] ?></td>
                    <td><?= $p ['tanggal'] ?></td>
                    <td><a href="edit_gallery?id=<?= $p['id_gallery'] ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-compose"></i></a>
                      <a href="hapus_gallery?id=<?= $p['id_gallery'] ?>"  onclick="return confirm('Apa anda yakin hapus data ini ?')" class="btn btn-danger btn-action mr-1" data-toggle="tooltip" title="Hapus"><i class="ion ion-compose"></i></a></td>
                    
                   </tr>
                <?php    
                }
                    if (mysqli_num_rows($gallery) == 0){

                        echo "<tr><td colspan='6'><b>Belum ada akun baru</b></tr></tr>";
                    }

                ?>
                </tbody>
    </table>
              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>
