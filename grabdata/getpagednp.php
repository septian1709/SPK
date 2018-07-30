<?php
//session_start();
include("koneksi.php"); 
	$sumber = resourceWeb('http://202.90.198.127/esdxsta/esdx1.html');
	$split = explode('BMKG SANGLAH', $sumber);
	$split1 = explode('BMKG', $split[1]);
	//echo $split1[0];
	//keyword pencarian
	$key = "rms";
	$key2 = "fase";
	$key3 = "gap";
	
	// lakukan pencarian string
	$potong1 = stristr($split1[0],$key);
	$rms11 = explode(',',$potong1);
	$rms12 = explode('(',$rms11[0]);
	$rms13 = explode(')',$rms12[1]);
	
	$potong2 = stristr($split1[0],$key2);
	$fase11 = explode(',',$potong2);
	$fase12 = explode('(',$fase11[0]);
	$fase13 = explode(')',$fase12[1]);
	//print_r($fase13);
	$potong3 = stristr($split1[0],$key3);
	$gap11 = explode(',',$potong3);
	$gap12 = explode('(',$gap11[0]);
	$gap13 = explode(')',$gap12[1]);
	//print_r($gap13);
	
	$RMS=$rms13[0];
	$FASE=(int)$fase13[0];
	$GAP=(int)$gap13[0];
	
	$cut = explode('Info', $split1[0]);
	$cut2 = explode(',', $cut[2]);
	include("getdatadnp.php"); 
	
	//print_r($gempa1);
	$cut22=explode(':', $cut2[2]);
	$cut222=explode(' ', $cut22[1]);
	$cut2222=explode(')', $cut222[9]);
	$cut23=" Lok:".$cut222[1]." ".$cut222[2].",".$cut222[4]." ".$cut222[5]." ".$cut222[6]." ".$cut222[7]." ".$cut222[8]." ".$cut2222[0].")";
	if ($cut222[2]=='LU'){
		$latdnp=-$cut222[1];
		}else{
			$latdnp=-$cut222[1];
		}
	
	//print_r($cut222);
	
	$cut333 = explode(' ', $cut2[3]);
	$gempamag ="Info Gempa Mag:";
	$parameter =$gempamag.$mag.",".$cut2[1].",".$cut23.", Kedlmn:".$cut333[2]." Km ::BMKG-DNP";
	$kode2=explode('SR,', $parameter);
	//print_r($parameter);
	
	$parameter1=explode('::', $parameter);
	//print_r($parameter1[1]);
	if ($parameter1[1]=="BMKG-DNP"){
		$id="BMKG SANGLAH";
	}elseif ($parameter1[1]=="BMKG-PGR III"){
		$id="PGR III";
	}else{
		$id="BMKG KHK";
	}
	
    //membuat label di peta;
	if ($id=="BMKG SANGLAH"){
		$tipe1="DNP";
	}elseif ($parameter11[1]=="BMKG-PGR III"){
		$tipe1="PGR3";
	}else{
		$tipe1="KHK";
	}
	
	$cutwaktu=explode(' ', $cut2[1]);
	$cutwaktu2=$cutwaktu[2];
	//print_r($cutwaktu2);
	$cek=mysqli_query($koneksi,"SELECT * FROM repository WHERE idpublic = '$publicid'");
	if(mysqli_num_rows($cek) == 0){ 
			if (($latdnp < -6 && $latdnp > -15) && ($cut222[4]< 122 && $cut222[4] > 111)){
	$sql = mysqli_query($koneksi,"INSERT INTO dataresume (id, idpublic, gempabumi, KODE, RMS, GAP, FASE, TIME,OT,mag,lat,lon,depth,ket) VALUES 
	('$id', '$publicid', '$parameter', '$kode2[1]', '$RMS', '$GAP', '$FASE', '$cutwaktu2', '$cutwaktu2', '$mag', '$latdnp', '$cut222[4]', '-$cut333[2]', '$cut23')");
	}
	}
	
	//$koneksi->query($sql);
	//mysqli_query($koneksi,"UPDATE peta SET id='$id', name='$id', address='$parameter', lat='$latdnp', lng='$cut222[4]', type='$tipe1' WHERE id='BMKG SANGLAH'");
	//$potong2 = stristr($split[1],$key2);
	//$potong22 = explode(' ',$potong2);
?>