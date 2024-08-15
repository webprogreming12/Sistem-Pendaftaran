<?php 
include('header.php');
    $id=$_GET['id'];
    $sql_user = "SELECT * FROM profil where id_profil = '$id'";
    $result_user = mysqli_query($koneksi, $sql_user);

        if(mysqli_num_rows($result_user)){
            $data= mysqli_fetch_array($result_user);
             
    }
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Sejarah</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Edit Sejarah</h4></div>
              <div class="card-body">
              <form method="post" action="aksi" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                <input type="hidden" name="id" value="<?= $data ['id_profil']; ?>">
                      <div class="form-group">
                      <label class="d-block text-primary">Deskripsi</label>
                      <textarea class="summernote-simple" name="sejarah"><?= $data['sejarah']; ?></textarea>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button name="btn-sejarah" class="btn btn-primary btn-sm">Ubah</button>
                    <a href="data_sejarah" class="btn btn-danger btn-sm">Batal</a>
                  </div>
              </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>