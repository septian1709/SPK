<?php
//error_reporting(0);
function resourceWeb($url){
	$data = curl_init();
	curl_setopt($data, CURLOPT_URL, $url);
	curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
	$hasil = curl_exec($data);
	curl_close($data);
	return $hasil;
	}
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/bali.php');
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/pusat.php');
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/makassar.php');
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/yogya.php'); //$masalah;
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/manado.php');
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/ambon.php');//$masalah 
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/padang.php');
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/papua.php');//$masalah 
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/ciputat.php');
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/kupang.php');
	//$smbr = resourceWeb('http://202.90.198.127/esdx/log/medan.php');//$masalah 
	//$smbr = resourceWeb('http://202.90.198.127/esdxsta/log/angkasa.php');
	//$smbr = resourceWeb('http://202.90.198.127/esdxsta/log/sanglah.php');
	//$smbr = resourceWeb('http://202.90.198.127/esdxsta/log/gowa.php'); //Kelebihan
	//$smbr = resourceWeb('http://202.90.198.127/esdxsta/log/tangerang.php');
	//$smbr = resourceWeb('http://202.90.198.127/esdxsta/log/bandung.php');
	$smbr = resourceWeb('http://202.90.198.127/esdxsta/log/tuntungan.php');
	$splt = explode('<pre>', $smbr);
	//echo $split[1];
	//keyword pencarian
	$keey = "magnitudes:";
	$keey2 = "M";
	$key3= "Public ID";
	$key4="preferred";
	$key5="BMG";
	$ptngid = stristr($splt[1],$key3);
	$ptngid1 = explode(' ',$ptngid);
	$publicid1 = $ptngid1[15];
	//print_r($publicid);
	// lakukan pencarian string
	$ptng1 = stristr($splt[1],$keey);
	$ptng2 = explode('preferred',$ptng1);
	$ptng3 = explode(' ',$ptng2[0]);
	
	function Even($ptng3 )
	{
    // returns if the input integer is even
    if($ptng3 %2==' ')
       return TRUE;
    else
       return FALSE; 
	}
	$arr = array_filter($ptng3);
	$arr2=array_values($arr);
	$arr3=count($arr2)-3;
	$arr4=$arr2[$arr3];
	//print_r($arr2);
	if($arr4=='+/-'){
		$arr5=count($arr2)-5;
		$arr6=$arr2[$arr5];
		//print_r($arr6);
	//$potong11 = explode(' ',$potong1);
	//$RMS=$potong11[14];
		$potongM = stristr($ptng1,$arr6);
		$potongMM = explode("$arr6  ",$potongM);
		$mag111=$potongMM[1];
		$mag21=explode(' ',$mag111);
		//print_r($arr6);
							if($arr6=='Mw(mB)'){
							$mag11=round($mag21[2],1);
							}elseif ($arr6=='mB'){
							$mag11=round($mag21[6],1);
							}elseif ($arr6=='ML'){
							$mag11=round($mag21[6],1);
							}elseif ($arr6=='M'){
							$mag11=round($mag21[7],1);
							}elseif ($arr6=='mb'){
							$mag11=round($mag21[6],1);
							}elseif ($arr6=='Mw(Mwp)'){
							$mag11=round($mag21[1],1);
							}elseif ($arr6=='MLv'){
							$mag11=round($mag21[5],1);
							}elseif ($arr6=='Mlv'){
							$mag11=round($mag21[5],1);
							}elseif ($arr6=='mJMA'){
							$mag11=round($mag21[4],1);
							}else{
							$mag11=round($mag21[1],1);
							}
							//print_r($mag11);
							$mag=$mag11." "."SR";
	}else{
		$arr5=count($arr2)-3;
		$arr4=$arr2[$arr5];
		$potongM = stristr($ptng1,$arr4);
		$potongMM = explode("$arr4  ",$potongM);
		//print_r($arr4);
		$mag111=$potongMM[1];
		//print_r($arr4);
		$mag21=explode(' ',$mag111);
							if($arr4=='MLv'){
							$mag11=round($mag21[5], 1);
							}elseif ($arr4=='mB'){
							$mag11=round($mag21[6], 1);
							}elseif ($arr4=='ML'){
							$mag11=round($mag21[6],1);
							}elseif ($arr4=='MLv'){
							$mag11=round($mag21[5], 1);
							}elseif ($arr4=='M'){
							$mag11=round($mag21[7], 1);
							}elseif ($arr4=='mb'){
							$mag11=round($mag21[6], 1);
							}elseif ($arr4=='Mw(Mwp)'){
							$mag11=round($mag21[1], 1);
							}elseif ($arr4=='Mw(mB)'){
							$mag11=round($mag21[2], 1);
							}elseif ($arr4=='mJMA'){
							$mag11=round($mag21[4], 1);
							}else{
							$mag11=round($mag21[1], 1);
							}
				//print_r($arr4);
				$mag=$mag11." "."SR";
				}
				//print_r($arr4);
	//print_r($mag);
	?>