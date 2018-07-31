<?php
	//include "kop.html";
	include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
	//$evid = $_GET['evid']; // assigment nim dengan nilai nim yang akan diedit
	//$sql = mysqli_query($koneksi, "SELECT * FROM earthquake WHERE evid ='$evid'"); // query untuk memilih entri data dengan nilai nim terpilih
	//$row = mysqli_fetch_assoc($sql);
	//Konversi parameter stasiun sanglah dengan menghilangkan spasi pada Lok:, dan mengubsh - jadi , di lat long;
	$h=$_POST['op1'];
	$konversi=explode("::",$gempa);
	if ($konversi[1]=="BMKG-DNP"){
		$gempay=explode(",",$konversi[0]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=="BMKG-DNP"){
		$gempaxx=explode("-",$gempay[2]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=="BMKG-DNP"){
		$gempaxxx=explode(":",$gempaxx[0]);
	}else{ 
	$gempax=$gempa;
	}	
	if ($konversi[1]=="BMKG-DNP"){
		$gempaxxxx=explode(" ",$gempaxxx[1]);
	}else{ 
	$gempax=$gempa;
	}	
	if ($konversi[1]=="BMKG-DNP"){
		$gempax5=explode("(",$gempaxx[1]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=="BMKG-DNP"){
		$gempax6=explode(" ",$gempax5[0]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=='BMKG-DNP'){	
		$gempax= $gempay[0].','.$gempay[1].', '.$gempaxxx[0].':'.$gempaxxxx[1].','.str_replace(' ','',$gempax6[1]).' '.$gempax6[2].' ('.$gempax5[1].'-'.$gempaxx[2].','.$gempay[3];
	}else{ 
	$gempax=$gempa;
	}
	$gempa1=explode(",",$gempax);
	
	//echo $gempaxx[2];
	
	
	//buat tanggal
	function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}
	//pemisah waktu
	$waktu=$gempa1[1];
	$jam=explode(" ",$waktu);
	$tanggal=$jam[1];
	$tanggal1=explode("-",$jam[1]);
	$jam1=$jam[2];
	$jam2=explode(":",$jam1);
	
	//jam
	if ($jam2[0]=='01'){
		$jam3='02';
	}elseif ($jam2[0]=='02'){
		$jam3='03';
	}elseif ($jam2[0]=='03'){
		$jam3='04';
	}elseif ($jam2[0]=='04'){
		$jam3='05';
	}elseif ($jam2[0]=='05'){
		$jam3='06';
	}elseif ($jam2[0]=='06'){
		$jam3='07';
	}elseif ($jam2[0]=='07'){
		$jam3='08';
	}elseif ($jam2[0]=='08'){
		$jam3='09';
	}elseif ($jam2[0]=='09'){
		$jam3='10';
	}elseif ($jam2[0]=='10'){
		$jam3='11';
	}elseif ($jam2[0]=='11'){
		$jam3='12';
	}elseif ($jam2[0]=='12'){
		$jam3='13';
	}elseif ($jam2[0]=='13'){
		$jam3='14';
	}elseif ($jam2[0]=='14'){
		$jam3='15';
	}elseif ($jam2[0]=='15'){
		$jam3='16';
	}elseif ($jam2[0]=='16'){
		$jam3='17';
	}elseif ($jam2[0]=='17'){
		$jam3='18';
	}elseif ($jam2[0]=='18'){
		$jam3='19';
	}elseif ($jam2[0]=='19'){
		$jam3='20';
	}elseif ($jam2[0]=='20'){
		$jam3='21';
	}elseif ($jam2[0]=='21'){
		$jam3='22';
	}elseif ($jam2[0]=='22'){
		$jam3='23';
	}else{
		$jam3='00';
	}
	
	//nambahin tanggal jika lewat 23
	if ($jam3<$jam2[0]){
		$tanggalfix=$tanggal1[0]+1;
	}else{
		$tanggalfix=$tanggal1[0];
	}
	
	//hari dan tanggal
	if ($tanggal1[1]=='Jan'){
		($tanggal2=01)&&$tanggal3='Januari';
	}elseif ($tanggal1[1]=='Feb'){
		($tanggal2=02)&&$tanggal3='Februari';
	}elseif ($tanggal1[1]=='Mar'){
		($tanggal2=03)&&$tanggal3='Maret';
	}elseif ($tanggal1[1]=='Apr'){
		($tanggal2=04)&&$tanggal3='April';
	}elseif ($tanggal1[1]=='Mei'){
		($tanggal2=05)&&$tanggal3='Mei';
	}elseif ($tanggal1[1]=='Jun'){
		($tanggal2=06)&&$tanggal3='Jun';
	}elseif ($tanggal1[1]=='Jul'){
		($tanggal2=07)&&$tanggal3='Juli';
	}elseif ($tanggal1[1]=='Agu'){
		($tanggal2=08)&&$tanggal3='Agustus';
	}elseif ($tanggal1[1]=='Sep'){
		($tanggal2=09)&&$tanggal3='September';
	}elseif ($tanggal1[1]=='Okt'){
		($tanggal2=10)&&$tanggal3='Oktober';
	}elseif ($tanggal1[1]=='Nov'){
		($tanggal2=11)&&$tanggal3='November';
	}else{
		($tanggal2=12)&&$tanggal3='Desember';
	}
	$tanggal4 = '20'.$tanggal1[2].'-'.$tanggal2.'-'.$tanggalfix.'';
	$day = date('D', strtotime($tanggal4));
	$dayList = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
	);
	
	//pemisah magnitudo	
	$mag=$gempa1[0];
	$mag1=explode(" ",$mag);
	$mag2=explode(":",$mag1[2]);
	$mag3 = str_replace('.', ',', $mag2[1]);
	
	//pemisah latitude
	$lat=$gempa1[2];
	$lat1=explode(" ",$lat);
	$lat2=explode(":",$lat1[1]);
	$lat3 = str_replace('.', ',', $lat2[1]);
	$long=$gempa1[3];
	$long1=explode(" ",$long);
	$long3 =str_replace('.', ',', $long1[0]);
	
	//pemisah jarak dan kota
	$jarak=str_replace('(', ' ', $long1[2]);
	$kota=explode("-",$long1[5]);
	$kota1=strtolower($kota[0]);
	$kota2=$kota[1];
	$kota3=str_replace(')', '', $kota2);
	
	//NTB, NTT, BALI
	if ($kota3=="BALI"){
		$kotakota="Bali";
	}else{
		$kotakota=$kota3;
	}

	//Kabupaten
	$kota4=$kota1;
	if ($kota4=='sumbabaratdaya'){
		$kota5='sumba barat daya';
	}elseif ($kota4=='sumbabarat'){
		$kota5='sumba barat';
	}elseif ($kota4=='sumbatimur'){
		$kota5='sumba timur';
	}elseif ($kota4=='sumbatengah'){
		$kota5='sumba tengah';
	}elseif ($kota4=='sumbawabarat'){
		$kota5='sumbawa barat';
	}elseif ($kota4=='lombokutara'){
		$kota5='lombok utara';
	}elseif ($kota4=='lomboktengah'){
		$kota5='lombok tengah';
	}elseif ($kota4=='lombokbarat'){
		$kota5='lombok barat';
	}elseif ($kota4=='lomboktimur'){
		$kota5='lombok timur';
	}elseif ($kota4=='manggaraibrt'){
		$kota5='manggarai barat';
	}elseif ($kota4=='manggaraibarat'){
		$kota5='manggarai barat';
	}elseif ($kota4=='manggaraitimur'){
		$kota5='manggarai timur';
	}elseif ($kota4=='sumbawabaratdaya'){
		$kota5='sumbawa barat daya';
	}elseif ($kota4=='sumbawabaratdaya'){
		$kota5='sumbawa barat daya';
	}elseif ($kota4=='sumbawabarat'){
		$kota5='sumbawa barat';
	}else{
		$kota5=$kota1;
	}
	$kota6=ucwords($kota5);
	
	//pemisah arah
	if ($long1[4]=='TimurLaut'){
		$arah='Timur Laut';
	}elseif ($long1[4]=='BaratLaut'){
		$arah='Barat Laut';
	}elseif ($long1[4]=='BaratDaya'){
		$arah='Barat Daya';
	}else{
		$arah=$long1[4];
	}
	
	//pemisah kedalaman
	$kedalaman=explode(":",$gempa1[4]);
	$kedalaman1=$kedalaman[1];
	$kedalaman2=str_replace('K', 'k', $kedalaman[1]);
	
	$kdlmn3=0;
	if ($kedalaman1<= 60){
		$kdlmn3="dangkal";
	}else if ($kedalaman1> 60 && $kedalaman1<= 300 ){
		$kdlmn3="menengah";
	}else {
		$kdlmn3="dalam";
	}	
	
	

	$sig1 = isset($_POST['sig1']) ? $_POST['sig1'] : "";
	$sig2 = isset($_POST['sig2']) ? $_POST['sig2'] : "";
	$sig3 = isset($_POST['sig3']) ? $_POST['sig3'] : "";
	$sig4 = isset($_POST['sig4']) ? $_POST['sig4'] : "";
	$sig5 = isset($_POST['sig5']) ? $_POST['sig5'] : "";
	$kota1 = isset($_POST['kota1']) ? $_POST['kota1'] : "";
	$kota2 = isset($_POST['kota2']) ? $_POST['kota2'] : "";
	$kota3 = isset($_POST['kota3']) ? $_POST['kota3'] : "";
	$kota4 = isset($_POST['kota4']) ? $_POST['kota4'] : "";
	$kota5 = isset($_POST['kota5']) ? $_POST['kota5'] : "";
	$a = array(''.$sig1.'', ''.$sig2.'', ''.$sig3.'', ''.$sig4.'', ''.$sig5.''); 
	$kota11=ucwords($kota1);
	$kota22=ucwords($kota2);
	$kota33=ucwords($kota3);
	$kota44=ucwords($kota4);
	$kota55=ucwords($kota5);
	$b = array(''.str_replace('Dan','dan', $kota11).'', ''.''.str_replace('Dan','dan', $kota22).'', ''.str_replace('Dan','dan', $kota33).'', ''.str_replace('Dan','dan', $kota44).'', ''.str_replace('Dan','dan', $kota55).''); 
	$c = array_combine($a, $b); 
	$sigtotal=array_filter($c, function($value) { return $value !== ''; });
	$af=array_filter($a, function($value) { return $value !== ''; });
	$bf=array_filter($b, function($value) { return $value !== ''; });
	$ar = array_values($af);
	$br = array_values($bf);
	
//print_r(array_filter($c, function($value) { return $value !== ''; }));
//print_r($ar);
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Program Narasi</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!-- Start container -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">BMKG MATARAM</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Grafik</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Repositori</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Aplikasi</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="eventtrigger2.php">Program Narasi</a>
            </li>
            <li>
              <a href="kirim2.php.html">Telegram</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text" href="eventtrigger.php">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
	<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Program Narasi</li>
      </ol>
 
	
	 
				
<script>
function copyToClipboard() {

  // Create a new textarea element and give it id='t'
  let textarea = document.createElement('textarea')
  textarea.id = 't'
  // Optional step to make less noise on the page, if any!
  textarea.style.height = 0
  // Now append it to your page somewhere, I chose <body>
  document.body.appendChild(textarea)
  // Give our textarea a value of whatever inside the div of id=containerid
  textarea.value = document.getElementById("myInput").innerText
  // Now copy whatever inside the textarea to clipboard
  let selector = document.querySelector('#t')
  selector.select()
  document.execCommand('copy')
  // Remove the textarea
  document.body.removeChild(textarea) 
}
</script>			
	<!-- start popup -->
	<div class="container">	
	<div class="row">
    <div id="close">
    <div class="container-popup">   
	<div class="modal-header">
	 <meta charset="utf-8">
			<link rel="stylesheet" href="popup2.css">
            <div class="modal-title"><small>Copyright © Pande Komang Gede Arta Negara</small>
			</br>
			</div>	
	</div>			  
<form action="#" method="post" class="popup-form">
<div id="myInput">
<table border="0" width="600px" align="center">
		<tr>
			<td width="70px" colspan="3" align="center"><b>GEMPABUMI TEKTONIK MENGGUNCANG <?php echo strtoupper($judul); ?>, <br> TIDAK BERPOTENSI TSUNAMI</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2">
			<?php echo $dayList[$day]; ?>, <?php echo $tanggalfix.'&nbsp;'.$tanggal3.'&nbsp;'.'20'.$tanggal1[2]; ?> pukul <?php echo $jam3.'.'.$jam2[1].'.'.$jam2[2];?> WITA, wilayah <?php echo ucwords($judul); ?> diguncang gempabumi tektonik.  Hasil analisa BMKG menujukkan bahwa gempabumi ini berkekuatan M=<?php echo $mag3; ?>. Episenter terletak pada kordinat <?php echo $lat3; ?> LS dan <?php echo $long3; ?> BT atau tepatnya pada jarak <?php echo $jarak.'&nbsp;'.$long1[3].'&nbsp;'.'arah'.'&nbsp;'.$arah;?> <?php echo $kota6; ?> <?php echo $kotakota ?> pada kedalaman <?php echo $kedalaman2;?>.  
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
    <tr>
        <td colspan="2">
				<?php 
					$angka = count($sigtotal);
					switch ($angka) {
					case 1:
					foreach ($sigtotal as $key=>$val){
					echo "Dampak gempabumi berdasarkan laporan masyarakat menunjukkan bahwa wilayah $val
					mengalami guncangan dalam skala intensitas $key. 
					Di daerah ini guncangan gempabumi dirasakan oleh beberapa orang.";
					}
					break;
					case 2:
					echo "Dampak gempabumi berdasarkan laporan masyarakat berupa guncangan lemah dirasakan di wilayah $br[0]
					dalam skala intensitas $ar[0]. Selain itu, di $br[1] guncangan dirasakan dalam skala intensitas $ar[1]. 
					Di daerah ini guncangan gempabumi dirasakan oleh beberapa orang.";
					break;
					case 3:
					echo "Dampak gempabumi berdasarkan laporan masyarakat berupa guncangan lemah dirasakan di wilayah $b[0] dalam
					skala intensitas $ar[0]. Guncangan juga dirasakan di $br[1] dalam skala intensitas $ar[1]. 
					Selain itu, di $br[2] guncangan dirasakan dalam skala intensitas $ar[2]. 
					Hasil pemodelan menunjukkan bahwa gempa ini tidak berpotensi tsunami.";
					break;
					case 4:
					echo "Dampak gempabumi berdasarkan laporan masyarakat berupa guncangan lemah dirasakan di wilayah $br[0] 
					dalam skala intensitas $ar[0]. Guncangan juga dirasakan di $br[1] dalam skala intensitas $ar[1].
					Selain itu, di $br[2] guncangan dirasakan dalam skala intensitas $ar[2]. 
					Sementara itu, guncangan dalam skala intensitas $ar[3] dirasakan di $br[3].
					Hasil pemodelan menunjukkan bahwa gempa ini tidak berpotensi tsunami.";
					break;
					case 5:
					echo "Dampak gempabumi berdasarkan laporan masyarakat berupa guncangan lemah dirasakan di wilayah $br[0] 
					dalam skala intensitas $ar[0]. Guncangan juga dirasakan di $br[1] dalam skala intensitas $ar[1]. 
					Selain itu, di $br[2] guncangan dirasakan dalam skala intensitas $ar[2]. 
					Sementara itu, guncangan dalam skala intensitas $ar[3] dirasakan di $br[3], 
					termasuk di $br[4], juga dirasakan guncangan kuat dalam skala intensitas $ar[4]. 
					Hasil pemodelan menunjukkan bahwa gempa ini tidak berpotensi tsunami.";
					break;
					}
				?>
		</td>
	</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>

	<tr>
    	<td colspan="2">Jika ditinjau dari kedalaman hiposenternya, gempabumi yang terjadi merupakan jenis gempabumi <?php echo $kdlmn3; ?> akibat 
		 <?php echo $h; ?>
		</td>
    </tr>
	<tr>
    	<td>&nbsp;</td>
    </tr>
	<tr>
    	<td colspan="2">Hingga pukul <?php $tanggal= mktime(date("m"),date("d"),date("Y")); date_default_timezone_set('Asia/Kuala_Lumpur');$jam=date("H:i");echo $jam; ?> WITA, Hasil monitoring BMKG belum menunjukkan adanya aktivitas gempabumi susulan (aftershock).  Kepada masyarakat 
		di wilayah <?php echo ucwords($judul); ?> dihimbau agar tetap tenang dan tidak terpengaruh oleh isu yang tidak dapat dipertanggungjawabkan kebenarannya.*</td>
    </tr>
	<tr>
    	<td>&nbsp;</td>
    </tr>
	<tr>
    	<td colspan="2">Mataram, <?php echo tgl_indo(date('Y-m-d'));?></td>
    </tr>
	<tr>
    	<td colspan="2">Kepala Stasiun Geofisika Mataram </td>
    </tr>
	<tr>
    	<td colspan="2">Agus Riyanto, SP.MM </td>
    </tr>
	</div>
   
</table>
</div>
<br>
</form>
<div class="modal-footer">
<table border="0" width="600px" align="center">
    	    <td align="left" valign="top">
            	<a href="https://api.whatsapp.com/send?&text=%20" target="blank" onclick="copyToClipboard()">
				<img src="wa4.JPG" >
				</a>
			</td>
			</br>
			<td align="left" valign="top">
            	<a href="kirim2.php" onclick="copyToClipboard()">
				<img src="telegram2.JPG">
				</a>
			</td>	
			<td><table border="1" width="350px" align="center">
			</table></td>
			

</table>
           <div> 
            <button class= "close" type="button" onclick="history.back(-1)" aria-hidden="true"/>
			<i class="fa fa-fw fa-close"></i></button>
			</div>
        </div>
    </div>
	</div>
	</div>

<!-- end popup -->

	  
	  <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Program by Stasiun Geofisika Mataram 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
   </div>
</body>

</html>






































