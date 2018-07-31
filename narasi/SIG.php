<?php 
include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
<?php
$pathAwal = "c:/tes.png";
$pathTujuan = "c:/xampp/htdocs/seismotek/tes.png";
copy($pathAwal, $pathTujuan); 
?>
	<div class="container">
		<div class="content">
			<h2><font color="#000000">DATA DETAIL SIG</h2>
			<hr />
			<?php
			$evid = $_GET['evid']; // assigment nim dengan nilai nim yang akan diedit
			$sql = mysqli_query($koneksi, "SELECT * FROM earthquake WHERE evid ='$evid'"); // query untuk memilih entri data dengan nilai nim terpilih
			$row = mysqli_fetch_assoc($sql);

			?>	
		<?php echo $row ['evid']; ?>
		<?php echo $row ['locstring']; ?>
			 <img src="tes.png" height="400px" width="400px"> 
		</div> <!-- /.content -->
	</div> <!-- /.container -->
<?php 
include("footer.php"); // memanggil file footer.php
?>