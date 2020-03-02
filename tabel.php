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
	              <a href="about.php">About</a>
	          </li>
	          <!-- <li>
              <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
              <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
              </ul>
	          </li> -->
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
<br>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              &nbsp;&nbsp;&nbsp;<h1>DAFTAR PEKERJAAN</h1>
            </div>
          </div>
        </nav>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <!-- Portfolio Grid Section -->
  <style>
        #index{ /* css untuk id index */
            margin-top: 50px;
            margin-left: 80px;
        }
        #a{ /* css untuk id a */
            margin-left: 200px;
        }
        #b{ /* css untuk id b */
            margin-left:490px;
        }
        </style>
  <section class="portfolio" id="portfolio">
    <div class="container">
    <div id="index"> <!-- memanggil css index -->
    <body background="img/back2.jpg"> 
    <div class="container"> <!-- tampilan kotak luar agar tidak full -->
    <div id="b">
				        <form class="form-inline" action="cari.php" method="post">
   					    <input class="form-control mr-sm-2" type="text" name="input_cari" placeholder="Cari Berdasar Lokasi" class="css-input" style="width:200px;" />
   					    <input class="btn btn-danger" type="submit" name="cari" value="  Cari  " class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
  				        </form>
                        </div>
    <br>
    <br>
        <div class="card col-sm-12"> <!-- untuk memberi banyaknya kolom bootstrap -->
        <p><h1><b></b></h1></p>
            <table class="table table-striped"> <!-- tabel -->
                    <tbody>
                    <thead>
                    <tr>
                <legend><h3><center><b>DAFTAR LAPORAN</b></center></h3></legend>
                </tr>
                <tr>
                            <td><b>ID</b></td> <!-- kolom id baju -->
                            <!-- <td align="left"><b>NAMA PAKET</b></td> 
                            <td align="left"><b>KONTRAKTOR</b></td> 
                            <td align="left"><b>KONSULTAN SUPERVISOR</b></td>
                            <td align="left"><b>TAHUN ANGGARAN</b></td>   -->
                            <td align="left"><b>NAMA PROYEK</b></td> 
                            <td align="left"><b>PEKERJAAN</b></td> 
                            <td align="left"><b>LOKASI</b></td> 
                            <td align="left"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACTION</b></td><!-- kolom aksi -->
                        </tr>
                        </thead>
                            <?php 
                            $data = mysqli_query($mysqli,"SELECT * FROM data_laporan"); // memberikan perintah query sql untuk menampilkan semua data di tabel jual
                            //perintah untuk menampilkan semua data yang ada di tabel jual menggunakan perulangan
                            while ($show = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $show['id_laporan'];?></td> 
                                <!-- <td><?php echo $show['nama_paket'];?></td>  -->
                                <!-- <td><?php echo $show['kontraktor'];?></td>  -->
                                <!-- <td><?php echo $show['konsultan'];?></td>  -->
                                <!-- <td><?php echo $show['tahun_anggaran'];?></td>  -->
                                <td><?php echo $show['nama_proyek'];?></td> 
                                <td><?php echo $show['pekerjaan'];?></td> 
                                <td><?php echo $show['lokasi'];?></td>
                                <td><a href="update.php?id=<?=$show['id_laporan'];?>"><button style="margin-left:50px"  class="btn btn-info">Edit</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <td><a href="delete.php?id=<?=$show['id_laporan'];?>"><button style="margin-left:-50px"  type="delete" class="btn btn-info">Delete</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <td><a href="detail.php?id=<?=$show['id_laporan'];?>"><button style="margin-left:-50px"  class="btn btn-danger">Detail</button></a>
                                </a></td></td>
                            </tr>
                            <?php } ?>
                </tbody>
            </table>
            </div>
            	
</head>
</table>
    </div>
  </section>
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