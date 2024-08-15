<?php 
include('header.php');
    $id=$_GET['id'];
    $sql_berita = "SELECT * FROM berita where id_berita = '$id'";
    $result_berita = mysqli_query($koneksi, $sql_berita);

        if(mysqli_num_rows($result_berita)){
            $data= mysqli_fetch_array($result_berita);
             
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
                <input type="hidden" name="id" value="<?= $data ['id_berita']; ?>">
                    <div class="form-group">
                      <label class="d-block text-primary">Judul</label>
                      <input class="form-control" type="text" name="judul" value="<?= $data['judul'] ?>" id="formFile" >
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Tanggal</label>
                      <input class="form-control" type="date" name="tanggal" value="<?= $data['tgl'] ?>" id="formFile" >
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Deskripsi</label>
                      <textarea class="summernote-simple" name="deskripsi"><?= $data['deskripsi_ber']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary"></label>
                       <img src="gambar/<?= $data ['gambar']; ?>" style="width: 50px ;"><br>
                      <input class="form-control" type="file" name="gambar" id="formFile" >
                      <input type="hidden" name="fotolama" value="<?= $data['gambar']; ?>" >
                    </div>
                  </div>
                  <div class="card-footer">
                    <button name="btn-edit-berita" class="btn btn-primary btn-sm">Ubah</button>
                    <a href="data_berita" class="btn btn-danger btn-sm">Batal</a>
                  </div>
              </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>