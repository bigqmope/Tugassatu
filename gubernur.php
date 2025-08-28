<?php
$nama = "Ria Norsan";
$ttl = "17 Desember 1967";
$agama = "Islam";
$gender = "Pria";
$pengalaman = "Bupati Mempawah (2009–2018)<br>Wakil Gubernur Kalimantan Barat (2018–2023)<br>Gubernur Kalimantan Barat (2025–2030).";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Biodata Ria Norsan</title>
  <style>
    body {background-color: #FCEEED;
          body { font-family: verdana; }
  </style>
</head>
<body>
  <h1>Biodata Gubernur Kalimantan Barat Periode 2025-2030</h1>

  <table border="1" cellpadding="8" cellspacing="0">
    <tr>
      <td><strong>Nama: </strong></td>
      <td><?php echo $nama; ?></td>
    </tr>
    <tr>
      <td><strong>Tempat, tanggal lahir: </strong></td>
      <td><?php echo $ttl; ?></td>
    </tr>
    <tr>
      <td><strong>Agama: </strong></td>
      <td><?php echo $agama; ?></td>
    </tr>
    <tr>
      <td><strong>Jenis Kelamin: </strong></td>
      <td><?php echo $gender; ?></td>
    </tr>
    <tr>
      <td><strong>Pengalaman Politik: </strong></td>
      <td><?php echo $pengalaman; ?></td>
    </tr>
  </table>
  <p>Klik link di bawah ini untuk ke halaman Index</p>
  <a href="index.php">Kembali ke halaman Index</a>
</body>
</html>
