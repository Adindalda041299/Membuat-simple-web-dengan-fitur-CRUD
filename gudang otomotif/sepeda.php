<?php
//koneksi ke database
$koneksi = new mysqli ("localhost","root","","gudang otomotif");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : WAREHOUSE</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">WAREHOUSE</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Adinda Robiyatul adawiyah - 402019618061 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
				</li>
                    <li><a href="index.php"><i class="fa fa-qrcode fa-3x"></i> Home</a></li>
                    <li><a href="sepeda.php?Halaman=sepeda"><i class="fa fa-table fa-3x"></i> sepeda</a></li>
                    <li><a href="home.php?Halaman=home"><i class="fa fa-edit fa-3x fa-3x"></i> more info</a></li>
                </ul>
               
            </div>	
        </nav>  
        <!-- /. CONTENT  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>DATA SEPEDA</h2>   
                        <h5>Welcome, Love to see you back. </h5>
                       
        <!-- /. CONTENT  -->
                    <hr />
                    <table class="table table-bordered">
                <thead>
                <tr class="success">
                    <th>no</th>
                    <th>kode</th>
                    <th>Merk</th>
                    <th>Jenis</th>
                    <th>Jumlah</th>
                    <th>aksi</th> 
                </tr>
                </thead>
        <tbody>
            <?php $nomor=1;?>
            <?php $ambil=$koneksi->query("SELECT * FROM sepeda"); ?>
            <?php while ($pecah= $ambil->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['kode_sepeda']; ?></td>
                <td><?php echo $pecah['Merk_sepeda']; ?></td>
                <td><?php echo $pecah['Jenis_sepeda']; ?></td>
                <td><?php echo $pecah['Jumlah_sepeda']; ?></td>
                <td>
                    <a href="index.php?halaman=hapusbarang&id_sepeda=<?php echo $pecah['id_sepeda'];?>" button class="btn btn-danger btn-lg"><i class="fa fa-pencil"></i> hapus</button></a>
                    <a href="index.php?halaman=perbaharui&id_sepeda=<?php echo $pecah ['id_sepeda'];?>" button class="btn btn-primary btn-lg"><i class="fa fa-edit "></i> perbaharui</button></a>
                </td>
            </tr>
            <?php $nomor++; ?>
            <?php } ?>
        </tbody>  
    </table> 
                    <a href= "index.php?halaman=tambahbarang" button class="btn btn-default btn-lg"><i class=" fa fa-refresh "></i> Update</button></a>       
                    
        </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
