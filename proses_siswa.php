<?php
session_start();
include "admin/koneksi.php";
if (isset($_POST['proses_siswa'])) {
    
    $nama_lengkap=$_POST['nama_lengkap'];
    $nama_pangilan=$_POST['nama_pangilan'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tgl_lahir=$_POST['tgl_lahir'];
    $jk=$_POST['jk'];
    $agama=$_POST['agama'];
    $nama_ayah=$_POST['nama_ayah'];
    $nama_ibu=$_POST['nama_ibu'];
    $pekerjaan_ayah=$_POST['pekerjaan_ayah'];
    $pekerjaan_ibu=$_POST['pekerjaan_ibu'];
    $telepon=$_POST['telepon'];
    $alamat=$_POST['alamat'];

    // Pengaturan nama file PDF
        $generate = date("ymd_his_") . rand(1111, 9999);
        $nama_baru = $generate . ".pdf";
        $file_tmp = $_FILES['file_pdf']['tmp_name'];

        move_uploaded_file($file_tmp, 'pdf/' . $nama_baru);
    
   $pendaftaran ="INSERT INTO pendaftaran( nama_lengkap, nama_pangilan, tempat_lahir, tgl_lahir, jenis_kl, agama, nama_ayah, nama_ibu, pekerjaan_ayah, pekerjaan_ibu, alamat, telepon, file_pdf) VALUES ('$nama_lengkap','$nama_pangilan','$tempat_lahir','$tgl_lahir','$jk','$agama','$nama_ayah','$nama_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$alamat','$telepon','$nama_baru')";
            

   $sql_ubah = mysqli_query($koneksi, $pendaftaran);
    if ($sql_ubah) {
     $_SESSION['daftar'] = "Data Berhasil Disimpan";
                header('location:terimakasi');
    }else{
    die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
   }

}
?>