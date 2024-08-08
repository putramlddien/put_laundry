<title>Login</title>
<?php 
session_start();
if (isset($_SESSION['level'])) {
  if ($_SESSION['level'] == '1'){
  	header('location:../admin/dashboard.php');
  } else if ($_SESSION['level'] == '2') {
  	header('location:../customer/dashboard.php');
  }
  }  
?>
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="shortcut icon" type="image/png" href="../image/scream.png">
<body>
<div class="navbar">
<h2 style="margin: 15px 12px; color: white; font-family: magneto;">Put Laundry</h2>
</div><br><br><br><br><br><br><br><br><br>
<form action="proses_user.php" method="post"> 
<label><b>Username</b></label>        
<input placeholder="Enter Username" type="text" name="username" id="username">
<label><b>Password</b></label>
<input  placeholder="Enter Password" type="password" name="password" id="password">
<button type="submit" value="Login" id='input_submit' name="login">Masuk</button>
<a href="../customer/register/form_register.php" style="color: black;">Register?</a>
</form>
</body>