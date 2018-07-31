<?php
	$smbr = bacaweb('http://202.90.198.127/esdxsta/log/sanglah.php');
	$splt = explode('<pre>', $smbr);
	//echo $split[1];
	//keyword pencarian
	$keey = "magnitudes:";
	$keey2 = "M";
	$key3= "Public ID";
	$ptngid = stristr($splt[1],$key3);
	$ptngid1 = explode(' ',$ptngid);
	$publicid = $ptngid1[15];
	// lakukan pencarian string
	$ptng1 = stristr($splt[1],$keey);
	//$potong11 = explode(' ',$potong1);
	//print_r($potong11);
	//$RMS=$potong11[14];
	$potongM = stristr($ptng1,$keey2);
	$potongMM = explode('M  ',$potongM);
	//print_r($potongMM);
	$mag1=$potongMM[1];
	$mag2=explode(' ',$mag1);
	$mag1=round($mag2[7], 1);
	$mag=$mag1." "."SR";
	//print_r($mag);
?>