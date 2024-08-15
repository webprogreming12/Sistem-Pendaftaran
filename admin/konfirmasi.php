<?php 
include('header.php');
$id=$_GET['id'];
    $sql_user = "SELECT * FROM pendaftaran where id_pendaftaran = '$id'";
    $result_user = mysqli_query($koneksi, $sql_user);

        if(mysqli_num_rows($result_user)){
            $data= mysqli_fetch_array($result_user);
             
    }
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Admin</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Data Admin</h4></div>
              <div class="card-body">

                <form method="POST" action="aksi" class="needs-validation" novalidate="" target="_blank">
                  <input type="hidden" name="id" value="<?= $data['id_pendaftaran']; ?>">
                    <div class="form-group">
                      <label for="frist_name" class="d-block text-primary">No Telpn</label>
                      <input id="frist_name" type="text" class="form-control" name="tlpn" value="<?= $data['telepon']; ?>" tabindex="1" autofocus required>
                    </div>

                    <div class="form-group ">
                      <label for="last_name" class="d-block text-primary">Nama</label>
                      <input id="last_name" type="text" class="form-control" name="nama" value="<?= $data['nama_lengkap']; ?>" tabindex="2" required>

                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Pesan</label>
                        <input id="last_name" type="text" class="form-control" name="pesan" tabindex="2" required>
                    </div>
                  <div class="form-group">
                    <button  name="btn-konfirmasi" class="btn btn-primary btn-sm">
                      Konfirmasi
                    </button>
                    <a href="data_pendaftaran" class="btn btn-danger btn-sm">Kembali</a>
                  </div>
                </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>