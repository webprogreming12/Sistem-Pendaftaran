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
                  <h4>Pendaftaran Siswa Baru</h4>
                  <p>Selamat datang di aplikasi pendaftaran online di Mis Al-fatah Fiditan Kota tual</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-9">
            <form action="proses_siswa" method="post" role="form" class="email-form">
              <div class="row">
                <div class="form-group mt-3"><br><br>
                  <strong><center><h2>Terimakasi <?= $_SESSION['username']?><br> Telah Malakukan Pendaftaran Online<br> di Mis Al-fatah Fiditan</h2></center></strong>
                </div>
                
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include "footer.php" ?>