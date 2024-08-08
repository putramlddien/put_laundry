<?php
include '../koneksi.php';
$nama_paket	  =   $_POST['nama_paket'];
$detail_paket =   $_POST['detail_paket'];
$harga		  =   $_POST['harga'];
$berat     	  =   $_POST['berat'];


$sql = ("insert into tb_paket set nama_paket='$nama_paket',detail_paket='$detail_paket',harga='$harga',berat='$berat'");
$query = mysqli_query($db_link,$sql);

header("location:dashboard.php");


        
        