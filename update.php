<?php
include "koneksi.php";
$data = mysqli_query($mysqli, "SELECT * FROM data_laporan WHERE id_laporan='$_GET[id]'");
$datashow = mysqli_fetch_array($data);
?>
  <style>
        #index {  
            margin-top: 100px;
            margin-left: 420px;
            margin-bottom: 100px;
        }
    </style>

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
              &nbsp;&nbsp;&nbsp;<h1>UPDATE DATA</h1>
            </div>
            
          </div>
        </nav>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- form -->
                   <div class="card col-sm-7"> 
            <form action="updatesql.php" class="inner-login" method="POST"> 
                  <tr>
                      <br>
                  <br>
                  </tr>

                  <div class="form-group">
                  <tr>
                  <th  class="cal-sm-2" scope="row"><b>ID PROYEK</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                  <input type="text" name="id_laporan" id="id_laporan" value="<?php echo $_GET['id'];?>" readonly> </td>
                  </tr>
                </div>

                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row"><b>NAMA PROYEK</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                <td><input type="text" name="nama_proyek" id="nama_proyek" value="<?php echo $datashow['nama_proyek'];?>" ></td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row"><b>PEKERJAAN</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                <td><input type="text" name="pekerjaan" id="pekerjaan" value="<?php echo $datashow['pekerjaan'];?>" ></td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row"><b>LOKASI</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                <td><input type="text" name="lokasi" id="lokasi" value="<?php echo $datashow['lokasi'];?>" ></td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row"><b>NAMA PAKET</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                <td><input type="text" name="nama_paket" id="nama_paket" value="<?php echo $datashow['nama_paket'];?>" ></td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row"><b>KONTRAKTOR</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                <td><input type="text" name="kontraktor" id="kontraktor" value="<?php echo $datashow['kontraktor'];?>" ></td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row"><b>KONSULTAN SUPERVISI</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                <td><input type="text" name="konsultan_supervisi" id="konsultan_supervisi" value="<?php echo $datashow['konsultan_supervisi'];?>" ></td>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row"><b>TAHUN ANGGARAN</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                <td><input type="text" name="tahun_anggaran" id="tahun_anggaran" value="<?php echo $datashow['tahun_anggaran'];?>" ></td>
                </tr>
                </div>

                <button type="submit" name="update" class="btn btn-info">Edit</button>
                </div>
        </form>
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

                <!-- <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row"><b>Gambar 0%</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                <img  src="img/<?php echo $datashow['gambar_0'];?>" width="208px" id="gambar_0b"/>

                </tr>
                </div>
                
                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row"><b>Gambar 50%</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                <img  src="img/<?php echo $datashow['gambar_50'];?>" width="208px" id="gambar_50b"/>
                </tr>
                </div>

                <div class="form-group">
                <tr>
                <th  class="cal-sm-2" scope="row"><b>Gambar 100%</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
                <img  src="img/<?php echo $datashow['gambar_100'];?>" width="208px" id="gambar_100" />
                </tr>
                </div>
                <br> -->