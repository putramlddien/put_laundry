<?php  
	include "../../koneksi.php";
	$nama_paket			=  	$_POST['nama_paket'];
	$nama_user			=	$_POST['nama_user'];
	$tanggal_pesan   	=   $_POST['tanggal_pesan'];
	$pengiriman			=   $_POST['pengiriman'];
	$berat              =   $_POST['berat'];
	$tipe_pembayaran    =   $_POST['tipe_pembayaran'];
	$status             =   $_POST['status'];
	$total = 0;

if($nama_paket == "Paket Ninja"){
 $total = $berat * 7000;
}

else if($nama_paket == "Paket Kijang"){
	$total = $berat * 15000;
}

else if($nama_paket == "Paket Pagination"){
	$total = $berat * 15000;
}

else if($nama_paket == "Paket Sapar"){
	$total = $berat * 30000;
}

else if($nama_paket == "Paket Malem"){
	$total = $berat * 28000;
}


	
$sql = ("insert into tb_order set nama_paket='$nama_paket',nama_user='$nama_user',pengiriman='$pengiriman',berat='$berat',tipe_pembayaran='$tipe_pembayaran',tanggal_pesan='$tanggal_pesan',status='$status',total='$total'");
$query = mysqli_query($db_link,$sql);

header("location:my_order.php");
?>






























