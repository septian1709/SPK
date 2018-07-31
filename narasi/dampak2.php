<?php 
					$angka = count($sigtotal);
					switch ($angka) {
					case 1:
					foreach ($sigtotal as $key=>$val){
					echo "Dampak gempabumi berdasarkan laporan masyarakat menunjukkan bahwa wilayah $val
					mengalami guncangan dalam skala intensitas $key. 
					Di daerah ini guncangan gempabumi dirasakan oleh beberapa orang.";
					}
					break;
					case 2:
					echo "Dampak gempabumi berdasarkan laporan masyarakat berupa guncangan dirasakan di wilayah $br[1]
					dalam skala intensitas $ar[1]. Di daerah ini guncangan gempabumi dirasakan oleh beberapa orang.
					Selain itu, di $br[0] guncangan lemah dirasakan dalam skala intensitas $ar[0].";
					break;
					case 3:
					echo "Dampak gempabumi berdasarkan laporan masyarakat berupa guncangan dirasakan di wilayah $br[2] dalam
					skala intensitas $ar[2]. Guncangan juga dirasakan di $br[1] dalam skala intensitas $ar[1]. 
					Selain itu, di $br[0] guncangan dirasakan dalam skala intensitas $ar[0].";
					break;
					case 4:
					echo "Dampak gempabumi berdasarkan laporan masyarakat berupa guncangan kuat dirasakan di wilayah $br[3] 
					dalam skala intensitas $ar[3]. Guncangan juga dirasakan di $br[2] dalam skala intensitas $ar[2].
					Selain itu, di $br[1] guncangan dirasakan dalam skala intensitas $ar[1]. 
					Sementara itu, guncangan dalam skala intensitas $ar[0] dirasakan di $br[0].";
					break;
					case 5:
					echo "Dampak gempabumi berdasarkan laporan masyarakat berupa guncangan kuat dirasakan di wilayah $br[4] 
					dalam skala intensitas $ar[4]. Guncangan juga dirasakan di $br[3] dalam skala intensitas $ar[3]. 
					Selain itu, di $br[2] guncangan dirasakan dalam skala intensitas $ar[2]. 
					Sementara itu, guncangan dalam skala intensitas $ar[1] dirasakan di $br[1], 
					termasuk di $br[0], juga dirasakan guncangan lemah dalam skala intensitas $ar[0].";
					break;
					}
				?>