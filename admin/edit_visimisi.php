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
            <div>Visi & Misi</div>
          </h1>
            <div class="card card-primary">
              <div class="card-header"><h4>Edit Visi & Misi</h4></div>
              <div class="card-body">
              <form method="post" action="aksi" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                <input type="hidden" name="id" value="<?= $data ['id_profil']; ?>">
                    <div class="form-group">
                      <label class="d-block text-primary">Visi</label>
                      <textarea class="summernote-simple" name="visi"><?= $data['visi']; ?></textarea>
                    </div>
                      <div class="form-group">
                      <label class="d-block text-primary">Misi</label>
                      <textarea class="summernote-simple" name="misi"><?= $data['misi']; ?></textarea>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button name="btn-visi" class="btn btn-primary btn-sm">Ubah</button>
                    <a href="data_visimisi" class="btn btn-danger btn-sm">Batal</a>
                  </div>
              </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>