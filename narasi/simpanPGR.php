 <?php
	include("koneksi.php"); // memanggil file header.php
	$txt_file    = file_get_contents('dataPGR.txt');
	$rows        = explode("\n", $txt_file);
	 
	 array_shift($rows);
		
		 //echo '<h3>SISTEM PENDUKUNG KEPUTUSAN PARAMETER GEMPABUMI REGIONAL III</h3>';
		//echo '<a href="form.php">Tambah Data</a></br></br>';
		$i=1;
		foreach($rows as $row => $data)
		{
		// Memisahkan Item Data dariPemisah |, array pada PHP dimulaipada index ke-0
		$row_data = explode('|', $data);
			 
		$info[$row]['id']           = $row_data[0];
		$info[$row]['idgempa']      = $row_data[1];
		$info[$row]['gempabumi']    = $row_data[2];
		$info[$row]['RMS']         	= $row_data[3];
		$info[$row]['GAP']       	= $row_data[4];
		$info[$row]['FASE']       	= $row_data[5];
		$info[$row]['TIME']       	= $row_data[6];
		  }
						$rms;
						$gap;
						$fase;
						$score;
							if($row['RMS']<=0.25)
								$rms=100;
							else if($info[$row]['RMS']>0.25&&$info[$row]['RMS']<=0.5)
								$rms=90;
							else if($info[$row]['RMS']>0.5&&$info[$row]['RMS']<=0.75)
								$rms=80;
							else if($info[$row]['RMS']>0.75&&$info[$row]['RMS']<=1)
								$rms=70;
							else if($info[$row]['RMS']>1&&$info[$row]['RMS']<=1.25)
								$rms=60;
							else if($info[$row]['RMS']>1.25&&$info[$row]['RMS']<=1.5)
								$rms=50;
							else if($info[$row]['RMS']>1.5&&$info[$row]['RMS']<=1.75)
								$rms=40;
							else if($info[$row]['RMS']>1.75&&$info[$row]['RMS']<=2)
								$rms=30;
							else
								$rms=20;
							
							if($info[$row]['FASE']>2&&$info[$row]['FASE']<=4)
								$fase=20;
							else if($info[$row]['FASE']>4&&$info[$row]['FASE']<=6)
								$fase=30;
							else if($info[$row]['FASE']>6&&$info[$row]['FASE']<=8)
								$fase=40;
							else if($info[$row]['FASE']>8&&$info[$row]['FASE']<=10)
								$fase=50;
							else if($info[$row]['FASE']>10&&$info[$row]['FASE']<=15)
								$fase=60;
							else if($info[$row]['FASE']>15&&$info[$row]['FASE']<=20)
								$fase=70;
							else if($info[$row]['FASE']>20&&$info[$row]['FASE']<=25)
								$fase=80;
							else if($info[$row]['FASE']>25&&$row['FASE']<=30)
								$fase=90;
							else if($info[$row]['FASE']>30)
								$fase=100;
							else
								$fase=0;
							
							if($info[$row]['GAP']<=45)
								$gap=100;
							else if($info[$row]['GAP']>45&&$info[$row]['GAP']<=90)
								$gap=90;
							else if($info[$row]['GAP']>90&&$info[$row]['GAP']<=135)
								$gap=80;
							else if($info[$row]['GAP']>135&&$info[$row]['GAP']<=180)
								$gap=70;
							else if($info[$row]['GAP']>180&&$info[$row]['GAP']<=215)
								$gap=60;
							else if($info[$row]['GAP']>225&&$info[$row]['GAP']<=270)
								$gap=50;
							else if($info[$row]['GAP']>270&&$info[$row]['GAP']<=315)
								$gap=40;
							else if($info[$row]['GAP']>315&&$info[$row]['GAP']<=360)
								$gap=30;
							else
								$fase=0;
							
							
							$gap=$gap/100;
							$rms=$rms/100;
							$fase=$fase/100;
							$score=((0.33*$rms)+(0.33*$gap)+(0.34*$fase))*1000;			  
		
		$insert = mysqli_query($koneksi,"INSERT INTO dataresume VALUES
		('". $info[$row]['id'] ."',
		'". $info[$row]['idgempa'] ."',
		'". $info[$row]['gempabumi'] ."',
		'". $info[$row]['RMS'] ."',
		'". $info[$row]['GAP'] ."',
		'". $info[$row]['FASE'] ."',
		'". $info[$row]['TIME'] ."',
		date('d/m/Y H:i:s'),
		'". $score."',
		'0'
		)");
		
		?>