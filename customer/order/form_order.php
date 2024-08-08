<?php  
include '../../koneksi.php'; 
include '../bar/nav.php';
session_start();
?>
<link rel="stylesheet" href="../../css/form.css" type="text/css">
<link rel="shortcut icon" type="image/png" href="../../../image/scream.png">
<body><title>Form Order</title>
<br>
<form method="post" action="aksi_order.php">
<div class="form">
    <tr>
  <td>Nama Lengkap</td>
  <td>
    <input type="text" name="nama_user" value="<?php echo $_SESSION['nama_user'] ?>" readonly>
  </td>

  <tr>
  <td>Tanggal Pesan</td>
  <td>
    <input type="text" readonly name="tanggal_pesan" value="<?php echo date('Y-m-d'); ?>">
  </td>



<td>Paket</td>
<select name="nama_paket" class="select">
    <option>Paket Ninja</option>
    <option>Paket Kijang</option>
    <option>Paket Pagination</option>
    <option>Paket Sapar</option>
    <option>Paket Malem</option>
  </select>

    <tr>
  <td>Pengiriman</td>
    <select name="pengiriman" class="select">
<option value="antar jemput sendiri">Antar jemput Sendiri</option>
    <option value="antar jemput kurir">Antar jemput Kurir Laundry (Ongkir)</option>
  </select>
  </td>

  <tr>
  <td>Berat Loundry</td>
  <td>
    <input type="text" name="berat" placeholder="Masukan Berat Laundry">
  </td>

  <tr>
  <td>Tipe Pembayaran</td>
  <td>
    <input type="text" name="tipe_pembayaran" readonly value="Bayar Di Tempat">
  </td>


  <tr>
  <td>
    <input type="hidden" readonly name="status" value="Proses">
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