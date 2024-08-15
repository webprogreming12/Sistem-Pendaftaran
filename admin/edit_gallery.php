<?php 
include('header.php');
    $id=$_GET['id'];
    $sql_gallery = "SELECT * FROM gallery where id_gallery = '$id'";
    $result_gallery = mysqli_query($koneksi, $sql_gallery);

        if(mysqli_num_rows($result_gallery)){
            $data= mysqli_fetch_array($result_gallery);
             
    }
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Berita</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Edit Berita</h4></div>
              <div class="card-body">
              <form method="post" action="aksi" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                <input type="hidden" name="id" value="<?= $data ['id_gallery']; ?>">
                    <div class="form-group">
                    <div class="form-group">
                      <label class="d-block text-primary"></label>
                       <img src="gallery/<?= $data ['foto']; ?>" style="width: 50px ;"><br>
                      <input class="form-control" type="file" name="gambar" id="formFile" >
                      <input type="hidden" name="fotolama" value="<?= $data['foto']; ?>" >
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Tanggal</label>
                      <input class="form-control" type="date" name="tanggal" value="<?= $data['tanggal'] ?>" id="formFile" >
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Deskripsi</label>
                      <textarea class="summernote-simple" name="deskripsi"><?= $data['keterangan']; ?></textarea>
                    </div>

                  </div>
                  <div class="card-footer">
                    <button name="btn-edit-gallery" class="btn btn-primary btn-sm">Ubah</button>
                    <a href="data_gallery" class="btn btn-danger btn-sm">Batal</a>
                  </div>
              </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>