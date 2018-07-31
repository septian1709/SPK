<?php
//session_start();
include("koneksi.php");
	$sumber1 = resourceWeb('http://202.90.198.127/esdx/esdx1.html');
	$split1 = explode('BALAI 3 BALI', $sumber1);
	$split11 = explode('BMKG', $split1[1]);
	//echo $split1[0];
	//keyword pencarian
	$key1 = "rms";
	$key21 = "fase";
	$key31 = "gap";
	
	// lakukan pencarian string
	$potong11 = stristr($split11[0],$key1);
	$rms111 = explode(',',$potong11);
	$rms121 = explode('(',$rms111[0]);
	$rms131 = explode(')',$rms121[1]);
	
	$potong21 = stristr($split11[0],$key21);
	$fase111 = explode(',',$potong21);
	$fase121 = explode('(',$fase111[0]);
	$fase131 = explode(')',$fase121[1]);
	//print_r($fase13);
	$potong31 = stristr($split11[0],$key31);
	$gap111 = explode(',',$potong31);
	$gap121 = explode('(',$gap111[0]);
	$gap131 = explode(')',$gap121[1]);
	//print_r($gap13);
	
	$RMS1=$rms131[0];
	$FASE1=(int)$fase131[0];
	$GAP1=(int)$gap131[0];
	
	$cut1 = explode('Info', $split11[0]);
	$cut21 = explode(',', $cut1[2]);
	include("getdatapgr.php"); 
	
	//print_r($gempa1);
	$cut221=explode(':', $cut21[2]);
	$cut2221=explode(' ', $cut221[1]);
	$cut22221=explode(')', $cut2221[9]);
	$cut231=" Lok:".$cut2221[1]." ".$cut2221[2].",".$cut2221[4]." ".$cut2221[5]." ".$cut2221[6]." ".$cut2221[7]." ".$cut2221[8]." ".$cut22221[0].")";
	//print_r($cut23);
	
	
	$cut3331 = explode(' ', $cut21[3]);
	$gempamag1 ="Info Gempa Mag:";
	$parameter1 =$gempamag1.$mag.",".$cut21[1].",".$cut231.", Kedlmn:".$cut3331[2]." Km ::BMKG-PGR III";
	$kode=explode('SR,', $parameter1);
	//print_r($kode);
	
	$parameter11=explode('::', $parameter1);
	//print_r($parameter1[1]);
	if ($parameter11[1]=="BMKG-DNP"){
		$id="BMKG SANGLAH";
	}elseif ($parameter11[1]=="BMKG-PGR III"){
		$id="PGR III";
	}else{
		$id="BMKG KHK";
	}
	
	$cutwaktu1=explode(' ', $cut21[1]);
	$cutwaktu21=$cutwaktu1[2];
	//print_r($cutwaktu2);
	
	$sql = "INSERT INTO dataresume (id, idpublic, gempabumi, KODE, RMS, GAP, FASE, TIME) VALUES ('$id', '$publicid1', '$parameter1', '$kode[1]', '$RMS1', '$GAP1', '$FASE1', '$cutwaktu21')";
	$koneksi->query($sql);
	//$potong2 = stristr($split[1],$key2);
	//$potong22 = explode(' ',$potong2);
?>