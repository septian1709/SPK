<?php
include 'v_header.php';
include("koneksi.php"); 
?>

<body>
<div class="container" style="margin-bottom: 80px; margin-top: 60px">
<div class="row">
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
	<div class="col-md-3">
		<h3 align="center">peta1</h3>
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
		</div>
	<div class="col-md-3">
		<h3 align="center">peta2</h3>
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
	</div>
	<div class="col-md-3">
		<h3 align="center">detail</h3>
	</div>
	<div class="col-md-3">
		<h3 align="center">seismitas</h3>
	</div>
	<div class="col-md-6">
		<button type="button" class="btn btn-primary" style="width: 40%; margin-right: 100px; margin-left: 100px;">CETAK NARASI</button>
		<button type="button" class="btn btn-danger" style="width: 40%; margin-right: 100px; margin-left: 100px; margin-top: 30px">CETAK BERITA GEMPA</button>
	</div>
	<div class="col-md-6">
	</div>
</div>
</div>                          
</body> 
<script>
	function zoom() {
        document.body.style.zoom = "110%"
    }
</script>
<?php
include 'v_footer.php';
?>
