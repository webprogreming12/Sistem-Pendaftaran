<?php 
include ('koneksi.php');
session_start();
if (isset($_POST['btn-profil'])) {
	
	$id = $_POST ['id'];
	$deskripsi=$_POST['deskripsi'];
    $youtube=$_POST['youtube'];
	$fotolama=$_POST ['fotolama'];

	$file_tmp = $_FILES['gambar']['tmp_name'];
    $gambar = $_FILES['gambar']['name'];

            if ($gambar) {
                
                unlink('profil/'.$fotolama);
                move_uploaded_file($file_tmp, 'profil/'. $gambar);

                $ubah_profil ="UPDATE profil SET gambar='$gambar',
                                                 deskripsi='$deskripsi',
                                                 youtube='$youtube'
                                                 WHERE id_profil='$id'";
                
            }else{
                $ubah_profil ="UPDATE profil SET deskripsi='$deskripsi',
                                                youtube='$youtube'
                                                 WHERE id_profil='$id'";
            }
                $sql_ubah = mysqli_query($koneksi, $ubah_profil);
            if ($sql_ubah) {
            	$_SESSION['daftar'] = "Data Berhasil Diubah";
            	header('location:data_profil');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }

}

if (isset($_POST['btn-visi'])) {

    $id = $_POST ['id'];
    $visi=$_POST['visi'];
    $misi=$_POST ['misi'];
    
    $ubah_visi ="UPDATE profil SET visi='$visi', misi='$misi' WHERE id_profil='$id'";
                
    $sql_ubah = mysqli_query($koneksi, $ubah_visi);
            if ($sql_ubah) {
                $_SESSION['daftar'] = "Data Berhasil Diubah";
                header('location:data_visimisi');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }
}

if (isset($_POST['btn-sejarah'])) {

    $id = $_POST ['id'];
    $sejarah=$_POST['sejarah'];
    
    $ubah_sejarah ="UPDATE profil SET sejarah='$sejarah' WHERE id_profil='$id'";
                
    $sql_ubah = mysqli_query($koneksi, $ubah_sejarah);
            if ($sql_ubah) {
               $_SESSION['daftar'] = "Data Berhasil Diubah";
                header('location:data_sejarah');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }

}

if (isset($_POST['btn-info'])) {

    $id = $_POST ['id'];
    $deskripsi=$_POST['deskripsi'];
    
    $ubah_sejarah ="UPDATE informasi SET deskripsi_info='$deskripsi' WHERE id_info='$id'";
                
    $sql_ubah = mysqli_query($koneksi, $ubah_sejarah);
            if ($sql_ubah) {
               $_SESSION['daftar'] = "Data Berhasil Diubah";
                header('location:data_informasi');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }

}

if (isset($_POST['btn-konfirmasi'])) {
    
    $tlpn=$_POST['tlpn'];
    $nama=$_POST['nama'];
    $pesan=$_POST['pesan'];

    header("location:https://api.whatsapp.com/send?phone=62$tlpn&text=$pesan%20$nama.");
    
}

if (isset($_POST['btn-edit-berita'])) {
    
    $id = $_POST ['id'];
    $judul=$_POST['judul'];
    $deskripsi=$_POST['deskripsi'];
     $tanggal=$_POST['tanggal'];
    $fotolama=$_POST ['fotolama'];

    $file_tmp = $_FILES['gambar']['tmp_name'];
    $gambar = $_FILES['gambar']['name'];

            if ($gambar) {
                
                unlink('gambar/'.$fotolama);
                move_uploaded_file($file_tmp, 'gambar/'. $gambar);

                $ubah_berita ="UPDATE berita SET judul='$judul',
                                                 deskripsi_ber='$deskripsi',
                                                gambar='$gambar',
                                                tgl='$tanggal'
                                                 WHERE id_berita='$id'";
                
            }else{
                $ubah_berita ="UPDATE berita SET judul='$judul',
                                                 deskripsi_ber='$deskripsi',
                                                tgl='$tanggal'
                                                 WHERE id_berita='$id'";
            }
                $sql_ubah = mysqli_query($koneksi, $ubah_berita);
            if ($sql_ubah) {
                $_SESSION['daftar'] = "Data Berhasil Diubah";
                header('location:data_berita');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }

}

