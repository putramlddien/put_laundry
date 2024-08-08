<?php  
include '../koneksi.php'; 
include 'bar/nav.php';
session_start();
      $id_order = $_GET['id'];
      $sql = "SELECT * FROM tb_order WHERE id_order='$id_order'";
      $query = mysqli_query($db_link,$sql);
      $data = mysqli_fetch_array($query);
  
?>

<link rel="stylesheet" href="../css/form.css" type="text/css">
<link rel="shortcut icon" type="image/png" href="../image/scream.png">
<body><title>Tambah Data Paket</title>
<br>
<form method="post" action="aksi_detail.php">
<div class="form">
    <tr>
  <td>ID Order</td>
  <td>
    <input type="text" readonly name="id_order" value="<?php echo $data['id_order'] ?>">
  </td>

  <td>Nama Customer</td>
  <td>
    <input type="text" readonly name="nama_user" value="<?php echo $data['nama_user'] ?>">
  </td>

  <td>Tanggal Pemesanan</td>
  <td>
    <input type="text" readonly name="tanggal_pesan" value="<?php echo $data['tanggal_pesan'] ?>">
  </td>

   <td>Pengiriman</td>
  <td>
    <input type="text" readonly name="pengiriman" value="<?php echo $data['pengiriman'] ?>">
  </td>    

  <td>Paket</td>
  <td>
    <input type="text" readonly name="nama_paket" value="<?php echo $data['nama_paket'] ?>">
  </td>

  <td>Berat</td>
  <td>
    <input type="text" readonly name="berat" value="<?php echo $data['berat'] ?>">
  </td>

  <td>Tipe Pembayaran</td>
  <td>
    <input type="text" readonly name="tipe_pembayaran" value="<?php echo $data['tipe_pembayaran'] ?>">
  </td>

  <td>Total Harga</td>
  <td>
    <input type="text" readonly name="total" value="<?php echo $data['total'] ?>">
  </td>



  <td>Status</td>
  <td>
 <select name="nama_paket" class="select">
    <option>Proses</option>
    <option>Kurir Dalam Perjalanan</option>
    <option>Selesai</option>
  </select>
  </td>
<tr>
  <input type="submit" class="button" name="submit" value="Submit"></input>
  <a class="button" href="orderan.php">Kembali</a>
</tr>
  

</form>
</div>
</body>