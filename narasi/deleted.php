<?php 
include("koneksi.php");
$gempa = $_GET['evid'];
$sql = mysqli_query($koneksi, "DELETE  FROM dataresume WHERE gempabumi ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih
$sql2 = mysqli_query($koneksi, "DELETE  FROM dataambil WHERE gempabumi ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih
$callurl = curl_init();
if( $callurl) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php');
	} else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		echo "pengiriman gagal";
	}
?>
