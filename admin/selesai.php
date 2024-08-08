<?php
	include "../koneksi.php";
	
	$id_order = $_GET['id'];
	$sql = "DELETE FROM tb_order WHERE id_order = '$id_order'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:orderan.php');
	}
	else
	{
	echo "Hapus Data Gagal!";
	}
?>