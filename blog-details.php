  <?php 
  include "header.php";
  include('admin/koneksi.php');
  $id = $_GET ['id'];
   $sql_berita = "SELECT * FROM berita WHERE id_berita ='$id'";
    $result_berita = mysqli_query($koneksi, $sql_berita);

        if(mysqli_num_rows($result_berita)){
            $data = mysqli_fetch_array($result_berita);
}
  ?>
    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Detail Berita</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-10">

            <article class="blog-details">

              <div class="post-img">
                <img src="admin/gambar/<?= $data ['gambar'] ?>" alt="" class="img-fluid">
              </div>

              <h2 class="title"><?= $data ['judul'] ?></h2>

              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01"><?= date('d-M-Y', strtotime($data['tgl'])) ?></time></a></li>
                </ul>
              </div><!-- End meta top -->

              <div class="content">
                <p>
                 <?= $data ['deskripsi_ber'] ?>
                </p>

              </div><!-- End post content -->

              <div class="meta-bottom">
                <i class="bi bi-folder"></i>
                <ul class="cats">
                  <li><a href="#">Business</a></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End meta bottom -->

            </article><!-- End blog post -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Details Section -->

  </main><!-- End #main -->

  <?php include "footer.php"; ?>