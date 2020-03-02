<?php 
include "koneksi.php";
 

if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        echo "<b>Data yang dihapus tidak ada</b>";
    }
    else {
        
        $delete = mysqli_query($mysqli,"DELETE FROM data_laporan WHERE id_laporan='$_GET[id]'") or die ("Mysql Error : ".mysqli_error($mysqli)); 
        if($delete){
            header('location:tabel.php');  
        }
    }
}
?>