<?php
ini_set("display_errors", 0);
include "koneksi.php"; 

if(isset($_POST['update'])){
    // $gambar_0 = $_POST['gambar_0'];
    // $gambar_50 = $_POST['gambar_50'];
    // $gambar_100 = $_POST['gambar_100'];
    $id   = $_POST['id_laporan'];
    $nama_proyek = $_POST['nama_proyek'];
    $pekerjaan = $_POST['pekerjaan'];
    $lokasi = $_POST['lokasi'];
    $nama_paket   = $_POST['nama_paket'];
    $kontraktor = $_POST['kontraktor'];
    $konsultan_supervisi = $_POST['konsultan_supervisi'];
    $tahun_anggaran = $_POST['tahun_anggaran'];

$data = mysqli_query($mysqli,"UPDATE data_laporan SET 
        nama_proyek = '$nama_proyek',
        pekerjaan = '$pekerjaan', 
        lokasi = '$lokasi',
        nama_paket = '$nama_paket',
        kontraktor = '$kontraktor',
        konsultan_supervisi = '$konsultan_supervisi',
        tahun_anggaran = '$tahun_anggaran'
        where id_laporan='$id' ") or die ("data salah : ".mysqli_error($mysqli));

if($data) {
    header('location:tabel.php');
} else {
    header('location:gagaltambah.php');
  }
}

?>


