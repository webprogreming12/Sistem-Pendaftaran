  <?php
   include "header.php";
   include "admin/koneksi.php";
$sql_info = "SELECT * FROM informasi ";
    $result_informasi = mysqli_query($koneksi, $sql_info);

        if(mysqli_num_rows($result_informasi)){
            $data = mysqli_fetch_array($result_informasi);
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
            <li><a href="index.php">Home</a></li>
            <li>Informasi Pendaftaran</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="pendaftaran" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-12">

            <article class="blog-details">

              <h2 class="title">Informasi Pendaftaran</h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01"><?php echo date("d F Y H:i:s"); ?></time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                  <?= $data ['deskripsi_info'] ?><a href="pendaftaran">Link Pendaftaran</a>
                </p>

              </div><!-- End post content -->

              <div class="meta-bottom">
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <?php include "footer.php"; ?>