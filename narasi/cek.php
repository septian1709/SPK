<?php
$k1=(int)$k[5];
$k2=(int)$k[4];
		if ($k1>60 && $k2>9 && $h=="aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust)."){
		include("modalsalah2.php");
		}elseif($k1>60 && $k2<9 && $h=="aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust)."){
		include("modalsalah3.php");
		}elseif($k1<60 && $k2>9 && $h=="aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust)."){
		include("modalsalah3.php");
		}elseif($k1<=60 && $k2<9 && $h=="aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust)."){
		include("narasimodal.php");
		}elseif ($k1<=60 && $h=="aktifitas sesar aktif."){
		include("narasimodal.php");
		}elseif ($k1>60 && $h=="aktifitas sesar aktif."){
		include("modalsalah3.php");
		}elseif ($k1>200 && $k2<9 && $h=="aktivitas Subduksi Lempeng Indo-Australia ke bawah Lempeng Eurasia."){
		include("modalsalah4.php");
		}elseif ($k1<150 && $k2<9 && $h=="aktivitas Subduksi Lempeng Indo-Australia ke bawah Lempeng Eurasia."){
		include("modalsalah4.php");
		}elseif ($k1<200 && $k2>9 && $h=="aktivitas Subduksi Lempeng Indo-Australia ke bawah Lempeng Eurasia."){
		include("narasimodal.php");
		}elseif ($k1>200 && $k2>9 && $h=="aktivitas Subduksi Lempeng Indo-Australia ke bawah Lempeng Eurasia."){
		include("narasimodal.php");
		}else{ 
		include("narasimodal.php");
		}
?> 
