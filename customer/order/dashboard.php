<?php  
include '../../koneksi.php'; 
session_start();
?>
<link rel="stylesheet" href="../../css/style.css" type="text/css">
<link rel="stylesheet" href="../../css/form.css" type="text/css">
<link rel="shortcut icon" type="image/png" href="../../image/scream.png">
<body><title>Order Laundry</title>
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
<a href="../profile/tampil_data.php">Welcome, <?= '' . $_SESSION['nama_user']; ?></a>
<h2 style="margin: 15px 12px; color: white; font-family: magneto;">TRA Laundry</h2>
</div><br><br><br>	

<div class="sidebar">
  <a href="../dashboard.php">Home</a>
  <a href="dashboard.php">Order Laundry</a>
  <a href="../order/my_order.php">My Order</a>
  <a href="../profile/tampil_data.php">Profile</a>
</div>
<div class="content"><br>
<h2>Order Laundry</h2>
<br>
<a class="button" href="form_order.php">ORDER NOW</a><br>
<br><br>
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