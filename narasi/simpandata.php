<?php
	include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
	$gempa=$_POST['gempa'];
	$judul=$_POST['judul'];	
	//$username=$_POST["username"];
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
	
	//echo $gempa1[0];
	
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
	
	$date=$tanggalfix.' '.$tanggal3.' '.'20'.$tanggal1[2];
	$time=$jam3.':'.$jam2[1].':'.$jam2[2];
	
	//echo $date ;
	
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
		$kota3="Bali";
	}else{
		$kota3=$kota3;
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
	$kota5=ucwords($kota5);
	
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
	$kedalaman3=explode("Km",$kedalaman2);
	
	$direction=$jarak.' '.$long1[3].' '.$arah.' '.$kota5.' '.$kota3;
		
//print_r(array_filter($c, function($value) { return $value !== ''; }));
//print_r($ar);

	//$angka = count($sigtotal);
		switch ($angka) {
			case 1:
			foreach ($sigtotal as $key=>$val){
			$sql = "INSERT INTO tb_narasi (Tanggal, OT, Lat, Bujur, Mag, Kedalaman, Lokasi, Stasiun, Keterangan) VALUES ('$date', '$time', '$lat2[1]', '$long1[0]', '$mag2[1]', '$kedalaman3[0]', '$direction', '$konversi[1]','$val ($key)')";
			}
			break;
			case 2:
			$sql = "INSERT INTO tb_narasi (Tanggal, OT, Lat, Bujur, Mag, Kedalaman, Lokasi, Stasiun, Keterangan) VALUES ('$date', '$time', '$lat2[1]', '$long1[0]', '$mag2[1]', '$kedalaman3[0]', '$direction', '$konversi[1]','$br[0] ($ar[0]),$br[1] ($ar[1])')";
			break;
			case 3:
			$sql = "INSERT INTO tb_narasi (Tanggal, OT, Lat, Bujur, Mag, Kedalaman, Lokasi, Stasiun, Keterangan) VALUES ('$date', '$time', '$lat2[1]', '$long1[0]', '$mag2[1]', '$kedalaman3[0]', '$direction', '$konversi[1]','$br[0] ($ar[0]), $br[1] ($ar[1]), $br[2] ($ar[2])')";
			break;
			case 4:
			$sql = "INSERT INTO tb_narasi (Tanggal, OT, Lat, Bujur, Mag, Kedalaman, Lokasi, Stasiun, Keterangan) VALUES ('$date', '$time', '$lat2[1]', '$long1[0]', '$mag2[1]', '$kedalaman3[0]', '$direction', '$konversi[1]','$br[0] ($ar[0]), $br[1] ($ar[1]), $br[2] ($ar[2]), $br[3] ($ar[3])')";
			break;
			case 5:
			$sql = "INSERT INTO tb_narasi (Tanggal, OT, Lat, Bujur, Mag, Kedalaman, Lokasi, Stasiun, Keterangan) VALUES ('$date', '$time', '$lat2[1]', '$long1[0]', '$mag2[1]', '$kedalaman3[0]', '$direction', '$konversi[1]','$br[0] ($ar[0]), $br[1] ($ar[1]), $br[2] ($ar[2]), $br[3] ($ar[3]), $br[4] ($ar[4])')";
			break;
			}

// Attempt insert query execution
//$sql = "INSERT INTO tb_narasi (Tanggal, OT, Lat, Bujur, Mag, Kedalaman, Lokasi, Stasiun, Keterangan)
//VALUES ('$date', '$time', '$lat2[1]', '$long1[0]', '$mag2[1]', '$kedalaman3[0]', '$direction', '$konversi[1]',' ')";

if ($koneksi->query($sql) === TRUE) {
    echo "New record created successfully";
	header("Location: data.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>

