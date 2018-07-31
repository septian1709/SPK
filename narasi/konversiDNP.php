
<?php
if ($konversi[1]=="BMKG-DNP"){
		$gempay=explode(",",$konversi[0]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=="BMKG-DNP"){
		$gempaxx=explode("-",$gempay[2]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=="BMKG-DNP"){
		$gempaxxx=explode(":",$gempaxx[0]);
	}else{ 
	$gempax=$gempa;
	}	
	if ($konversi[1]=="BMKG-DNP"){
		$gempaxxxx=explode(" ",$gempaxxx[1]);
	}else{ 
	$gempax=$gempa;
	}	
	if ($konversi[1]=="BMKG-DNP"){
		$gempax5=explode("(",$gempaxx[1]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=="BMKG-DNP"){
		$gempax6=explode(" ",$gempax5[0]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=='BMKG-DNP'){	
		$gempax= $gempay[0].','.$gempay[1].', '.$gempaxxx[0].':'.$gempaxxxx[1].','.str_replace(' ','',$gempax6[1]).' '.$gempax6[2].' ('.$gempax5[1].'-'.$gempaxx[2].','.$gempay[3].'::'.$konversi[1];
	}else{ 
	$gempax=$gempa;
	}
	?>