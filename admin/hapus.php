<?php
	include "../koneksi.php";
	
	$id_paket = $_GET['id'];
	$sql = "DELETE FROM tb_paket WHERE id_paket = '$id_paket'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:dashboard.php');
	}
	else
	{
	echo "Hapus Data Gagal!";
	}
?>