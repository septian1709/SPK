<?php
include 'v_header.php';
include("koneksi.php"); 
$sql = "SELECT count(SKOR) AS jumlah1 FROM dataresume";
$query = mysqli_query($koneksi,$sql);
$result = mysqli_fetch_array($query);
$rs1=$result['jumlah1'];
include("grabdata/ambildataweb.php");
//include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file header.php
include("grabdata/getpagepgr.php"); // memanggil file header.php
include("grabdata/simpanpgr3.php"); // memanggil file header.php
include("grabdata/getpagednp.php"); // memanggil file header.php
include("grabdata/simpanSANGLAH.php"); // memanggil file header.php
$sql2 = "SELECT count(SKOR) AS jumlah2 FROM dataresume";
$query2 = mysqli_query($koneksi,$sql2);
$result2 = mysqli_fetch_array($query2);
$rs=$result2['jumlah2'];
//if($rs1==$rs){
//include("isi.php");
//}else{
//include("alarm.php");
///include("isi.php");
//}



?>

<div class="container">
    <div class="container"  style="margin-bottom: 80px; margin-top: 60px">
        <div class="row">
          <!--Tabel Kiri -->
            <div class="col-lg-12">
                <ul class="nav nav-tabs" style="margin-top:5px">
                    <li class="active">
                        <a data-toggle="tab" href="#Gempa" style="font-size: 12px; font-weight: bold">Latest Earthquakes</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="Gempa" class="tab-pane fade in active">
					<script>var auto_refresh = setInterval( function() { $('#loadtweets').load('refresh.php').fadeIn("10"); }, 7000); // refreshing after every 15000 milliseconds </script>
                        <div style="margin-top:5px; background-color:white; height: 230px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                          <nav style="width:100%;height:100%;overflow: auto;" >
                            <ul class="list-group" style="margin-top: 2%;">
							<table class="table">
    <thead>
      <tr>
		<th>No</th>
        <th>Stasiun</th>
        <th>Waktu kirim</th>
        <th>Informasi Gempabumi</th>
		<th>RMS</th>
		<th>Gap</th>
		<th>Fase</th>
		<th>SKOR</th>
		<th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php			
	$sql = mysqli_query($koneksi, "SELECT * FROM dataresume where TIME2 > date_sub(now(), interval 30 minute) ORDER BY SKOR DESC"); // jika tidak ada filter maka tampilkan semua entri
	if(mysqli_num_rows($sql) == 0){ 
		echo '<tr><td align="center" colspan="14"><b>TIDAK ADA EVENT GEMPABUMI TERBARU</b></td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
	}else{ // jika terdapat entri maka tampilkan datanya
	$no = 1; // mewakili data dari nomor 
		while($row = mysqli_fetch_assoc($sql)){  // fetch query yang sesuai ke dalam array							
			if ($row['id'] == "BMKG SANGLAH")
			$f="success";
			else if ($row['id'] == "PGR III")
			$f="info";	
			else
			$f="warning";
				if ($row['gempabumi']!="Info Gempa Mag:0 SR,, Lok: , ), Kedlmn: Km ::BMKG-PGR III"){
			echo '
			<tr class="'.$f.'">
				<td>'.$no.'</td>
				<td>'.$row['id'].'</td>
				<td style="width: 10%">'.$row['TIME2'].'</td>
				<td style="width: 43%">'.$row['gempabumi'].'</td>
				<td>'.$row['RMS'].'</td>
				<td>'.$row['GAP'].'</td>
				<td>'.$row['FASE'].'</td>
				<td>'.$row['SKOR'].'</td>
				<td><a href="proses.php?evid='.$row['gempabumi'].'" class="btn btn-info" role="button">PILIH</a>
					<a href="deleted.php?evid='.$row['gempabumi'].'" class="btn btn-danger" role="button">HAPUS</a></td>
				</tr>
				';
				$no++; // mewakili data kedua dan seterusnya
				}
			}
		}
