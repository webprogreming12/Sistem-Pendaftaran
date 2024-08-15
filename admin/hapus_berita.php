<?php 

include ('koneksi.php');

$id = $_GET['id'];

$hapus=$koneksi->query("SELECT * FROM berita WHERE id_berita= '$id'");
$data=$hapus->fetch_assoc();
$foto=$data['gambar'];

if (file_exists("gambar/$foto")) {
    
    unlink("gambar/$foto");
}

$data_hapus_produk = mysqli_query($koneksi,"DELETE FROM berita WHERE id_berita= '$id'");
if ($data_hapus_produk) {
	
	header('location:data_berita');
}else{
    die('data error'. mysqli_errno($koneksi));
}