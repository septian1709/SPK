<?php 
include("koneksi.php");
$gempa = $_GET['evid'];
$sql22 = mysqli_query($koneksi, "UPDATE dataresume SET
								STATUS=''");
$sql = mysqli_query($koneksi, "UPDATE dataresume SET
								STATUS='1' WHERE gempabumi ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih

$callurl = curl_init();
if( $callurl) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: eventtrigger2.php');
	} else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		echo "pengiriman gagal";
	}
?>
