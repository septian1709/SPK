<?php
	if($koma==4 && $konversi[1]=="BMKG-PGR III"){
		include("cekstrip.php");
	}elseif ($koma==4 && $konversi[1]=="BMKG-DNP"){
		include("cekstrip.php");
	}elseif ($koma==4 && $konversi[1]=="BMKG-KHK"){
		include("cekstrip.php");
	}else{ 
	include("modalsalah1.html");
	}
?>
	
