<?php
$h=$_POST['op1'];
$konversi=explode("::",$gempa);
$k=explode(":",$konversi[0]);

if ($konversi[1]=="BMKG-DNP"){
		$kurungbuka=substr_count($gempa,'(');
		}elseif ($konversi[1]=="BMKG-PGR III"){
		$kurungbuka=substr_count($gempa,'(');
		}else{ 
		$kurungbuka=substr_count($gempa,'(');
		};

if ($konversi[1]=="BMKG-DNP"){
		$kurungtutup=substr_count($gempa,')');
		}elseif ($konversi[1]=="BMKG-PGR III"){
		$kurungtutup=substr_count($gempa,')');
		}else{ 
		$kurungtutup=substr_count($gempa,')');
		};

if ($konversi[1]=="BMKG-DNP"){
		$titik22=substr_count($gempa,'::');
		}elseif ($konversi[1]=="BMKG-PGR III"){
		$titik22=substr_count($gempa,'::');
		}else{ 
		$titik22=substr_count($gempa,'::');
		};
		
if ($konversi[1]=="BMKG-DNP"){
		$titik2=substr_count($gempa,":");
		}elseif ($konversi[1]=="BMKG-PGR III"){
		$titik2=substr_count($gempa,":");
		}else{ 
		$titik2=substr_count($gempa,":");
		};
		
if ($konversi[1]=="BMKG-DNP"){
		$jumlah=substr_count($gempa," ");
		}elseif ($konversi[1]=="BMKG-PGR III"){
		$jumlah=substr_count($gempa," ");
		}else{ 
		$jumlah=substr_count($gempa," ");
		};
		
if ($konversi[1]=="BMKG-DNP"){
		$koma=substr_count($gempa,",");
		}elseif ($konversi[1]=="BMKG-PGR III"){
		$koma=substr_count($gempa,",");
		}else{ 
		$koma=substr_count($gempa,",");
		};
		
if ($konversi[1]=="BMKG-DNP"){
		$strip=substr_count($gempa,"-");
		}elseif ($konversi[1]=="BMKG-PGR III"){
		$strip=substr_count($gempa,"-");
		}else{ 
		$strip=substr_count($gempa,"-");
		};
		
if ($konversi[1]=="BMKG-DNP"){
		$titik=substr_count($gempa,".");
		}elseif ($konversi[1]=="BMKG-PGR III"){
		$titik=substr_count($gempa,".");
		}else{ 
		$titik=substr_count($gempa,".");
		};
		

	if($titik22==1 && $konversi[1]=="BMKG-PGR III"){
		include("cekspasi.php");
	}elseif ($titik22==1 && $konversi[1]=="BMKG-DNP"){
		include("cekspasi.php");
	}elseif ($titik22==1 && $konversi[1]=="BMKG-KHK"){
		include("cekspasi.php");
	}else{ 
	include("modalsalah5.html");
	}
?>