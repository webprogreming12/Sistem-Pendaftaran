<?php 
include('header.php');

$id = $_GET['id'];
$sql_pendaftar = "SELECT * FROM pendaftaran where id_pendaftaran = '$id'";
$result_pendaftar = mysqli_query($koneksi, $sql_pendaftar);

        if(mysqli_num_rows($result_pendaftar)){
            $data= mysqli_fetch_array($result_pendaftar);
             
    }
 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Detail</div>
          </h1>
            <div class="card card-primary">
              <div class="card-header"><h4>Detail Siswa</h4></div>
              <div class="card-body">
                  <div class="row">
                    <div class="form-group col-4">
                      <label for="frist_name"  class="d-block text-primary">Nama Lengkap</label>
                      <input id="frist_name" type="text" class="form-control" name="nama" value="<?= $data['nama_lengkap'] ?>" disabled readonly>
                    </div>
                      <div class="form-group col-4">
                      <label for="frist_name"  class="d-block text-primary">Nama Pengilan</label>
                      <input id="frist_name" type="text" class="form-control" name="nama" value="<?= $data['nama_pangilan'] ?>" disabled readonly>
                    </div>
                    <div class="form-group col-4">
                      <label for="last_name"  class="d-block text-primary">Tempat Lahir</label>
                      <input id="last_name" type="text" class="form-control" name="tempat_lahir" value="<?= $data['tempat_lahir'] ?>"disabled readonly>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-4">
                      <label for="last_name"  class="d-block text-primary">Tanggal Lahir</label>
                      <input id="last_name" type="text" class="form-control" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?>" disabled readonly>
                    </div>
                    <div class="form-group col-4">
                      <label  class="d-block text-primary">Jenis Kelamin</label>
                      <input id="Orang_tua" type="text" class="form-control" name="kelamin" value="<?= $data['jenis_kl'] ?>" disabled readonly>
                    </div>
                    <div class="form-group col-4">
                      <label class="d-block text-primary">Agama</label>
                      <input id="Orang_tua" type="text" class="form-control" name="agama" value="<?= $data['agama'] ?>" disabled readonly>
                    </div>
                  </div>
                   <div class="row">
                    <div class="form-group col-6">
                      <label for="Orang_tua" class="d-block text-primary">Nama Lengkap Ayah</label>
                      <input id="Orang_tua" type="text" class="form-control" name="ayah" value="<?= $data['nama_ayah'] ?>" disabled readonly>
                    </div>
                    <div class="form-group col-6">
                      <label class="d-block text-primary">Pekerjaan Ayah</label>
                 <input id="Orang_tua" type="text" class="form-control" name="kerja_ayah" value="<?= $data['pekerjaan_ayah'] ?>" disabled readonly>
                    </div>
                      <div class="form-group col-6">
                      <label for="Orang_tua" class="d-block text-primary">Nama Lengkap Ibu</label>
                      <input id="Orang_tua" type="text" class="form-control" name="ibu" value="<?= $data['nama_ibu'] ?>"disabled readonly>
                    </div>
                    <div class="form-group col-6">
                     <label class="d-block text-primary">Pekerjaan Ibu</label>
                      <input id="Orang_tua" type="text" class="form-control" name="kerja_ibu" value="<?= $data['pekerjaan_ibu'] ?>" disabled readonly>
                    </div>
                  </div>
                  <div class="row">
                  <div class="form-group col-6">
                      <label for="kerja" class="d-block text-primary">Alamat</label>
                      <input id="kerja" type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>" disabled readonly>
                   </div>
                   <div class="form-group col-6">
                      <label for="kerja" class="d-block text-primary">Telepon</label>
                      <input id="kerja" type="number" class="form-control" name="tlpn" value="<?= $data['telepon'] ?>" disabled readonly>
                  </div>
                  </div>
                   
                  <div class="form-group">
                    <a href="data_pendaftaran" class="btn btn-primary btn-sm">Kembali</a>
                  </div>

              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>