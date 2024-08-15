<?php
// Mulai session
session_start();

// Include file koneksi database
include "koneksi.php";

// Inisialisasi variabel error
$error = '';

// Cek apakah form login sudah di-submit
if(isset($_POST['login'])) {
    // Ambil data yang di-submit dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Query untuk mencari pengguna berdasarkan username dan password
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($koneksi, $query);
    
    // Hitung jumlah baris yang ditemukan
    $count = mysqli_num_rows($result);
    
    // Jika ada baris yang ditemukan, maka login berhasil
    if($count == 1) {
        // Simpan username dalam session
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_admin'] = $row['id_admin'];
        $_SESSION['username'] = $row['username'];
        header("Location: index");
    } else {
        // Jika tidak ditemukan, tampilkan pesan error
        $_SESSION['login'] = "Usename Dan Password Anda Salah";
        header('location:login');
    }
}
?>