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
            <div>Profil</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Edit Profil</h4></div>
              <div class="card-body">
              <form method="post" action="aksi" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                <input type="hidden" name="id" value="<?= $data ['id_profil']; ?>">
                    <div class="form-group">
                      <label class="d-block text-primary">Gambar</label>
                       <img src="profil/<?= $data ['gambar']; ?>" style="width: 50px ;"><br>
                      <input class="form-control" type="file" name="gambar" id="formFile" >
                      <input type="hidden" name="fotolama" value="<?= $data['gambar']; ?>" >
                    </div>
                      <div class="form-group">
                      <label class="d-block text-primary">link Youtube</label>
                      <input class="form-control" type="text" value="<?= $data ['youtube'] ?>" name="youtube" id="formFile" >
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Deskripsi</label>
                      <textarea class="summernote-simple" name="deskripsi"><?= $data['deskripsi']; ?></textarea>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button name="btn-profil" class="btn btn-primary btn-sm">Ubah</button>
                    <a href="data_profil" class="btn btn-danger btn-sm">Batal</a>
                  </div>
              </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>