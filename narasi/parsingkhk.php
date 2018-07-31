<?php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
	//Konversi parameter stasiun sanglah dengan menghilangkan spasi pada Lok:, dan mengubsh - jadi , di lat long;
	$konversi=explode("::",$gempa);
	$parameter=$konversi[0];
	$sql = "INSERT INTO tb_spk (parameter) VALUES ('$parameter')";
	$koneksi->query($sql);
?>