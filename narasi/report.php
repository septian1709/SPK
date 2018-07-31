<?php
$gempa= isset($_POST['gempa']);
$judul= isset($_POST['judul']);
if (isset($_POST['Submit'])){  
	include("narasi.php");
	}elseif(isset($_POST['Save'])){  
	include ("simpandata.php");
	}
?>

