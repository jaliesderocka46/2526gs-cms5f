<?php
// Data global
$nama = "Ali";
$profesi = "Web Developer | Designer | Mahasiswa";
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perkenalan Diri - <?php echo $nama; ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <img src="img/profil.jpg" alt="Foto Profil">
    <h1>Halo, Saya <?php echo $nama; ?></h1>
    <p><?php echo $profesi; ?></p>
  </header>
