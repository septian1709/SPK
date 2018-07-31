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
include("header1.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
	
?>
<?php
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 10; URL=$url");
?>
	<div class="content-wrapper">
    <div class="container-fluid">
	
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tabel</li>
      </ol>
	  
	  <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> REPOSITORI DATA GEMPABUMI </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
      	
			<!-- bagian ini untuk memfilter data berdasarkan fakultas -->
			<form method="get">
				<div class="form-row">
				<div class="form-group col-md-2">
					<select name="filter_nama" class="form-control" onchange="form.submit()">
						<option value="0"> Filter Petugas </option>
						<?php $filter_nama = (isset($_GET['filter_nama']) ? strtolower($_GET['filter_nama']) : NULL);  ?>
						<option value="pande" <?php if($filter_nama == 'pande'){ echo 'selected'; } ?>>Pande</option>
						<option value="ihsan" <?php if($filter_nama == 'ihsan'){ echo 'selected'; } ?>>Ihsan</option>
                        <option value="ricko" <?php if($filter_nama == 'ricko'){ echo 'selected'; } ?>>Ricko</option>
						<option value="rian" <?php if($filter_nama == 'rian'){ echo 'selected'; } ?>>Rian</option>
						<option value="rizqa" <?php if($filter_nama == 'rizqa'){ echo 'selected'; } ?>>Rizqa</option>
						<option value="witra" <?php if($filter_nama == 'witra'){ echo 'selected'; } ?>>Witra</option>
						<option value="sabun" <?php if($filter_nama == 'satria'){ echo 'selected'; } ?>>Sabun</option>
					</select>
				</div>
			</form> <!-- end filter -->
		
			<!-- memulai tabel responsive -->
			<form class="form-row " method="get">
				<div class="form-group mx-sm-3 mb-3">
					<select name="filter_stasiun" class="form-control" onchange="form.submit()">
						<option value="0">Filter Stasiun</option>
						<?php $filter_stasiun = (isset($_GET['filter_stasiun']) ? ($_GET['filter_stasiun']) : NULL);  ?>
						<option value="BMKG-PGR III" <?php if($filter_stasiun == 'BMKG-PGR III'){ echo 'selected'; } ?>>BMKG-PGR III</option>
						<option value="BMKG-DNP" <?php if($filter_stasiun == 'BMKG-DNP'){ echo 'selected'; } ?>>BMKG-DNP</option>
                        <option value="BMKG-KHK" <?php if($filter_stasiun == 'BMKG-KHK'){ echo 'selected'; } ?>>BMKG-KHK</option>
						</select>
				</div>
			</form> <!-- end filter -->
				
			<!-- memulai tabel responsive -->
			<div class="table-responsive" >
				<table class="table table-striped table-hover">
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>OT</th>
						<th>Lat</th>
						<th>Long</th>
						<th>Mag</th>
						<th>H</th>
						<th>Lokasi</th>
						<th>Stasiun</th>
						<th>Keterangan</th>
						<th>Status</th>
						<th>Peta Guncangan</th>
						<th>Petugas</th>
						
					</tr>
					<?php
					if($filter_nama){
						$sql = mysqli_query($koneksi, "SELECT * FROM tb_narasi WHERE Petugas='$filter_nama' ORDER BY Petugas ASC"); // query jika filter dipilih
					}elseif ($filter_stasiun){ 
						$sql = mysqli_query($koneksi, "SELECT * FROM tb_narasi WHERE Stasiun='$filter_stasiun' ORDER BY Stasiun ASC"); // query jika filter dipilih
					}else{
						$sql = mysqli_query($koneksi, "SELECT * FROM tb_narasi ORDER BY No DESC"); // jika tidak ada filter maka tampilkan semua entri
					}
					if(mysqli_num_rows($sql) == 0){ 
						echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada
					}else{ // jika terdapat entri maka tampilkan datanya
						$no = 1; // mewakili data dari nomor 1
						while($row = mysqli_fetch_assoc($sql)){ // fetch query yang sesuai ke dalam array
							echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$row['Tanggal'].'</td>
								<td>'.$row['OT'].'</td>
								<td>'.$row['Lat'].'</td>
								<td>'.$row['Bujur'].'</td>
								<td>'.$row['Mag'].'</td>
								<td>'.$row['Kedalaman'].'</td>
								<td>'.$row['Lokasi'].'</td>
								<td>'.$row['Stasiun'].'</td>
								<td>'.nl2br($row['Keterangan']).'</td>
								<td>'.$row['Status'].'</td>
								<td>
									<a href="uploadfile.php?evid='.$row['OT'].'" class="btn btn-danger" role="button">SIG</a>
									<a href="uploadfile2.php?evid='.$row['OT'].'" class="btn btn-success" role="button">MMI</a>
									<a href="beritagempa4.php" class="btn btn-info" role="button" >Report</a>
									<a href="proses3.php?evid='.$row['OT'].'" class="btn btn-warning" role="button">Aktif/-</a>
									</td>
								<td>'.$row['Petugas'].'</td>
							</tr>
							';
							$no++; // mewakili data kedua dan seterusnya
						}
					}
					?>
					
				</table>
			</div> <!-- /.table-responsive -->
		</div> <!-- /.content -->
	</div> <!-- /.container -->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Stasiun Geofisika Mataram 2018</small>
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
</body>


</html>