if (isset($_POST['btn-tambah_berita'])) {
    
    $judul=$_POST['judul'];
    $tanggal=$_POST['tanggal'];
    $deskripsi=$_POST['deskripsi'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $gambar = $_FILES['gambar']['name'];

    move_uploaded_file($file_tmp, 'gambar/'. $gambar);

                $ubah_berita ="INSERT INTO berita (judul,deskripsi_ber,gambar,tgl)
                                VALUES 
                                ('$judul','$deskripsi','$gambar','$tanggal')";
                
                $sql_ubah = mysqli_query($koneksi, $ubah_berita);
            if ($sql_ubah) {
                $_SESSION['daftar'] = "Data Berhasil Disimpan";
                header('location:data_berita');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }

}

if (isset($_POST['btn-tambah_organisasi'])) {
    
    $nama=$_POST['nama'];
    $jabatan=$_POST['jabatan'];
    $status=$_POST['status'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $gambar = $_FILES['gambar']['name'];

    move_uploaded_file($file_tmp, 'foto_organisasi/'. $gambar);

                $ubah_berita ="INSERT INTO organisasi (nama,jabatan,status,gambar_or)
                                VALUES 
                                ('$nama','$jabatan','$status','$gambar')";
                
                $sql_ubah = mysqli_query($koneksi, $ubah_berita);
            if ($sql_ubah) {
                $_SESSION['daftar'] = "Data Berhasil Disimpan";
                header('location:data_organisasi');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }

}

if (isset($_POST['btn-edit-organisasi'])) {
    
    $id = $_POST ['id'];
    $nama=$_POST['nama'];
    $jabatan=$_POST['jabatan'];
     $status=$_POST['status'];
    $fotolama=$_POST ['fotolama'];

    $file_tmp = $_FILES['gambar']['tmp_name'];
    $gambar = $_FILES['gambar']['name'];

            if ($gambar) {
                
                unlink('foto_organisasi/'.$fotolama);
                move_uploaded_file($file_tmp, 'foto_organisasi/'. $gambar);

                $ubah_berita ="UPDATE organisasi SET nama='$nama',
                                                 jabatan='$jabatan',
                                                status='$status',
                                                gambar_or='$gambar'
                                                 WHERE id_organisasi='$id'";
                
            }else{
                $ubah_berita ="UPDATE organisasi SET nama='$nama',
                                                 jabatan='$jabatan',
                                                status='$status'
                                                 WHERE id_organisasi='$id'";
            }
                $sql_ubah = mysqli_query($koneksi, $ubah_berita);
            if ($sql_ubah) {
                $_SESSION['daftar'] = "Data Berhasil Diubah";
                header('location:data_organisasi');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }

}

if (isset($_POST['btn-ubah-admin'])) {
    $id=$_POST['id'];
    $username =$_POST['username'];
    $password =$_POST['password'];

    $data = "UPDATE admin SET
                            username='$username',
                            password='$password'
                             WHERE id_admin='$id'";

    $sql = mysqli_query($koneksi, $data);

    if ($sql) {
     $_SESSION['daftar'] = "Data Berhasil Diubah";
     header('location:data_admin');
    }else{
    die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
   }
}
if (isset($_POST['btn-tambah_gallery'])) {
    
    $tanggal=$_POST['tanggal'];
    $deskripsi=$_POST['deskripsi'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $gambar = $_FILES['gambar']['name'];

    move_uploaded_file($file_tmp, 'gallery/'. $gambar);

                $ubah_berita ="INSERT INTO gallery (foto,keterangan,tanggal)
                                VALUES 
                                ('$gambar','$deskripsi','$tanggal')";
                
                $sql_ubah = mysqli_query($koneksi, $ubah_berita);
            if ($sql_ubah) {
                $_SESSION['daftar'] = "Data Berhasil Disimpan";
                header('location:data_gallery');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }

}

if (isset($_POST['btn-edit-gallery'])) {
    
    $id = $_POST ['id'];
    $deskripsi=$_POST['deskripsi'];
     $tanggal=$_POST['tanggal'];
    $fotolama=$_POST ['fotolama'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    $gambar = $_FILES['gambar']['name'];

            if ($gambar) {
                
                unlink('gallery/'.$fotolama);
                move_uploaded_file($file_tmp, 'gallery/'. $gambar);

                $ubah_gallery ="UPDATE gallery SET
                                                 gambar='$gambar',
                                                keterangan='$deskripsi',
                                                tanggal='$tanggal'
                                                 WHERE id_gallery='$id'";
                
            }else{
                $ubah_gallery ="UPDATE gallery SET
                                                keterangan='$deskripsi',
                                                tanggal='$tanggal'
                                                 WHERE id_gallery='$id'";
            }
                $sql_ubah = mysqli_query($koneksi, $ubah_gallery);
            if ($sql_ubah) {
                $_SESSION['daftar'] = "Data Berhasil Diubah";
                header('location:data_gallery');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }

}

if (isset($_POST['btn-telp'])) {
    
    $id = $_POST ['id'];
    $alamat=$_POST['alamat'];
    $email=$_POST['email'];
    $tlpn=$_POST['tlpn'];

                $ubah_kontak ="UPDATE kontak SET alamat='$alamat',
                                                 email='$email',
                                                tlpn='$tlpn'
                                                 WHERE id_kontak='$id'";
                
                $sql_ubah = mysqli_query($koneksi, $ubah_kontak);
            if ($sql_ubah) {
                $_SESSION['daftar'] = "Data Berhasil Diubah";
                header('location:data_kontak');
             }else{
                die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
             }

}

 ?>