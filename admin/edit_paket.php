<?php  
include '../koneksi.php'; 
include 'bar/nav.php';
session_start();
      $id_paket = $_GET['id'];
      $sql = "SELECT * FROM tb_paket WHERE id_paket='$id_paket'";
      $query = mysqli_query($db_link,$sql);
      $data = mysqli_fetch_array($query);
  
?>

<link rel="stylesheet" href="../css/form.css" type="text/css">
<link rel="shortcut icon" type="image/png" href="../image/scream.png">
<body><title>Tambah Data Paket</title>
<br>
<form method="post" action="aksi_edit.php">
<div class="form">
    <tr>
  <td>Nama Paket</td>
  <td>
    <input type="text" name="nama_paket" value="<?php echo $data['nama_paket'] ?>">
  </td>

  <tr>
  <td>Detail Paket</td>
  <td>
    <input type="text" name="detail_paket" value="<?php echo $data['detail_paket'] ?>">
  </td>

  <tr>
  <td>Harga</td>
  <td>
    <input type="text" name="harga" value="<?php echo $data['harga'] ?>">
  </td>

  <tr>
   <td>Berat</td>
  <td>
    <input type="text" name="berat" value="<?php echo $data['berat'] ?>">    
</td>
</div>
</tr>
    <tr>

  <input type="submit" class="button" name="submit" value="Submit"></input>
  <a class="button" href="dashboard.php">Kembali</a>

  </tr>
</form>
</div>
</body>