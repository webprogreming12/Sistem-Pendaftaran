<?php 
include('header.php');
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Struktur Organisasi</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Input Data Struktur Organisasi</h4></div>
              <div class="card-body">
              <form method="post" action="aksi" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                    <div class="form-group">
                      <label class="d-block text-primary">Gambar</label>
                      <input class="form-control" type="file" name="gambar" id="formFile" required>
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Nama Lengkap</label>
                      <input class="form-control" type="text" name="nama" id="formFile" required>
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Jabatan</label>
                      <input class="form-control" type="text" name="jabatan" id="formFile" required>
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Status</label>
                      <input class="form-control" type="text" name="status" id="formFile" required>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button name="btn-tambah_organisasi" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="data_organisasi" class="btn btn-danger btn-sm">Batal</a>
                  </div>
              </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>