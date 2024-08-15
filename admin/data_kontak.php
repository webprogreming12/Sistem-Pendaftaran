<?php 
include('header.php');
$kontak = mysqli_query($koneksi,"SELECT * FROM kontak");
// cek jml
if (!$kontak) {
    die('Error'.mysqli_error($koneksi));
}
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Kontak</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Data Kontak</h4></div>
              <div class="card-body">

                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Location</th>
                          <th>Email</th>
                          <th>Call</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php while ($p = mysqli_fetch_array($kontak)) {?>
                        <td><?= $p ['alamat'] ?></td>
                        <td><?= $p ['email'] ?></td>
                        <td><?= $p ['tlpn'] ?></td>
                        <td>
                          <a href="edit_kontak?id=<?= $p['id_kontak'] ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit" ><i class="ion ion-compose"></i></a></td>
                      </tbody>
                     <?php } ?>                    
                    </table>
                </div>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>