?>
      
    </tbody>
  </table>
                            
                            </ul>
                          </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--//Tabel Kiri -->

            <!--Tabel Kanan -->
            <div class="col-lg-6">
                <ul class="nav nav-tabs" style="margin-top: 10px">
                    <li class="active" style="font-size: 12px; font-weight: bold"><a>Epicenter Check</a></li>
                </ul>
				
                  <!--Maps-->
				 <div id="dvMap" style="width: 100%; height: 270px; margin-top:10px; box-shadow: 1px 1px 3px grey; padding: 0px 0px 0px 0px""></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcZJ8zBcGKVDzLH2fcwflexue9ZoiIoCY&callback=initMap" async defer></script>
	<script type="text/javascript">
    function zoom() {
            document.body.style.zoom = "5%" 
        }
		var markers = [
		<?php
		$sql = mysqli_query($koneksi, "SELECT * FROM dataresume");
		while(($data =  mysqli_fetch_assoc($sql))) {
		?>
		{
                 "lat": '<?php echo $data['lat']; ?>',
				 "long": '<?php echo $data['lon']; ?>',
				 "alamat": '<?php echo $data['gempabumi']; ?>',
				 "id": '<?php echo $data['id']; ?>'
		},
		<?php
		}
		?>
    ];
    </script>
    <script type="text/javascript">
	
        window.onload = function () {
			
            var mapOptions = {
		        center: new google.maps.LatLng(-8,117.2409634),
                zoom: 6,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }; 
            var infoWindow = new google.maps.InfoWindow();
            var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);

            for (i = 0; i < markers.length; i++) {
                var data = markers[i];
				var latnya = data.lat;
				var longnya = data.long;
        var labels = '123456789';
				var myLatlng = new google.maps.LatLng(latnya, longnya);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: data.alamat,
                    label: labels[i % labels.length]
                });
                (function (marker, data) {
                    google.maps.event.addListener(marker, "click", function (e) {
                        infoWindow.setContent('<b>Lokasi</b> :' + data.alamat + '<br>');
                        infoWindow.open(map, marker);
                    });
                })(marker, data);
            }
        }
    </script>
            </div>
            <!--//Tabel Kanan -->
			 <!--Tabel Kanan -->
           <div class="col-lg-6">
                <ul class="nav nav-tabs" style="margin-top: 10px">
                    <li class="active" style="font-size: 12px; font-weight: bold"><a>Hipocenter Check</a></li>
                </ul>
				
                  <!--Maps-->
                  <script type="text/javascript">
 var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'scatter'
         },   
         title: {
        text: 'Crossection Kedalaman Gempabumi'
    },
    subtitle: {
        text: 'Source: BMKG Regional III'
    },
         xAxis: {
            categories: ['Stasiun']
         },
         yAxis: {
            title: {
               text: 'km'
            }
         },
		  plotOptions: {
        scatter: {
            marker: {
                radius: 6,
                states: {
                    hover: {
                        enabled: true,
                        lineColor: 'rgb(100,100,100)'
                    }
                }
            },
            states: {
                hover: {
                    marker: {
                        enabled: true
                    }
                }
            },
            tooltip: {
                headerFormat: '<b>{series.name}</b><br>',
                pointFormat: '{point.y} km'
            }
        }
    },
              series:             
            [
            <?php 
            $sql   = "SELECT id  FROM dataresume";
            $query = mysqli_query($koneksi, $sql )  or die(mysqli_close());
            while( $ret = mysqli_fetch_assoc( $query ) ){
             $stasiun=$ret['id'];                     
                 $sql_jumlah   = "SELECT * FROM dataresume WHERE id='$stasiun'";        
                 $query_jumlah = mysqli_query($koneksi,$sql_jumlah ) or die(mysqli_close());
                 while( $data = mysqli_fetch_assoc( $query_jumlah ) ){
                    $depth = $data['depth'];
						$lat = $data['lat'];				
                  }             
                  ?>
                  {
                      name: '<?php echo $stasiun; ?>',
                      data: [<?php echo "[".$lat.",".$depth."]"; ?>]
                  },
                  <?php } ?>
            ]
      });
   }); 
</script>
 </head>
 <body>
  <div id="container" style="min-width: 100%; height:270px; margin-top:10px; box-shadow: 1px 1px 3px grey; padding: 0px 0px 0px 0px""></div>
 </body>
            </div>
            <!--//Tabel Kanan -->
        </div>
		    </div>
</div>
<?php
include 'v_footer.php';
?>