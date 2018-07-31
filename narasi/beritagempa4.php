<?php 
include("koneksi.php");
		$query = mysqli_query($koneksi, "SELECT * FROM tb_narasi WHERE Status='Aktif' ORDER by mmi ASC");
		$row = mysqli_fetch_assoc($query);
					$ememi=$row['mmi'];
					$sigg=$row['sig'];
		$query2 = mysqli_query($koneksi, "SELECT * FROM tb_narasi WHERE Status='Aktif' ORDER by sig ASC");
		$row2 = mysqli_fetch_assoc($query2);
					$ememi=$row2['mmi'];
					$sigg=$row2['sig'];
					if(mysqli_num_rows($query2) == !0 && $ememi =="" ){ 
						include ("beritagempa.php");
					}else if($sigg =="" && mysqli_num_rows($query2) == !0){ 
						include ("beritagempa2.php");
					}else if(mysqli_num_rows($query) == !0 && mysqli_num_rows($query2) == !0){ 
						include ("beritagempa3.php");
					}
?>
		