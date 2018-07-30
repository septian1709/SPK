<?php 
include("koneksi.php");
$gempa = $_GET['evid'];
$sql22 = mysqli_query($koneksi, "UPDATE dataresume SET
								STATUS=''");
$sql = mysqli_query($koneksi, "UPDATE dataresume SET
								STATUS='1' WHERE gempabumi ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih
$simpan = mysqli_query($koneksi,"INSERT INTO repository (id, idpublic, gempabumi, KODE, RMS, GAP, FASE, TIME,TIME2,SKOR,OT,mag,lat,lon,depth,ket,STATUS) SELECT 
id, idpublic, gempabumi, KODE, RMS, GAP, FASE,  TIME,TIME2,SKOR,OT,mag,lat,lon,depth,ket,STATUS FROM dataresume");

$hapus = mysqli_query($koneksi,"TRUNCATE TABLE dataresume");
$callurl = curl_init();
if( $callurl) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php');
	} else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		echo "pengiriman gagal";
	}
?>
