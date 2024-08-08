<?php
include "../koneksi.php";

if(isset($_POST['login']))
{
    session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $alamat   = $_POST["alamat"];
    $id_order = $_POST["id_order"];
    $id_order = $_GET["id_order"];
    $tanggal_pesan    = $_POST["tanggal_pesan"];
    $pengiriman    = $_POST["pengiriman"];
    $nama_paket    = $_POST["nama_paket"];
    $berat    = $_POST["berat"];
    $tipe_pembayaran    = $_POST["tipe_pembayaran"];
    $total    = $_POST["total"];
    $status    = $_POST["status"];

    $data= mysqli_query($db_link, "SELECT * FROM tb_user 
    WHERE username = '$username' and password = '$password'");    
    $cek = mysqli_num_rows($data);

    if ($cek >= "1") {
        $data = mysqli_fetch_assoc($data);
        if($data['level'] == 1) {
            $_SESSION['username'] = $data['username']; 
            $_SESSION['nama_user'] = $data['nama_user']; 
            $_SESSION['alamat'] = $data['alamat'];
            $_SESSION['no_hp'] = $data['no_hp']; 
            $_SESSION['level'] = $data['level'];
            header('location:../admin/dashboard.php'); 
        } 
        else 
        {
            $_SESSION['username'] = $data['username']; 
            $_SESSION['nama_user'] = $data['nama_user']; 
            $_SESSION['alamat'] = $data['alamat'];
            $_SESSION['no_hp'] = $data['no_hp'];
            $_SESSION['level'] = $data['level'];
            header('location:../customer/dashboard.php');
        }
       }
       else 
       {
        header('location:login_user.php');
       }
}