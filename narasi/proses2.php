<?php 
include("koneksi.php");
$gempa = $_GET['evid'];
$sql = mysqli_query($koneksi, "UPDATE tb_narasi SET
								Status='Aktif' WHERE OT ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih

$callurl = curl_init();
if( $callurl) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: beritagempa.php');
	} else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		echo "pengiriman gagal";
	}
?>
