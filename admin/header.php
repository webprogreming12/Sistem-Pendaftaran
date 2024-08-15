<?php 
session_start();
include ('koneksi.php');


if (!isset($_SESSION['id_admin']))
{
   echo "<script>alert('Maaf anda harus login terlebih dulu');</script>";
    echo "<script>location='login';</script>";
    exit();
    
} 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" name="viewport">
  <title>MIS AL-FATAH FIDITAN</title>

  <link rel="stylesheet" href="dist/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/modules/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/modules/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

  <link rel="stylesheet" href="dist/modules/summernote/summernote-lite.css">
  <link rel="stylesheet" href="dist/modules/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="dist/css/demo.css">
  <link rel="stylesheet" href="dist/css/style.css">
  <link href="datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
     <link rel="stylesheet" href="sweetalert/sweetalert2.min.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="ion ion-navicon-round"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="ion ion-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg">
            <i class="ion ion-android-person d-lg-none"></i>
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $_SESSION['username']?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="logout" class="dropdown-item has-icon">
                <i class="ion ion-log-out"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper"><br>
          <div class="sidebar-user">
            <div class="sidebar-user-picture">
              <img alt="image" src="dist/img/undraw_profile.svg">
            </div>
            <div class="sidebar-user-details">
              <div class="user-name">Hi, <?= $_SESSION['username']?></div>
              <div class="user-role">
                 <?= $_SESSION['username']?>
              </div>
            </div>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Home</li>
            <li class="active">
              <a href="index"><i class="ion ion-android-home"></i><span>Home</span></a>
            </li>
            <li class="menu-header">Components</li>
              <li>
              <a href="#" class="has-dropdown"><i class="fa fa-address-card"></i><span>Data Profil</span></a>
              <ul class="menu-dropdown">
                <li><a href="data_profil"><i class="ion ion-ios-circle-outline"></i>Profil</a></li>
                <li><a href="data_visimisi"><i class="ion ion-ios-circle-outline"></i>Visi & Misi</a></li>
                <li><a href="data_sejarah"><i class="ion ion-ios-circle-outline"></i> Sejarah</a></li>
                <li><a href="data_organisasi"><i class="ion ion-ios-circle-outline"></i> Struktur Organisasi</a></li>
                 <li><a href="data_informasi"><i class="ion ion-ios-circle-outline"></i> Informasi</a></li>
                 <li><a href="data_kontak"><i class="ion ion-ios-circle-outline"></i> kontak</a></li>
              </ul>
            </li>
            <li>
            <li>
              <a href="data_pendaftaran"><i class="fa fa-database"></i></i><span>Data Pendaftaran</span></a>
            </li>
            <li>
              <a href="data_gallery"><i class="fa fa-file"></i><span>Data Gallery</span></a>
            </li>
            </li>
            <li>
              <a href="data_berita"><i class="fa fa-desktop"></i><span>Data Berita</span></a>
            </li>
            <li>
              <a href="data_admin"><i class="fa fa-unlock-alt"></i><span>Data admin</span></a>
            </li>
             <li>
              <a href="data_user"><i class="fa fa-users"></i><span>Data user</span></a>
            </li>
              <li>
              <a href="logout"><i class="fa fa-power-off"></i><span>Logout</span></a>
            </li>          
          </ul>
        </aside>
      </div>