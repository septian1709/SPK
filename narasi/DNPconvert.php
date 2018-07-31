<?php
if ($konversi[1]=="BMKG-DN"){
		$gempay=explode(",",$konversi[0]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=="BMKG-DN"){
		$gempaxx=explode("-",$gempay[2]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=="BMKG-DN"){
		$gempaxxx=explode(":",$gempaxx[0]);
	}else{ 
	$gempax=$gempa;
	}	
	if ($konversi[1]=="BMKG-DN"){
		$gempaxxxx=explode(" ",$gempaxxx[1]);
	}else{ 
	$gempax=$gempa;
	}	
	if ($konversi[1]=="BMKG-DN"){
		$gempax5=explode("(",$gempaxx[1]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=="BMKG-DN"){
		$gempax6=explode(" ",$gempax5[0]);
	}else{ 
	$gempax=$gempa;
	}
	if ($konversi[1]=='BMKG-DN'){	
		$gempax= $gempay[0].','.$gempay[1].', '.$gempaxxx[0].':'.$gempaxxxx[1].','.str_replace(' ','',$gempax6[1]).' '.$gempax6[2].' ('.$gempax5[1].'-'.$gempaxx[2].','.$gempay[3];
	}else{ 
	$gempax=$gempa;
	}
	$gempa1=explode(",",$gempax);
	?>