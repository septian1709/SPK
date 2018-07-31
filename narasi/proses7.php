<?php
include("koneksi.php");
$gempa = $_GET['evid'];
//$sql = mysqli_query($koneksi, "UPDATE tb_narasi SET
							//	mmi= '' WHERE OT ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih
//$sql = mysqli_query($koneksi, "UPDATE tb_narasi SET
								//sig= '' WHERE OT ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih
$sql22 = mysqli_query($koneksi, "UPDATE tb_penjelasan SET
								kondisi=''"); // query untuk memilih entri data dengan nilai nim terpilih
$sqli = mysqli_query($koneksi, "SELECT * FROM tb_penjelasan WHERE OT='$gempa'");	
$row = mysqli_fetch_assoc($sqli);
$kondisi=$row['kondisi'];
$mmi=$row['mmi'];
$sig=$row['sig'];
	if ($status=="" && $sig=!empty($sig)){						
	$sql = mysqli_query($koneksi, "UPDATE tb_penjelasan SET
								kondisi= 'Aktif' WHERE OT ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih
	}elseif($status=="" && $mmi=!empty($mmi)){						
	$sql = mysqli_query($koneksi, "UPDATE tb_penjelasan SET
								kondisi= 'Aktif' WHERE OT ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih
	}elseif($status=="Aktif"){ 
	$sql = mysqli_query($koneksi, "UPDATE tb_penjelasan SET
								kondisi= '' WHERE OT ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih
	}
$callurl = curl_init();
if( $callurl) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: narasigempa.php');
	} else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		echo "pengiriman gagal";
	}
?>
