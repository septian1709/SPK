 <?php
	include("koneksi.php"); // memanggil file header.php
	//$txt_file    = file_get_contents('dataSANGLAH.txt');
	$query = mysqli_query($koneksi, "SELECT * FROM dataresume WHERE idpublic='$publicid'");
	$row = mysqli_fetch_assoc($query);
	
	//$rows        = explode("\n", $txt_file);
	 
	 //array_shift($rows);
		
		 //echo '<h3>SISTEM PENDUKUNG KEPUTUSAN PARAMETER GEMPABUMI REGIONAL III</h3>';
		//echo '<a href="form.php">Tambah Data</a></br></br>';
		//$i=1;
		//foreach($rows as $row => $data)
		
		// Memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
		//$row_data = explode('|', $data);
							if($row['RMS']<=0.25)
								$rms=100;
							else if($row['RMS']>0.25&&$row['RMS']<=0.5)
								$rms=90;
							else if($row['RMS']>0.5&&$row['RMS']<=0.75)
								$rms=80;
							else if($row['RMS']>0.75&&$row['RMS']<=1)
								$rms=70;
							else if($row['RMS']>1&&$row['RMS']<=1.25)
								$rms=60;
							else if($row['RMS']>1.25&&$row['RMS']<=1.5)
								$rms=50;
							else if($row['RMS']>1.5&&$row['RMS']<=1.75)
								$rms=40;
							else if($row['RMS']>1.75&&$row['RMS']<=2)
								$rms=30;
							else
								$rms=20;
							
							if($row['FASE']>2&&$row['FASE']<=4)
								$fase=20;
							else if($row['FASE']>4&&$row['FASE']<=6)
								$fase=30;
							else if($row['FASE']>6&&$row['FASE']<=8)
								$fase=40;
							else if($row['FASE']>8&&$row['FASE']<=10)
								$fase=50;
							else if($row['FASE']>10&&$row['FASE']<=15)
								$fase=60;
							else if($row['FASE']>15&&$row['FASE']<=20)
								$fase=70;
							else if($row['FASE']>20&&$row['FASE']<=25)
								$fase=80;
							else if($row['FASE']>25&&$row['FASE']<=30)
								$fase=90;
							else if($row['FASE']>30)
								$fase=100;
							else
								$fase=0;
							
							if($row['GAP']<=45)
								$gap=100;
							else if($row['GAP']>45&&$row['GAP']<=90)
								$gap=90;
							else if($row['GAP']>90&&$row['GAP']<=135)
								$gap=80;
							else if($row['GAP']>135&&$row['GAP']<=180)
								$gap=70;
							else if($row['GAP']>180&&$row['GAP']<=215)
								$gap=60;
							else if($row['GAP']>225&&$row['GAP']<=270)
								$gap=50;
							else if($row['GAP']>270&&$row['GAP']<=315)
								$gap=40;
							else if($row['GAP']>315&&$row['GAP']<=360)
								$gap=30;
							else
								$gap=0;
							
							
							$gap=$gap/100;
							$rms=$rms/100;
							$fase=$fase/100;
							$score=((0.33*$rms)+(0.33*$gap)+(0.34*$fase))*1000;			  
		
		$insert = mysqli_query($koneksi,"UPDATE dataresume SET
								SKOR='$score' WHERE idpublic='$publicid'");
		?>