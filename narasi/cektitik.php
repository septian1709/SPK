<?php
	if($titik==3 && $konversi[1]=="BMKG-PGR III"){
		include("cektitik2.php");
	}elseif ($titik==3 && $konversi[1]=="BMKG-DNP"){
		include("cektitik2.php");
	}elseif ($titik==3 && $konversi[1]=="BMKG-KHK"){
		include("cektitik2.php");
	}else{ 
	include("modalsalah3.html");
	}
?>

