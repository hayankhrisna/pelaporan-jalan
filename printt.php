<?php
	include "koneksi.php";
?>

<html>
<head>
	<title>Print Document</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <br/>
    <br/>
    <div id="header">
        <center>
        <img src="img/logo1.jpeg" width="200" height="50"/> &nbsp;&nbsp;&nbsp;
        <img src="img/logo3.jpeg" width="200" height="50"/> &nbsp;&nbsp;&nbsp;
        <img src="img/logo2.jpeg" width="200" height="50"/> &nbsp;&nbsp;&nbsp;
    </div>

        <hr size="3px"> <!--garis-->
     <div id="header">
        <center><h2> LAPORAN DOKUMENTASI</h2>
      </div>
        <hr size="3px"> <!--garis-->
    <div id="anu1">

<?php 
        $data = mysqli_query($mysqli,"SELECT * FROM data_laporan");
        $datashow = mysqli_fetch_array($data);
        {
?>
        <table border="0" width="800">
            <thead>
                <tr>
                    <td>Nama Paket</td>
                    <td>:</td>
                    <td><?php echo $datashow['nama_paket']; ?></td>
                    
                </tr>

                <tr>
                    <td>Kontraktor</td>
                    <td>:</td>
                    <td><?php echo $datashow['kontraktor']; ?></td>
                </tr>

                <tr>
                    <td>Konsultan Supervisi</td>
                    <td>:</td>
                    <td><?php echo $datashow['konsultan_supervisi']; ?></td>
                </tr>
                          
                <tr>
                    <td>Tahun Anggaran</td>
                    <td>:</td>
                    <td><?php echo $datashow['tahun_anggaran']; ?></td>
                </tr>
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
    <br>
    <br>

<!--gambar0-->
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
                        </tr>
                    </thead>
                    </table>
                </div>
            </div>

<!--gambar50-->
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

<!--GAMBAR100-->
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
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <style>
        #omg{
            display: grid;
            grid-template-columns: auto auto;
            grid-gap: 10px;
            padding-left: 80px;
            padding-right:30px;
            }
    </style>

    <style type="text/css">
        #kiri{
            width:50%;
            height:auto;
            background-color:#;
            float:left;
            }
        #kanan{
            width:50%;
            height:100%;
            background-color:#;
            float:right;
            }
    </style>

       
        
        <?php } ?>
    </table>
    <script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>
</body>
</html>
