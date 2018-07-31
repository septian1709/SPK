<?php
include 'v_header.php';
include("koneksi.php"); 
?>

<body>
<div class="container" style="margin-bottom: 80px; margin-top: 60px">
<div class="row" style="margin-top: 10px">
	<div class="col-md-12" style="background-color: #f0f0f0; border-radius: 5px;">
		<h3 style="text-align: center;">
			<?php
				$query = mysqli_query($koneksi, "SELECT*FROM repository WHERE nomor=$_GET[id]");
				while ($data = mysqli_fetch_array($query)) {
						$teks = $data['gempabumi'];
						}
				echo $teks;
			?>
		</h3>
	</div>
</div>

<div class="row">
	<div class="col-md-3">
		<div id="dvMap" style="width: 100%; height: 270px; margin-top:10px; box-shadow: 1px 1px 3px grey; padding: 0px 0px 0px 0px"></div>
		    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcZJ8zBcGKVDzLH2fcwflexue9ZoiIoCY&callback=initMap" async defer></script>
			<script type="text/javascript">
				var markers = [
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM repository where nomor=$_GET[id]");
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
		

	<div class="col-md-3">
		<div id="dvMap2" style="width: 100%; height: 270px; margin-top:10px; box-shadow: 1px 1px 3px grey; padding: 0px 0px 0px 0px"></div>
		    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcZJ8zBcGKVDzLH2fcwflexue9ZoiIoCY&callback=initMap" async defer></script>
			<script type="text/javascript">
				var markers = [
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM repository where nomor=$_GET[id]");
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

        <div class="col-md-3">
			<div class="panel panel-primary" style="margin-top: 10px; height: 270px">
     			 <div class="panel-heading" style="text-align: center;">DETAIL</div>
      				<div class="panel-body" style="font-size: 14px;">
						<?php
							$query = mysqli_query($koneksi, "SELECT * FROM repository WHERE nomor = $_GET[id]");
							while ($data = mysqli_fetch_array($query)) {
								$nomor=$data['nomor'];
								$ot=$data['OT'];
								$lat=$data['lat'];
								$lon=$data['lon'];
								$mag=$data['mag'];
								$ket=$data['ket'];
								$status=$data['STATUS'];
								$sumber=$data['id'];
							}

							
						?>

      					<div>
      						OT :<?php echo $ot;?>
      						</hr>
      					</div>
      					<div>
      						LAT : <?php echo $lat?>
      					</div>
      					<div>
      						LON : <?php echo $lon?>
      					</div>
      					<div>
      						MAG : <?php echo $mag?>
      					</div>
      					<div>
      						KET : <?php echo $ket?>
      					</div>
      					<div>
      						DIRASAKAN : <?php if ($status == 1)
      						{
      							echo "YA";
      						}
      						else
      						{
      							echo "TIDAK";
      						}
      						?>	
      						
      					</div>
      					<div>
      						SUMBER DATA : <?php echo $sumber?>
      					</div>
      				</div>
    		</div>
		</div>

		<div class="col-md-3">
			<div class="panel panel-primary" style="margin-top: 10px; height: 270px">
     			 <div class="panel-heading" style="text-align: center;">SEISMITAS</div>
      				<div class="panel-body">
      					<div style="margin-bottom: 20px">
      						<img src="./assets/img/range.png" style="width: 20%">
      						Range waktu
      					</div>
      					<div style="margin-bottom: 20px">
      						<img src="./assets/img/radius.png" style="width: 20%">
      						Radius Km
      					</div>
      					<div style="margin-bottom: 20px">
      						<img src="./assets/img/magnitude.png" style="width: 20%">
      						Range Magnitude
      					</div>
      				</div>
    		</div>
		</div>
</div>

<div class="row" style="margin-top: 50px">
	<div class="col-md-6">
		<a href="event_trigger.php"><button type="button" class="btn btn-primary" style="width: 50%; height: 40px; margin-right: 100px; margin-left:;">CETAK NARASI</button></a>
		<a href="cetakberita.php?php echo $nomor?"><button type="button" class="btn btn-danger" style="width: 50%; margin-right: 100px; margin-left:; margin-top: 20px; height: 40px">CETAK BERITA GEMPA</button></a>
	</div>

	<div class="col-md-6">
		<a href="kirimnarasi.php?"><button type="button" class="btn btn-primary" style="width: 100%; height:50px; margin-left:;">KIRIM NARASI</button></a>
	</div>
</div>
</div>                          
</body> 

<script>
	function zoom() {
        document.body.style.zoom = "100%"
    }
</script>
<?php
include 'v_footer.php';
?>
