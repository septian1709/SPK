<?php
session_start();
?>
<?php 
include("koneksi.php");
$nama=$_SESSION['User'];
//echo $nama;
$query = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE User='$nama'");
$roww = mysqli_fetch_assoc($query);
$namalengkap=$roww['Nama'];
$nip=$roww['NIP'];
?>
<?php
    include("kop2.php");
	include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
	$sql = mysqli_query($koneksi, "SELECT * FROM tb_narasi WHERE Status='Aktif'");
	$row = mysqli_fetch_array($sql);
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
	?>
        <center>
	<table align="center" style="border-collapse:collapse; margin-top:8mm;" cellpadding="2px" width="600px" border="0">
    	<tr>
        	<td colspan="3"><center><b><u>BERITA GEMPABUMI</u></b></center></td>
    	</tr>
        <tr>
            <td style="padding-top:20px;" colspan="3">1. Telah terjadi gempabumi tektonik dari hasil analisa oleh BMKG dengan parameter gempabumi sebagai berikut :</td>
    	</tr>
        <tr>
            <td style="padding-top:20px; padding-left:30px; width: 30%;">Tanggal</td>
            <td style="width:1%; padding-top:20px;">:</td>
			<td style="padding-top:20px;"><?php echo $row['Tanggal'];?></td>
    	</tr>
        <tr>
            <td style="padding-left:30px; width: 30%;">Waktu</td>
            <td style="width:1%;">:</td>
            <td ><?php echo $row['OT'];?> WITA</td>
    	</tr>
        <tr>
            <td style="padding-left:30px; width: 30%;">Magnitude</td>
            <td style="width:1%;">:</td>
            <td ><?php echo $row['Mag']?> Skala Richter</td>
    	</tr>
        <tr>
            <td style="padding-left:30px; width: 30%;">Kedalaman</td>
            <td style="width:1%;">:</td>
            <td ><?php echo $row['Kedalaman']?> km</td>
    	</tr>
        <tr>
            <td style="padding-left:30px; width: 30%;">Lokasi</td>
            <td style="width:1%;">:</td>
            <td ><?php echo $row['Lat']." LS - ".$row['Bujur']." BT"?></td>
    	</tr>
       <tr>
            <td style="padding-left:30px; width: 30%;">Keterangan</td>
            <td style="width:1%;">:</td>
            <td ><?php echo $row['Lokasi']?></td>
    	</tr>
        <tr>
            <td style="padding-left:30px; width: 30%;">Dirasakan di</td>
            <td style="width:1%;">:</td>
			<td ><?php echo $row['Keterangan']?></td>
    	</tr>
		</table>
		<table align="center" style="border-collapse:collapse;" cellpadding="2px" width="600px" border="0">
		<tr>
			<td align= "center"><img width='250' height='325' src="imagessig/<?php echo $row['sig'] ?>"></td>
			<td align= "center"><img width='250' height='325' src="imagesmmi/<?php echo $row['mmi'] ?>"></td>
    	</tr>
		</table>
		<table align="center" style="border-collapse:collapse;" cellpadding="2px" width="600px" border="0">
        <tr>
            <td style="padding-top:20px;" colspan="3">2. Demikian Laporan Berita Gempabumi yang dapat kami sampaikan untuk dipergunakan sebagaimana mestinya.</td>
    	</tr>
    </table>
    <table align="center" style="border-collapse:collapse; margin-left:12cm; margin-top:10mm;" cellpadding="1px" width="300px" border="0">
    	<tr>
        	<td><p><u>Dibuat di : Mataram</u></p></td>
    	</tr>
        <tr>
        	<td><p><u>Pada Tanggal : <?php echo $row['Tanggal'];?></u></p></td>
    	</tr>
        <tr>
        	<td><p>PETUGAS</p></td>
    	</tr>
        <tr>
        	<td style="padding-top:25mm;"><u><?php echo $namalengkap;?></u></td>
    	</tr>
        <tr>
        	<td>NIP.<?php echo $nip;?></td>
    	</tr>
    </table><br>
    
<footer></footer></div>    
    </div>

</div>
