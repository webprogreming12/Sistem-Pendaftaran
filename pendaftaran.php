  <?php 
  include "header.php";
  if (!isset($_SESSION['id_user']))
{
   echo "<script>alert('Maaf anda harus login terlebih dulu');</script>";
    echo "<script>location='login';</script>";
    exit();
    
} 
  ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index">Home</a></li>
            <li>Pendaftaran Siswa</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section id="login" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-3">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <img src="assets/img/logo1.png" style="width: 50%; padding: 5px;">
              <div class="info-item d-flex">
                <div>
                  <h4>From Pendaftaran Siswa Baru</h4>
                  <p>Selamat datang di aplikasi pendaftaran online di Mis Al-fatah Fiditan Kota tual</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-9">
            <form action="proses_siswa" method="post" enctype="multipart/form-data" class="email-form" >
              <div class="row">
                <div class="col-md-4 form-group mt-3">
                  <input type="text" name="nama_lengkap" class="form-control" id="name" placeholder="Masukan nama lengkap" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                  <input type="text" name="nama_pangilan" class="form-control" id="name" placeholder="Masukan nama panggilan" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                  <input type="text" name="tempat_lahir" class="form-control" id="name" placeholder="Masukan tempat lahir" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 form-group mt-3">
                  <input type="date" name="tgl_lahir" class="form-control" id="name" placeholder="Masukan tanggal lahir" required>
                </div>
                <div class="col-md-4 form-group mt-3">
                  <select name="jk" class="form-select" required>
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="col-md-4 form-group mt-3">
                  <select name="agama" class="form-select" required>
                    <option selected>Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Khonghucu">Khonghucu</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="nama_ayah" class="form-control" id="name" placeholder="Masukan nama ayah" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="nama_ibu" class="form-control" id="name" placeholder="Masukan nama ibu" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="pekerjaan_ayah" class="form-control" id="name" placeholder="Masukan pekerjaan ayah" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="pekerjaan_ibu" class="form-control" id="name" placeholder="Masukan pekerjaan ibu" required>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3">
                  <input type="number" name="telepon" class="form-control" id="name" placeholder="Masukan Nomor Whatapp" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="alamat" class="form-control" id="name" placeholder="Masukan alamat orang tual" required>
                </div>
              </div>
                <div class="form-group mt-3">
                  <strong><h6>Masukan file AKTA kelahiran Yang sudah di convert ke pdf</h6></strong>
                  <input type="file" name="file_pdf" class="form-control" id="name" placeholder="" required>
                </div>
              <br>
              <button name="proses_siswa" class="btn btn-success">Simpan</button>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include "footer.php"; ?>