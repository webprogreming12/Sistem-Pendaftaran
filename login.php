  <?php include "header.php"; ?>

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
            <li>Login</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <section id="login" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <img src="assets/img/logo1.png" style="width: 50%; padding: 5px;">
              <div class="info-item d-flex">
                <div>
                  <h4>From Login</h4>
                  <p>Selamat datang di aplikasi pendaftaran online di Mis Al-fatah Fiditan Kota tual</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class="col-lg-8">
            <form action="proses_login" method="post" role="form" class="email-form">
              <div class="row">
                <div class="form-group mt-3">
                  <input type="text" name="username" class="form-control" id="name" placeholder="Masukan Username" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Masukan password" required>
              </div><br>
              <button name="login" class="btn btn-success">Login</button>
               <a href="akun" class="btn btn-success">Buat Akun</a></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php include "footer.php"; ?>