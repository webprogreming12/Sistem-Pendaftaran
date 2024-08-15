<?php 
include('header.php');
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Gallery</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Input Data Gallery</h4></div>
              <div class="card-body">
              <form method="post" action="aksi" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                    <div class="form-group">
                      <label class="d-block text-primary">Gambar</label>
                      <input class="form-control" type="file" name="gambar" id="formFile" required>
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Tanggal</label>
                      <input class="form-control" type="date" name="tanggal" id="formFile" required>
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Deskripsi</label>
                      <textarea class="summernote-simple" name="deskripsi" required></textarea>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button name="btn-tambah_gallery" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="data_berita" class="btn btn-danger btn-sm">Batal</a>
                  </div>
              </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>