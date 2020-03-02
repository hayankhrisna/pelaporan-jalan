<?php
ini_set("display_errors", 0);
include "koneksi.php"; 

if(isset($_POST['simpan'])){
    $id_laporan = $_POST['id_laporan'];
    $nama_paket = $_POST['nama_paket'];
    $kontraktor= $_POST['kontraktor'];
    $konsultan_supervisi = $_POST['konsultan_supervisi'];
    $tahun_anggaran = $_POST['tahun_anggaran'];
    $nama_proyek   = $_POST['nama_proyek'];
    $pekerjaan   = $_POST['pekerjaan'];
    $lokasi   = $_POST['lokasi'];
    // $gambar_0  = $_POST['gambar_0'];
    // $gambar_50 = $_POST['gambar_50'];
    // $gambar_100 = $_POST['gambar_100'];
    // $gambar   = $_POST['gambar'];

    $data = mysqli_query($mysqli,"INSERT INTO data_laporan SET id_laporan = null ,nama_paket = '$nama_paket',kontraktor = '$kontraktor',konsultan_supervisi = '$konsultan_supervisi',tahun_anggaran = '$tahun_anggaran',nama_proyek='$nama_proyek',pekerjaan='$pekerjaan', lokasi='$lokasi' ") 
      or die ("data salah : ".mysqli_error($mysqli));
if($data) {
    header('location:inputgambar.php');
} else {
    header('location:gagaltambah.php');
  }
}
// , panjang_jalan='$panjang_jalan', lebar_jalan ='$lebar_jalan'
?>