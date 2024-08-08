<?php  
include '../koneksi.php'; 
include 'bar/nav.php';
session_start();
?>

<link rel="stylesheet" href="../css/form.css" type="text/css">
<link rel="shortcut icon" type="image/png" href="../image/scream.png">
<body><title>Tambah Data Paket</title>
<br>
<form method="post" action="aksi_tambah.php">
<div class="form">
    <tr>
  <td>Nama Paket</td>
  <td>
    <input type="text" name="nama_paket" placeholder="Masukan Nama Paket Baru">
  </td>

  <td>Detail Paket</td>
  <td>
    <input type="text" name="detail_paket" placeholder="Masukan Detail Paket">
  </td>

  <td>Harga</td>
  <td>
    <input type="text" name="harga" placeholder="Masukan Harga Paket">
  </td>

   <td>Berat</td>
  <td>
    <input type="text" name="berat" placeholder="Masukan Harga/KG Paket">
  </td>    
<tr>
  <input type="submit" class="button" name="submit" value="Submit"></input>
  <a class="button" href="dashboard.php">Kembali</a>
</tr>
  

</form>
</div>
</body>