<?php 

include ('koneksi.php');

$id = $_GET['id'];

$hapus=$koneksi->query("SELECT * FROM organisasi WHERE id_organisasi= '$id'");
$data=$hapus->fetch_assoc();
$foto=$data['gambar'];

if (file_exists("foto_organisasi/$foto")) {
    
    unlink("foto_organisasi/$foto");
}

$data_hapus_produk = mysqli_query($koneksi,"DELETE FROM organisasi WHERE id_organisasi= '$id'");
if ($data_hapus_produk) {
	
	header('location:data_organisasi');
}else{
    die('data error'. mysqli_errno($koneksi));
}