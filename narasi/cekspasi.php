<?php
if($jumlah==17 && $konversi[1]=="BMKG-PGR III"){
		include("cekkoma.php");
	}elseif ($jumlah==16 && $konversi[1]=="BMKG-DNP"){
		include("cekkoma.php");
	}elseif ($jumlah==16 && $konversi[1]=="BMKG-KHK"){
		include("cekkoma.php");
	}else{ 
	include("modalsalah.html");
	}
?>
	