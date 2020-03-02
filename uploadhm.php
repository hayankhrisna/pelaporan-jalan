<?php
include 'koneksi.php';

if(isset($_POST['image'])) {

    $code = $_FILES['upload_image']['error'];

    if($code === 0) {
        $pesan = "";
        $folder = "/foto/";
        $tmp = $_FILES['upload_image']['tmp_name'];
        $nama_file = $_FILES['upload_image']['name'];
        $path = "$folder/$nama_file";
        $upload_check = false;

        $tipe_file = array('image/jpeg','image/gif','image/png'); //menyimpan array untuk ekstensi file gambar
        if (!in_array($_FILES["upload_image"]["type"], $tipe_file)) { //pengecekan jika tipe ekstensi file yang diupload tidak sesuai
          $pesan = "Cek kembali ekstensi file anda (*.jpeg,*.jpg,*.png,*.gif) <br/>"; //tampilkan pesan jika ekstensi tidak sesuai
          $upload_check = true;
        }
        
  
        if(file_exists($path)){ //jika file sudah ada
          $pesan = "File dengan Nama yang sama telah tersimpan, try again<br/>"; //tampilkan pesan ini
          $upload_check = true; //pengecekan upload menjadi benar
        }
  
        $ukuran = $_FILES["upload_image"]["size"]; //mengecek size dari file yang diupload
          if ($ukuran > 700000) { // jika ukuran file melebihi 800KB maka,
            $pesan .= "Ukuran Melebihi 700 KB <br/>"; //akan muncul pesan berikut
            $upload_check = true; //pengecekan upload bernilai benar
          }
  
        if (!$upload_check AND move_uploaded_file($tmp, $path)) { //jika pengecekan bernilai tidak true
          $pesan .= "form berhasil diproses"; 
          $gambar = "$folder/".basename( $_FILES["upload_image"]["name"]);
        //   $id = $_POST['id'];
        //   $title = $_POST['todo_title'];
        //   $description = $_POST['description'];
        }
        else {
          $pesan .= "form gagal diproses";
        }
  
  
    //   $id = $_POST['id'];
    //     $title = $_POST['todo_title'];
    //   $description = $_POST['description'];
      // echo "$id,$title";
  
      $query = "INSERT INTO todolist VALUES ('$id','$title', '$description','.$path.', now() )";
      $insertTodo = mysqli_query($mysqli, $query);
      if($insertTodo){
       header("location:detail.php");
      }else{
         echo mysqli_error($mysqli);
      }
      mysqli_close($mysqli);
    
    } 

    }
}
?>