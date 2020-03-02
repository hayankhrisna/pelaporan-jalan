<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
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
              &nbsp;&nbsp;&nbsp;<h1>INPUT DATA</h1>
            </div>
          </div>
        </nav>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- form -->
            <div id="kiri">
                <form action="inputsql.php" class="" method="post">
                     <div class="form-group col-lg-12">
                        <label>Nama Paket</label>
                        <input type="text" name="nama_paket" class="form-control" id="nama_paket">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Kontraktor</label>
                        <input type="text" name="kontraktor" class="form-control" id="kontraktor">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Konsultan Supervisor</label>
                        <input type="text" name="konsultan_supervisi" class="form-control" id="konsultan_supervisi">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Tahun Anggaran</label>
                        <input type="text" name="tahun_anggaran" class="form-control" id="tahun_anggaran">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Nama Jembatan</label>
                        <input type="text" name="nama_proyek" class="form-control" id="nama_proyek">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Lokasi</label>
                        <input type="text" name="lokasi" class="form-control" id="lokasi">
                    </div>
                    <br>
                    <!-- IKI TAK TAMBAHI FAR -->
                    <input type="submit" name="simpan" id="simpan" class="btn btn-primary #FFD700" value="simpan" />

                </form>
            </div>
           
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