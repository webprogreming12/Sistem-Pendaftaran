<?php 
include('header.php');
$profil = mysqli_query($koneksi,"SELECT * FROM informasi");
// cek jml
if (!$profil) {
    die('Error'.mysqli_error($koneksi));
}
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Informasi</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Data Informasi</h4></div>
              <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Deskrips</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while ($p = mysqli_fetch_array($profil)) {?>
                        <td><?= $p['deskripsi_info']?></td>
                        <td>
                          <a href="edit_informasi?id=<?= $p['id_info'] ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-compose"></i></a></td>
                      </tbody>
                     <?php } ?>                    
                    </table>
                </div>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>