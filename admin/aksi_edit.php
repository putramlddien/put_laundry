<?php
	include "../koneksi.php";
	$id 		  =	  $_GET['id'];
	$nama_paket	  =	  $_POST['nama_paket'];
	$detail_paket =   $_POST['detail_paket'];
	$harga        =   $_POST['harga'];
	$berat        =   $_POST['berat'];


	
	$sql = "UPDATE tb_paket SET id_paket='$id',nama_paket='$nama_paket',detail_paket='$detail_paket',harga='$harga',berat='$berat' WHERE id_paket = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:dashboard.php');
	}
	else
	{
	echo "Edit Data Anggota Gagal!";
	}
?>