<?php 

include ('koneksi.php');

$id = $_GET['id'];

$hapus=$koneksi->query("SELECT * FROM informasi WHERE id_informasi= '$id'");
$data=$hapus->fetch_assoc();
$foto=$data['gambar'];

if (file_exists("info/$foto")) {
    
    unlink("info/$foto");
}

$data_hapus_produk = mysqli_query($koneksi,"DELETE FROM informasi WHERE id_informasi= '$id'");
if ($data_hapus_produk) {
	
	header('location:data_info');
}else{
    die('data error'. mysqli_errno($koneksi));
}