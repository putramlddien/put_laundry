<?php  
include '../../koneksi.php'; 
session_start();
?>
<link rel="stylesheet" href="../../css/style.css" type="text/css">
<link rel="stylesheet" href="../../css/form.css" type="text/css">
<link rel="shortcut icon" type="image/png" href="../../image/scream.png">
<body>
	<div class="navbar">
<?php 

if(isset($_SESSION['nama_user']))
{

		if ($_SESSION['level'] == 1) {
			header('location:login_user');
		}

}

else {
	header('location:../login/login_user.php');

}
				
?>



<a href="../../login/logout.php">Logout</a>
<a href="../customer/profile/tampil_data.php">Welcome, <?= '' . $_SESSION['nama_user']; ?></a>
<h2 style="margin: 15px 12px; color: white; font-family: magneto;">TRA Laundry</h2>
</div><br><br><br>	

<div class="sidebar">
  <a href="../dashboard.php">Home</a>
  <a href="../order/dashboard.php">Order Laundry</a>
  <a href="../order/my_order.php">My Order</a>
  <a href="tampil_data.php">Profile</a>
</div>
</body>
<body>
<link rel="stylesheet" href="../style.css" type="text/css">
<br><title>Profile Akun</title>
<div class="content">
<h2>Profile</h2>
<br><br>
<label><b>Nama Lengkap</b></label><br>
<a><?= '' . $_SESSION['nama_user']; ?></a><br><br>
<label><b>Alamat</b></label><br>
<a><?= '' . $_SESSION['alamat']; ?></a><br><br>
<label><b>No Handphone</b></label><br>
<a><?= '' . $_SESSION['no_hp']; ?></a>
</div>
</div>
</body>
<br><br><br><br><br><br><br><br><br>
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