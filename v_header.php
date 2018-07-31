<!--header-->
<!DOCTYPE html>
<html lang="en">
<?php
include("koneksi.php"); 
$page = $_SERVER['PHP_SELF'];
$sec = "10000";
?>
<head>
    <head> 
		<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
        <!-- Theme Made By www.w3schools.com - No Copyright --> 
        <title>Stasiun Geofisika Sanglah</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <script type="text/javascript" scr="assets/js/config.js"></script>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/java.js')"></script>
        <script src="assets/js/highcharts.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/modules/series-label.js"></script>
        <script src="https://code.highcharts.com/highcharts.src.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.22.2/sweetalert2.min.css" />
        <link href="assets/img/icon.png" type="icon/x-image" rel="shortcut icon">
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/series-label.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>
		
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

		<script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "125%" 
        }
		</script>
 
          <!-- CSS Map dan Grafik--> 
          <style type="text/css"> 
            #map { 
              height: 100%; 
              width:100%; 
              margin-top: 10px;
            }
            #container {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto
}
            
          </style>
    </head>

    <body onload="zoom()" style="background-color: #f1f1f1; background: url('assets/img/bg.jpg'); width: 100%">

           <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white; margin: 0 0 0 0; box-shadow: 0px 0px 5px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand" style="padding-top: 10px;">
                        <ul>
                        <span> 
                            <a href="index.php">
                                <img src="assets/img/logo.png" width="30px">
                            </a>
                        </span> 
                        <span class="hidden-xs hidden-md" style="font-weight:bold; color:black; font-size: 14px" >
                            PUSAT GEMPA REGIONAL III
                        </span> 
                        </ul>
                    </div> 
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" style="font-size: 12px; font-weight: bold;">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">STASIUN<span class="sr-only">(current)</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" style="font-size: 14px">
                                <li><a href="profile">PGR III</a></li>
                                <li><a href="profile/visidanmisi">Stageof Sanglah</a></li>
                                <li><a href="profile/struktur">Stageof Mataram</a></li> 
								<li><a href="profile/struktur">Stageof Waingapu</a></li> 
                            </ul>
                        </li>
                        <li><a href="repository.php">REPOSITORY</a></li>
                        <li><a href="klimatologi">LAPORAN</a></li>
						<li><a href="klimatologi">KONTAK</a></li>
						<li><a href="klimatologi">SETTING</a></li>
                        <li><a href="logout.php">LOGOUT</i></a>                        
                    </ul>
                </div> <!-- /.navbar-collapse -->
            </div>
        </nav>
        
<!--/.header-->
