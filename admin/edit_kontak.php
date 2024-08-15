<?php 
include('header.php');
    $id=$_GET['id'];
    $sql_kontak = "SELECT * FROM kontak where id_kontak = '$id'";
    $result_kontak = mysqli_query($koneksi, $sql_kontak);

        if(mysqli_num_rows($result_kontak)){
            $data= mysqli_fetch_array($result_kontak);
             
    }
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Kontak</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header"><h4>Edit Kontak</h4></div>
              <div class="card-body">
              <form method="post" action="aksi" enctype="multipart/form-data" class="needs-validation" novalidate="" >
                <input type="hidden" name="id" value="<?= $data ['id_kontak']; ?>">
                    <div class="form-group">
                      <label class="d-block text-primary">Location</label>
                      <input class="form-control" type="text" value="<?= $data ['alamat'] ?>" name="alamat" id="formFile" >
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">Email</label>
                      <input class="form-control" type="text" value="<?= $data ['email'] ?>" name="email" id="formFile" >
                    </div>
                    <div class="form-group">
                      <label class="d-block text-primary">No Telp</label>
                      <input class="form-control" type="text" value="<?= $data ['tlpn'] ?>" name="tlpn" id="formFile" >
                    </div>
                  </div>
                  <div class="card-footer">
                    <button name="btn-telp" class="btn btn-primary btn-sm">Ubah</button>
                    <a href="data_kontak" class="btn btn-danger btn-sm">Batal</a>
                  </div>
              </form>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>