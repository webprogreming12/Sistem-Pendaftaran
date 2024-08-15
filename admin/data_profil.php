<?php 
include('header.php');
$profil = mysqli_query($koneksi,"SELECT * FROM profil");
// cek jml
if (!$profil) {
    die('Error'.mysqli_error($koneksi));
}
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Profil</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Data Profil</h4></div>
              <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Gambar</th>
                          <th>Deskrips</th>
                          <th>link Youtube</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while ($p = mysqli_fetch_array($profil)) {?>
                        <td><img src="profil/<?= $p['gambar']?>" style="width: 90px;"></td>
                        <td><?php echo (str_word_count($p['deskripsi']) > 60 ? substr($p['deskripsi'],1,300)."" : $p['deskripsi']) ?></td>
                        <td><?= $p ['youtube'] ?></td>
                        <td>
                          <a href="edit_profil?id=<?= $p['id_profil'] ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit" ><i class="ion ion-compose"></i></a></td>
                      </tbody>
                     <?php } ?>                    
                    </table>
                </div>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>