<?php
	if($strip==4 && $konversi[1]=="BMKG-PGR III"){
		include("cektitik.php");
	}elseif ($strip==4 && $konversi[1]=="BMKG-DNP"){
		include("cektitik.php");
	}elseif ($strip==4 && $konversi[1]=="BMKG-KHK"){
		include("cektitik.php");
	}else{ 
	include("modalsalah2.html");
	}
?>