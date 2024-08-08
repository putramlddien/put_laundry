<?php
	include "../koneksi.php";
	$id_order			=  	$_POST['id_order'];
	$nama_paket			=  	$_POST['nama_paket'];
	$nama_user			=	$_POST['nama_user'];
	$tanggal_pesan   	=   $_POST['tanggal_pesan'];
	$pengiriman			=   $_POST['pengiriman'];
	$berat              =   $_POST['berat'];
	$tipe_pembayaran    =   $_POST['tipe_pembayaran'];
	$status             =   $_POST['status'];


$sql = ("UPDATE tb_order set status='$status' WHERE id_order = '$id'");	
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:orderan.php');
	}
	else
	{
	echo "Edit Data Anggota Gagal!";
	}
?>	