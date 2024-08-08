<?php
    include '../koneksi.php';     
?>
<!DOCTYPE html>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="stylesheet" href="../css/form.css" type="text/css">
<link rel="shortcut icon" type="image/png" href="../image/scream.png">

<div class="navbar"><title>Home</title>
<?php session_start();
if(isset($_SESSION['nama_user']))
{
  if ($_SESSION['level'] == 2) 
  {
    header('location:login_user');
  }
}
else 
{
  header('location:../login/login_user.php');
}
?>

<a href="../login/logout.php">Logout</a>
<a href="../customer/profile/tampil_data.php">Welcome, <?= '' . $_SESSION['nama_user']; ?></a>
<h2 style="margin: 15px 12px; color: white; font-family: magneto;">Put Laundry</h2>
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
  <h2>List Paket dan Harga</h2><br>
  <table id="customers"><a class="button" href="tambah_home.php">Tambah Paket Laundry</a><br>
  <tr><th>NO</th><th>Nama Paket</th><th>Detail Paket</th><th>Harga Paket</th><th colspan="2">Action</th></tr><br>

<?php
$sql = ("select * from tb_paket LIMIT $posisi,$batas");
$query= mysqli_query($db_link,$sql);
$no=1;
while ($r =  mysqli_fetch_array($query)) { 
  ?>
  <tr>
    <td><?php echo "$no"; ?></td>
    <td><?php echo "$r[nama_paket]"; ?></td>
    <td><?php echo "$r[detail_paket]"; ?></td>
    <td><?php echo "$r[harga]"; ?>/KG</td>
    <td><a href="edit_paket.php?id=<?php echo "$r[id_paket]"; ?>" class="editbutton">Edit</a></td>
    <td><a href="hapus.php?id=<?php echo "$r[id_paket]"; ?>"onclick="return confirm('Anda yakin ingin menghapus?')" 
    class="editbutton">Hapus</a></td>
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
          <p>@putramlddn</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">

    </div>
  </footer>
</html>