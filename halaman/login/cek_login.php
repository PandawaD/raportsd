<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include '../../config/koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

 
// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from login where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	
	foreach($login as $data){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = $data['level'];
	$_SESSION['status'] = "login";
	header("location:../../index.php");
	}
}else{
	header("location:login.php?pesan=gagal");
}
?>
