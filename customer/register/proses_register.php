<?php
include '../../koneksi.php';
$nama_user		=   $_POST['nama_user'];
$alamat      	=   $_POST['alamat'];
$no_hp		=   $_POST['no_hp'];
$username     	=   $_POST['username'];
$password	=   $_POST['password'];
$level    		=   $_POST['level'];


$sql = ("insert into tb_user set nama_user='$nama_user',alamat='$alamat',no_hp='$no_hp',username='$username',password='$password',level='$level'");
$query = mysqli_query($db_link,$sql);

header("location:../../login/login_user.php");


        
        