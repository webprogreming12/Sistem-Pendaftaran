<?php
session_start();
include "admin/koneksi.php";
if (isset($_POST['proses_akun'])) {
    
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    
   $pendaftaran ="INSERT INTO user (nama_user,username,password)
                                VALUES 
                                ('$name','$username','$password')";
                
   $sql_ubah = mysqli_query($koneksi, $pendaftaran);
    if ($sql_ubah) {
     $_SESSION['daftar'] = "Data Berhasil Disimpan";
                header('location:login');
    }else{
    die('Data Gagal Ditembahkan'. mysqli_error($koneksi));
   }

}
?>