<?php
	if($kurungtutup==1 && $konversi[1]=="BMKG-PGR III"){
		include("cek.php");
	}elseif ($kurungtutup==1 && $konversi[1]=="BMKG-DNP"){
		include("cek.php");
	}elseif ($kurungtutup==1 && $konversi[1]=="BMKG-KHK"){
		include("cek.php");
	}else{ 
	include("modalsalah7.html");
	}
?>
