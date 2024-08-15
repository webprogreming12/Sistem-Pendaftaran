<?php 
include('header.php');
    $id=$_GET['id'];
    $sql_info = "SELECT * FROM informasi where id_info = '$id'";
    $result_info = mysqli_query($koneksi, $sql_info);

        if(mysqli_num_rows($result_info)){
            $data= mysqli_fetch_array($result_info);
             
    }
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Informasi</div>
          </h1>
            <div class="card card-primary">
              <div class="card-header"><h4>Edit Informasi</h4></div>
              <div class="card-body">
              <form method="post" action="aksi" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                <input type="hidden" name="id" value="<?= $data ['id_info']; ?>">
                      <div class="form-group">
                      <label class="d-block text-primary">Informasi Pendaftaran</label>
                      <textarea class="summernote-simple" name="deskripsi"><?= $data['deskripsi_info']; ?></textarea>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button name="btn-info" class="btn btn-primary btn-sm">Ubah</button>
                    <a href="data_informasi" class="btn btn-danger btn-sm">Batal</a>
                  </div>
              </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>