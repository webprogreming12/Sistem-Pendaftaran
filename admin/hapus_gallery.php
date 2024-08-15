<?php 

include ('koneksi.php');

$id = $_GET['id'];

$hapus=$koneksi->query("SELECT * FROM gallery WHERE id_gallery= '$id'");
$data=$hapus->fetch_assoc();
$foto=$data['gambar'];

if (file_exists("gallery/$foto")) {
    
    unlink("gallery/$foto");
}

$data_hapus_produk = mysqli_query($koneksi,"DELETE FROM gallery WHERE id_gallery= '$id'");
if ($data_hapus_produk) {
	
	header('location:data_gallery');
}else{
    die('data error'. mysqli_errno($koneksi));
}