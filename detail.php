<?php
ini_set("display_errors", 0);
session_start(); //memulai session
include "koneksi.php";

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/detail.css">

  </head>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(foto/logo1.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li>
              <a href="halamanutama.php">Home</a>
	          </li>
	          <li>
	              <a href="#">About</a>
	          </li>
	          <li>
              <a href="input.php">Input Data</a>
	          </li>
	          <li>
              <a href="tabel.php">Tabel Data</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              &nbsp;&nbsp;&nbsp;<h1>DETAIL</h1>
              <!-- <a class ="btn btn-success" href="cetak.php"><b>PRINT</b></a> -->
              </ul>
            </div>
          </div>
        </nav>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- form -->
              <div class="card">
                <div id="header">
                    <center>
                    <img src="img/logo1.jpeg" /> &nbsp;&nbsp;&nbsp;
                    <img src="img/logo3.jpeg" /> &nbsp;&nbsp;&nbsp;
                    <img src="img/logo2.jpeg" /> &nbsp;&nbsp;&nbsp;
                  </div>
                  <hr size="3px">
                  <div id="header">
                    <center><h2> FOTO DOKUMENTASI</h2>
                  </div>
                  <hr size="3px">
                  <div id="anu1">
                  <?php 
                            $data = mysqli_query($mysqli,"SELECT * FROM data_laporan WHERE id_laporan='$_GET[id]'"); // memberikan perintah query sql untuk menampilkan semua data di tabel jual
                            $datashow = mysqli_fetch_array($data);
                            //perintah untuk menampilkan semua data yang ada di tabel jual menggunakan perulangan
                             {
                            ?>
                      <table border="0" width="800">
                        <thead>
                          <tr>
                          <td>Nama Paket</td>
                          <td>:</td>&nbsp;
                          <td><?php echo $datashow['nama_paket']; ?></td>

                          </tr>
                          <tr>
                          <td>Kontraktor</td>
                          <td>:</td>&nbsp;
                          <td><?php echo $datashow['kontraktor']; ?></td>

                          </tr>
                          <tr>
                          <td>Konsultan Supervisi</td>
                          <td>:</td>&nbsp;
                          <td><?php echo $datashow['konsultan_supervisi']; ?></td>

                          </tr>
                          <tr>
                          <td>Tahun Anggaran</td>
                          <td>:</td>&nbsp;
                          <td><?php echo $datashow['tahun_anggaran']; ?></td>

                        </thead>

                        </table>
                        <style>
                        
                          #anu1{
                            padding-left: 80px;
                            padding-right: 30px;
                          }
                          </style>
                          
                    </div>
                    <hr size="3px">
                    <!-- foto -->

                  <div id="header" >
                      <div id="omg"> 
                        <div id="kiri">
                            <tr>
                            <td>Gambar 1</td>
                            <td>:</td>
                            <br>
                            <td><img src='<?php echo $datashow['gambar_0']; ?>' width="250" height="200"/></td>
                            </tr>
                            <br>
                            <br>
                        </div>
                      <!-- data -->
                        <div id="kanan">
                          <br>
                          <br>
                          <table border="0" width="500">
                        <thead>
                          <tr>
                          <td>Proyek</td>
                          <td>:</td>
                          <td><?php echo $datashow['nama_proyek']; ?></td>

                          </tr>
                          <tr>
                          <td>Pekerjaan</td>
                          <td>:</td>
                          <td><?php echo $datashow['pekerjaan']; ?></td>

                          </tr>
                          <tr>
                          <td>Lokasi</td>
                          <td>:</td>
                          <td><?php echo $datashow['lokasi']; ?></td>

                          </tr>
                          <tr>
                          <td>Proses</td>
                          <td>:</td>
                          <td>0%</td>

                        </thead>

                        </table>
                          </div>
                        </div>

                        <div id="header" >
                      <div id="omg"> 
                        <div id="kiri">
                              <tr>
                              <td>Gambar 2</td>
                              <td>:</td>
                              <br>
                              <td><img src='<?php echo $datashow['gambar_50']; ?>' width="250" height="200"/></td>
                              </tr>
                              <br>
                              <br>
                              
                        </div>
                      <!-- data -->
                        <div id="kanan">
                          <br>
                          <table border="0" width="500">
                        <thead>
                          <tr>
                          <td>Proyek</td>
                          <td>:</td>
                          <td><?php echo $datashow['nama_proyek']; ?></td>

                          </tr>
                          <tr>
                          <td>Pekerjaan</td>
                          <td>:</td>
                          <td><?php echo $datashow['pekerjaan']; ?></td>

                          </tr>
                          <tr>
                          <td>Lokasi</td>
                          <td>:</td>
                          <td><?php echo $datashow['lokasi']; ?></td>

                          </tr>
                          <tr>
                          <td>Proses</td>
                          <td>:</td>
                          <td>50%</td>

                        </thead>

                        </table>
                          </div>
                        </div>
                        
                        <div id="header" >
                      <div id="omg"> 
                        <div id="kiri">
                            <tr>
                            <td>Gambar 3</td>
                            <td>:</td>
                            <br>
                            <td><img src='<?php echo $datashow['gambar_100']; ?>' width="250" height="200"/></td>
                            </tr>
                            <br>
                            <br>
                        </div>
                      <!-- data -->
                        <div id="kanan">
                          <br>
                          <table border="0" width="500">
                        <thead>
                          <tr>
                          <td>Proyek</td>
                          <td>:</td>
                          <td><?php echo $datashow['nama_proyek']; ?></td>

                          </tr>
                          <tr>
                          <td>Pekerjaan</td>
                          <td>:</td>
                          <td><?php echo $datashow['pekerjaan']; ?></td>

                          </tr>
                          <tr>
                          <td>Lokasi</td>
                          <td>:</td>
                          <td><?php echo $datashow['lokasi']; ?></td>

                          </tr>
                          <tr>
                          <td>Proses</td>
                          <td>:</td>
                          <td>100%</td>

                        </thead>

                        </table>
                          </div>
                          <a href="printt.php"><img src="foto/PRINT.png" width="100" height="50">                      
                          </div>
                      <style>
                          #omg{
                          display: grid;
                          grid-template-columns: auto auto;
                          grid-gap: 10px;
                          padding-left: 80px;
                          padding-right:30px;

                          }
                          #duh{
                            padding-left: 33px;
                            padding-right: 33px;
                          }
                          </style>

                  <style type="text/css">
                          #kiri
                              {
                                  width:50%;
                                  height:auto;
                                  background-color:#;
                                  float:left;
                              }
                          #kanan
                              {
                                  width:50%;
                                  height:100%;
                                  background-color:#;
                                  float:right;
                              }
                      </style>
                  <?php } ?>

              </div>
                  <div>
                  </div>
                  
                  
            </div>
          </div>
        </div>

        </nav>

		</div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>