<?php 
include('header.php');
    $id=$_GET['id'];
    $sql_organisasi = "SELECT * FROM organisasi where id_organisasi = '$id'";
    $result_organisasi = mysqli_query($koneksi, $sql_organisasi);

        if(mysqli_num_rows($result_organisasi)){
            $data= mysqli_fetch_array($result_organisasi);
             
    }
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Struktur Organisasi</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Edit Struktur Organisasi</h4></div>
              <div class="card-body">
              <form method="post" action="aksi" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                <input type="hidden" name="id" value="<?= $data ['id_organisasi']; ?>">
                    <div class="form-group">
                    <div class="form-group">
                      <label class="d-block text-primary"></label>
                       <img src="foto_organisasi/<?= $data ['gambar_or']; ?>" style="width: 50px ;"><br>
                      <input class="form-control" type="file" name="gambar" id="formFile" >
                      <input type="hidden" name="fotolama" value="<?= $data['gambar_or']; ?>" >
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Nama Lengkap</label>
                      <input class="form-control" type="text" name="nama" value="<?= $data['nama'] ?>" id="formFile" >
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Jabatan</label>
                      <input class="form-control" type="text" name="jabatan" value="<?= $data['jabatan'] ?>" id="formFile" >
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Status</label>
                      <input class="form-control" type="text" name="status" value="<?= $data['status'] ?>" id="formFile" >
                    </div>
                  </div>
                  <div class="card-footer">
                    <button name="btn-edit-organisasi" class="btn btn-primary btn-sm">Ubah</button>
                    <a href="data_organisasi" class="btn btn-danger btn-sm">Batal</a>
                  </div>
              </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>