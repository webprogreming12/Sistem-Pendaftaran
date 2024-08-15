<?php 
include ('koneksi.php');
$id = $_GET['id'];
$data_pdf ="SELECT * FROM pendaftaran WHERE id_pendaftaran='$id'";
$sql_pdf = mysqli_query($koneksi, $data_pdf);

if (mysqli_num_rows($sql_pdf)) {
	// tampilkan data 
	$data = mysqli_fetch_array($sql_pdf);

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link href="assets/img/Lambang_Kota_Tual.png" rel="icon">
  <link href="assets/img/Lambang_Kota_Tual.png" rel="apple-touch-icon">
	<title>MIS AL-FATAH FIDITAN</title>
</head>
<body>
<embed type="application/pdf" src="../pdf/<?php echo $data['file_pdf']; ?>" width="100%" height="1000px"></embed>

</body>
</html>