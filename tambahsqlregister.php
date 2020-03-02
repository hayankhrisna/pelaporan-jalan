<?php
ini_set("display_errors", 0);
include "koneksi.php"; 

if(isset($_POST['register'])){
    $nama    = $_POST['nama']; 
    $no_telp   = $_POST['no_telp'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $data = mysqli_query($mysqli,"INSERT INTO user SET nama='$nama', no_telp='$no_telp',
      username='$username', password='$password' ") 
      or die ("data salah : ".mysqli_error($mysqli));
if($data) {
    header('location:index.php');
} else {
    header('location:gagaltambah.php');
  }
}
// , panjang_jalan='$panjang_jalan', lebar_jalan ='$lebar_jalan'
?>