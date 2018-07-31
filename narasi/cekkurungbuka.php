<?php
	if($kurungbuka==1 && $konversi[1]=="BMKG-PGR III"){
		include("cekkurungtutup.php");
	}elseif ($kurungbuka==1 && $konversi[1]=="BMKG-DNP"){
		include("cekkurungtutup.php");
	}elseif ($kurungbuka==1 && $konversi[1]=="BMKG-KHK"){
		include("cekkurungtutup.php");
	}else{ 
	include("modalsalah6.html");
	}
?>
