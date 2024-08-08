<?php 
// koneksi database
include '../../koneksi.php';
 
// menangkap data yang di kirim dari form

$tgltransaksi = date('Y-m-d');
$nama_paket = $_POST['nama_paket'];
$alamat = $_POST['alamat'];
$paket = $_POST['paket'];
$berat = $_POST['berat'];
$pembayaran = $_POST['pembayaran'];
$statusorder = $_POST['statusorder'];
$tglambil = date('Y-m-d',strtotime($tgltransaksi,'+3days'));
$total = 0;

if($paket == "basah"){
 $total = $berat * 7000;
}

else if($paket == "Jas"){
	$total = $berat * 15000;
}

else if($paket == "One day service"){
	$total = $berat * 15000;
}

else if($paket == "paket antar jemput"){
	$total = $berat * 30000;
}

else if($paket == "Jacket"){
	$total = $berat * 28000;
}

else if($paket == "paket hemat"){
	$total = $berat * 8000;
}

else if($paket == "kiloan"){
	$total = $berat * 7000;
}

else if($paket == "Cuci+kering+setrika"){
	$total = $berat * 7000;
}



// update data ke database
mysqli_query($koneksi,"INSERT INTO transaksi values('','$tgltransaksi','$customer','$alamat','$paket','$berat','$pembayaran','$statusorder','$total','$tglambil')");
// mengalihkan halaman kembali ke index.php
header("location:user/transaksiuser.php");
 
?>