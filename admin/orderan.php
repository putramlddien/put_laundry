<?php  
include '../koneksi.php'; 
session_start();
?>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" href="../css/form.css" type="text/css">
<link rel="shortcut icon" type="image/png" href="../image/scream.png">
<body>
	<div class="navbar"><title>Daftar Orderan</title>




  <a href="../login/logout.php">Logout</a>
<a href="../profile/tampil_data.php">Welcome, <?= '' . $_SESSION['nama_user']; ?></a>
<h2 style="margin: 15px 12px; color: white; font-family: magneto;">TRA Laundry</h2>
</div><br><br><br>	

<div class="sidebar">
  <a href="dashboard.php">Home</a>
  <a href="orderan.php">Orderan</a>
</div>



<?php     
    $tabel = "tb_paket";
    $od = "judul";
    $ide = "nama";
    $ke = "tampil_data.php"; ?>
<br><br><br>
<div class="content">
	 <!-- <?php include 'pagination.php' ?> -->
<h2>Orderan Customer</h2><br>
<br>
<table id="customers">
    <tr><th>NO</th><th>ID Order</th><th>Nama Customer</th><th>Tanggal Pemesanan</th><th>Pengiriman</th><th>Paket</th><th>Berat</th><th>Tipe Pembayaran</th><th>Total Harga</th><th>Status</th><th colspan="2">Action</th></tr><br>
    <?php
    $sql = ("select * from tb_order LIMIT $posisi,$batas");
    $query= mysqli_query($db_link,$sql);
    $no=1;
    while ($r =  mysqli_fetch_array($query)) { ?>
        <tr>
            <td><?php echo "$no"; ?></td>
            <td><?php echo "$r[id_order]"; ?></td>
            <td><?php echo "$r[nama_user]"; ?></td>
            <td><?php echo "$r[tanggal_pesan]"; ?></td>
            <td><?php echo "$r[pengiriman]"; ?></td>
            <td><?php echo "$r[nama_paket]"; ?></td>
            <td><?php echo "$r[berat]"; ?></td>
            <td><?php echo "$r[tipe_pembayaran]"; ?></td>
            <td><?php echo "$r[total]"; ?></td>
            <td><?php echo "$r[status]"; ?></td>
            <td><a href="detail.order.php?id=<?php echo "$r[id_order]"; ?>" class="editbutton">Detail</a></td>
            <td><a href="selesai.php?id=<?php echo "$r[id_order]"; ?>"onclick="return confirm('Anda yakin Selesaikan Orderan?')" class="editbutton">Selesai</a></td>

            </tr>
            <?php $no++; }?>
    
</table><br><br>
<div class="pagination">
<?php
$sql6 = ("select * from tb_paket");
$jmldata=  mysqli_query($db_link,$sql6);
$jmldata=  mysqli_num_rows($jmldata);
$jml_halaman=  ceil($jmldata/3);

for($i=1;$i<=$jml_halaman;$i++)
{
    if($i!=$jml_halaman)
    {
        echo "<a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a>";
    }
    else
    {
        echo "<a href='$_SERVER[PHP_SELF]?halaman=$i'>$i</a>";
    }
}
?>
</div>
</div>
</body><br><br><br><br><br><br>
<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Ini Footer</h5>
                <p class="grey-text text-lighten-4">VOOPOO, as an international brand, has been focusing on technology innovation and
 investment, which is only to give you more vape life possibilities and enjoy the beauty of vape.</p>
                <p>@putramlddn</p>
              </div>
             
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Copyright Text
            
            </div>
          </div>
        </footer>