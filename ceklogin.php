<?php
ini_set("display_errors", 0);
session_start(); //memulai session
include "koneksi.php";
$username = $_POST['username'];//mengambil isian username dan password dari form
$password = $_POST['password'];

//query untuk mengambil data user dari database sesuai dengan username inputan form
$q = "SELECT * FROM user WHERE username = '$username' && password = '$password'" ;
$result = mysqli_query($mysqli,$q);
$data = mysqli_fetch_array($result);
$cek = mysqli_num_rows($result);
//cek kesesuaian password masukan dengan database
if($cek == 1)
	{
		//menyimpan tipe user dan username dalam session
		$_SESSION['username'] = $data['username'];
		header('location:halamanutama.php');
	}
//jika password tidak sesuai
else 
	{
		header('location:gagallogin.php');
	}
?>
