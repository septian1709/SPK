<?php
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 5; URL=$url");
?>
<?php 
session_start();
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
$name=$_SESSION['User'];
$tingkat=$_SESSION['level'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE User='$name'");
$roww = mysqli_fetch_assoc($query);
$namalengkap1=$roww['Nama'];
$status=$roww['Statuspengguna'];
?>
 <?php 
 include("ambildataweb.php");
include("header1.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file header.php
include("getpagepgr.php"); // memanggil file header.php
include("simpanpgr3.php"); // memanggil file header.php

//problemnya
include("getpagednp.php"); // memanggil file header.php
include("simpanSANGLAH.php"); // memanggil file header.php
//include("simpanPGR.php"); // memanggil file header.php

//include("simpanMATARAM.php"); // memanggil file header.php
?>

	<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Program Narasi</li>
		<li class="breadcrumb-item active">Anda disini sebagai <b><?php echo $tingkat;?></b></li>
      </ol>	  
	  <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <h4 align="center"><font size= "5px"color="#008CBA"><b>SISTEM PENDUKUNG KEPUTUSAN PARAMETER GEMPABUMI REGIONAL III</b></font></h4> </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="8%" cellspacing="0">
              <thead>
	  <div class="container">
<font size= "3px"color="#000000">

			<div class="table-responsive">
				<table class="table">
					<tr align="left">
						<th>No</th>
						<th>ID</th>
						<th>WAKTU KIRIM</th>
						<th width="40%">Informasi Gempabumi</th>
						<th>RMS</th>
						<th>GAP</th>
						<th>Fase</th>
						<th>SKOR</th>
						<th align="center">AKSI</th>
					</tr>
					
						<?php
							
							$sql = mysqli_query($koneksi, "SELECT * FROM dataresume WHERE TIME2 > (NOW() - INTERVAL 10 MINUTE) ORDER BY SKOR DESC"); // jika tidak ada filter maka tampilkan semua entri
							if(mysqli_num_rows($sql)== 0){ 
								echo '<tr><td align="center" colspan="14">TIDAK ADA EVENT GEMPABUMI TERBARU</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada.'
							}else{ // jika terdapat entri maka tampilkan datanya
							$no = 1; // mewakili data dari nomor 1
							
							while($row = mysqli_fetch_assoc($sql)){  // fetch query yang sesuai ke dalam array
														
							if ($row['id'] == "BMKG SANGLAH")
							$f="success";
							else if ($row['id'] == "PGR III")
							$f="info";	
							else
							$f="warning";
								
							echo '
							<tr class="'.$f.'">
								<td>'.$no.'</td>
								<td>'.$row['id'].'</td>
								<td>'.$row['TIME2'].'</td>
								<td>'.$row['gempabumi'].'</td>
								<td>'.$row['RMS'].'</td>
								<td>'.$row['GAP'].'</td>
								<td>'.$row['FASE'].'</td>
								<td>'.$row['SKOR'].'</td>
								<td><a href="proses22.php?evid='.$row['gempabumi'].'" class="btn btn-success" role="button">PILIH</a>
								<a href="deleted.php?evid='.$row['gempabumi'].'" class="btn btn-danger" role="button">HAPUS</a></td>
							</tr>
							';
							$no++; // mewakili data kedua dan seterusnya
						}
					}
					?>
				</table> 
</div>
</div>
</div>
</div>
</div>
</div>

	<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Program by Stasiun Geofisika Mataram 2018</small>
          <small>Design Theme by Your Website</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Anda ingin keluar?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Pilih "Keluar" jika ingin mengakhiri aplikasi.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="login.php">Keluar</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>	
  </div>
  </div>
    </div>
  
</body>
</html>


