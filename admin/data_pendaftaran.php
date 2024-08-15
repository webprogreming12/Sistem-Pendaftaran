<?php 
include('header.php');

$jml_pendaftar = mysqli_query($koneksi,"SELECT * from pendaftaran ");
// cek jml
if (!$jml_pendaftar) {
    die('Error'.mysqli_error($koneksi));
}

 ?>
      <div class="main-content">
        <section class="section">
          <h1 class="section-header">
            <div>Pendaftaran</div>
          </h1>

            <div class="card card-primary">
              <div class="card-header">
                <a target="_blank" href="laporan?id=<?=$data['id_thn']?>" class="btn btn-primary float-right" >Cetak Laporan</a>
                <h4>Data Pendaftaran</h4>
              </div>
              <div class="card-body">
              <table class="table table-bordered table-hover text-center" id="dataTable" width="100%" cellspacing="0" style="font-size:15px;">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Langap</th>
                    <th>Tempat Lahir</th>
                    <th>Tgl Lahir</th>
                    <th>Janis KL</th>
                    <th>Agama</th>
                    <th>File AKTA</th>
                    <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                while ($p = mysqli_fetch_array($jml_pendaftar)) { ?>
                    <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $p ['nama_lengkap'] ?></td>
                    <td><?= $p ['tempat_lahir'] ?></td>
                    <td><?= $p ['tgl_lahir'] ?></td>
                    <td><?= $p ['jenis_kl'] ?></td>
                    <td><?= $p ['agama'] ?></td>
                    <td><a target="_blank" href="lihat_pdf?id=<?= $p['id_pendaftaran']?>" target="blank">Lihat</a></td>

                    <td><a href="detail_siswa?id=<?= $p['id_pendaftaran'] ?>" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Detail Siswa"><i class="ion ion-compose"></i></a>
                      <a href="konfirmasi?id=<?= $p['id_pendaftaran'] ?>" class="btn btn-success btn-action mr-1" data-toggle="tooltip" title="konfirmasi Wa"><i class="ion ion-compose"></i></a></td>
                   </tr>
                <?php    
                }
                    if (mysqli_num_rows($jml_pendaftar) == 0){

                        echo "<tr><td colspan='10'><b>Belum ada pendaftar baru</b></tr></tr>";
                    }

                ?>
                </tbody>
               </table>
              </div>
            </div>

        </section>
      </div>
<?php include('footer.php'); ?>