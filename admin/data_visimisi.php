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
            <div>Visi & Misi</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Data Visi & Misi</h4></div>
              <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Visi</th>
                          <th>Misi</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody> 
                      <?php while ($p = mysqli_fetch_array($profil)) { ?>
                        <td><?= $p['visi'] ?></td>
                        <td><?= $p['misi'] ?></td>
                        <td><a href="edit_visimisi?id=<?= $p['id_profil']?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="ion ion-compose"></i></a></td>
                      <?php } ?>                        
                      </tbody>
                    </table>
                </div>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>