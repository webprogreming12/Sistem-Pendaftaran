<?php 
include('header.php');
$jml_pendaftar = mysqli_query($koneksi,"SELECT * FROM user");
// cek jml
if (!$jml_pendaftar) {
    die('Error'.mysqli_error($koneksi));
}

 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Data Pendaftaran</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Data User</h4></div>
              <div class="card-body">
              	<table class="table table-bordered table-hover text-center" id="dataTable" width="100%" cellspacing="0" style="font-size:15px;">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
              
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                while ($p = mysqli_fetch_array($jml_pendaftar)) { ?>
                    <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $p ['nama_user'] ?></td>
                    <td><?= $p ['username'] ?></td>
                    <td><?= $p ['password'] ?></td>
                    
                   </tr>
                <?php    
                }
                    if (mysqli_num_rows($jml_pendaftar) == 0){

                        echo "<tr><td colspan='4'><b>Belum ada akun baru</b></tr></tr>";
                    }

                ?>
                </tbody>
    </table>
              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>
