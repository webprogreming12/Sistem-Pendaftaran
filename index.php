<?php 
include "header.php";

include('admin/koneksi.php');
$sql_profil = "SELECT * FROM profil ";
    $result_profil = mysqli_query($koneksi, $sql_profil);

        if(mysqli_num_rows($result_profil)){
            $data_profil = mysqli_fetch_array($result_profil);
}

$sql_info = "SELECT * FROM informasi ";
    $result_info = mysqli_query($koneksi, $sql_info);

        if(mysqli_num_rows($result_info)){
            $data_info = mysqli_fetch_array($result_info);
}

$sql_kontak = "SELECT * FROM kontak ";
    $result_kontak = mysqli_query($koneksi, $sql_kontak);

        if(mysqli_num_rows($result_kontak)){
            $data_kontak = mysqli_fetch_array($result_kontak);
}

$organisasi = mysqli_query($koneksi,"SELECT * FROM organisasi");
// cek jml
if (!$organisasi) {
    die('Error'.mysqli_error($koneksi));
}

$berita = mysqli_query($koneksi,"SELECT * FROM berita");
// cek jml
if (!$berita) {
    die('Error'.mysqli_error($koneksi));
}

$gallery = mysqli_query($koneksi,"SELECT * FROM gallery");
// cek jml
if (!$gallery) {
    die('Error'.mysqli_error($koneksi));
}
 ?>
<!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Selamat Datang Di Website <span>Mis Al-Fatah Fiditan</span></h2>
          <p>Alamat : Jln. Loortetan Desa Fiditan KEC. Dulah Utara, Maluku Tenggara.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hiroo.jpeg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <h4 class="title"><a href="#about" class="stretched-link">Profil</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <h4 class="title"><a href="index#team" class="stretched-link">Struktur Organisasi</a></h4>
            </div>
          </div><!--End Icon Box -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="#contact" class="stretched-link">Kontak</a></h4>
            </div>
          </div><!--End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->
  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Profil Sekolah</h2>
        </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="position-relative mt-1">
                <img src="admin/profil/<?= $data_profil ['gambar']?>" class="img-fluid rounded-4" alt="">
                <a href="<?= $data_profil ['youtube'] ?>" class="glightbox play-btn"></a>
              </div>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p>
               <?= $data_profil ['deskripsi']?>
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Struktur Organisasi</h2>
        </div>

        <div class="row gy-4">
          <?php 
          while ($p = mysqli_fetch_array($organisasi)) { ?>
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="admin/foto_organisasi/<?= $p ['gambar_or'] ?>" class="img-fluid" alt="">
              <h6><?= $p ['nama'] ?></h6>
              <span><?= $p ['jabatan'] ?></span>
              <span><?= $p ['status'] ?></span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End Team Member -->
          <?php } ?>
        </div>

      </div>
    </section><!-- End Our Team Section -->

     <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="content px-xl-5">
              <h3><strong>Visi/Misi dan Sejarah</strong></h3>
              <p>
              </p>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num">1.</span>
                   Visi
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <?= $data_profil ['visi'] ?>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num">2.</span>
                    Misi
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                     <?= $data_profil ['misi'] ?>
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num">3.</span>
                    Sejarah
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                     <?= $data_profil ['sejarah'] ?>
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Info Terkini</h2>
        </div>

        <div class="row gy-4">
          <?php  while ($p = mysqli_fetch_array($berita)) { ?>
          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="admin/gambar/<?= $p ['gambar'] ?>" alt="" class="img-fluid">
              </div>
              <h2 class="title">
                <a href="blog-details?id=<?= $p ['id_berita'] ?>"><?= $p ['judul'] ?></a>
              </h2>

              <div class="d-flex align-items-center">
                <div class="post-meta">
                  <p class="post-date">
                    <time datetime="2022-01-01"><?= date('d-M-Y', strtotime($p['tgl'])) ?></time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->
        <?php } ?>
        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Gallery</h2>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

          <div class="row gy-4 portfolio-container">
           <?php  while ($p = mysqli_fetch_array($gallery)) { ?>
            <div class="col-xl-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <a href="admin/gallery/<?= $p ['foto'] ?>" data-gallery="portfolio-gallery-app" class="glightbox"><img src="admin/gallery/<?= $p ['foto'] ?>" class="img-fluid" alt=""></a>
                <div class="portfolio-info">
                  <h4><a href="portfolio-details.html" title="More Details"><?= $p ['keterangan'] ?></a></h4>
                  <p><?= date('d-M-Y', strtotime($p['tanggal'])) ?></p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
          <?php } ?>
          </div><!-- End Portfolio Container -->

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Hubungi Kami</h2>
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p><?= $data_kontak ['alamat'] ?></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p><?= $data_kontak ['email'] ?></p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p><?= $data_kontak ['tlpn'] ?></p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-8">
            <div class="row">
              <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d13525.36615046755!2d132.75161846244194!3d-5.603945177564537!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMzYnMTAuMSJTIDEzMsKwNDUnMjEuMyJF!5e1!3m2!1sen!2sid!4v1715437791210!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
<?php include "footer.php"; ?>