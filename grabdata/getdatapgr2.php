<?php
	$smbr = resourceWeb('http://202.90.198.127/esdx/log/bali.php');
	$splt = explode('<pre>', $smbr);
	//echo $split[1];
	
	//keyword pencarian
	$keey = "magnitudes:";
	$keey2 = "M";
	$key3= "Public ID";
	$ptngid = stristr($splt[1],$key3);
	$ptngid1 = explode(' ',$ptngid);
	$publicid1 = $ptngid1[15];
	//print_r($publicid);
	
	// lakukan pencarian string
	$ptng1 = stristr($splt[1],$keey);
	//$potong11 = explode(' ',$potong1);
	//print_r($potong11);
	//$RMS=$potong11[14];
	$potongM = stristr($ptng1,$keey2);
	$potongMM = explode('M  ',$potongM);
	//print_r($potongMM);
	$mag111=$potongMM[1];
	$mag21=explode(' ',$mag111);
	$mag11=round($mag21[7], 1);
	$mag=$mag11." "."SR";
	//print_r($mag);
?>