<?php
require_once '../vendor/autoload.php';
include ('koneksi.php'); 
$tampil_data = mysqli_query($koneksi,"SELECT * FROM pendaftaran");
// cek jml
if (!$tampil_data) {
    die('Error'.mysqli_error($koneksi));
    }

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = '
<style type="text/css">
 	tabel, th, td{
 	 font-size: 12;
 	 border: 1px solid black;
 	 border-collapse: collapse;
 	 padding: 5px;
 	}
 </style>
<img src="../assets/img/1.png" style="float: left; height: 80px;">
 <div style="margin-left:100px; ">
 	<div style="font-size: 19px;padding: 3px;">Data Calon Siswa Baru </div>
  <div style="font-size: 23px;padding: 3px;">Mis Al-fatah Fiditan </div>
  <div style="font-size: 14px;padding: 3px;">Alamat : Jln. Loortetan Desa Fiditan KEC. Dulah Utara, Maluku Tenggara.</div>
 </div>
 <hr>
 <h3> Tanggal Cetak :'. date('d-m-Y').'</h3>
<table width="100%">
	<thead>
      <tr>
		       <th>No</th>
           <th>Nama lengkap</th>
		       <th>Tempat Lahir</th>
           <th>Tanggal Lahir</th>
           <th>Jenis Kelamin</th>
    	     <th>Agama</th>
           <th>Nama Ayah</th>
           <th>Nama Ibu</th>
           </tr>
        </thead>
        <tbody>';
        $no = 1;
        while ($a = mysqli_fetch_array($tampil_data)) {
        $html.='<tr>
          <td>'.$no++.'</td>
          <td><center>'.$a['nama_lengkap'].'</center></td>
          <td><center>'.$a['tempat_lahir'].'</center></td>
          <td><center>'.date('d-m-Y', strtotime($a['tgl_lahir'])).'</center></td>
          <td><center>'.$a['jenis_kl'].'</center></td>
          <td><center>'.$a['agama'].'</center></td>
          <td><center>'.$a['nama_ayah'].'</center></td>
          <td><center>'.$a['nama_ibu'].'</center></td>
        </tr>';
    }
   $html.='</tbody>
</table>';
 
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("laporan Siswa.pdf", array("Attachment" =>0));
?>