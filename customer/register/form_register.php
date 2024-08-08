<?php  
include '../../koneksi.php'; 
session_start();
?>
<link rel="stylesheet" href="../../css/style.css" type="text/css">
<link rel="stylesheet" href="../../css/form.css" type="text/css">
<link rel="shortcut icon" type="image/png" href="../../image/scream.png">
<body>
<div class="navbar">
<h2 style="margin: 15px 12px; color: white; font-family: magneto;">TRA Laundry</h2>
</div><br><br><br><br><br><br>
<form action="proses_register.php" method="post"> 
<label><b>Nama Lengkap</b></label>        
<input placeholder="Masukan Nama Lengkap Anda" type="text" name="nama_user">
<label><b>Alamat</b></label>        
<input placeholder="Masukan Alamat Lengkap Anda" type="text" name="alamat">
<label><b>Nomor Handphone</b></label>        
<input placeholder="Masukan Nomor Handphone Anda" type="text" name="no_hp">
<label><b>Username</b></label>        
<input placeholder="Buat Username Anda" type="text" name="username">
<label><b>Password</b></label>
<input  placeholder="Buat Password Anda" type="password" name="password">
<input type="hidden" name="level" value="2">
<button type="submit" id='input_submit' name="login">Masuk</button>
</form>
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