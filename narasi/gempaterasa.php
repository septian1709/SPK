<?php
session_start();
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
$name=$_SESSION['User'];
$tingkat=$_SESSION['level'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE User='$name'");
$roww = mysqli_fetch_assoc($query);
$namalengkap1=$roww['Nama'];
$status=$roww['Statuspengguna'];
$queryy = mysqli_query($koneksi, "SELECT * FROM tb_penjelasan ORDER by no DESC");
			
include("header1.php"); // memanggil file header.php
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 10; URL=$url");
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
	  

			<div class="table-responsive">
				<table class="table">
			<div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bell-o"></i><b> NARASI GEMPABUMI TERASA<b></div>
            <div class="list-group list-group-flush small">
			
			<?php
			if(mysqli_num_rows($queryy) == 0){ 
				echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; // jika tidak ada entri di database maka tampilkan 'Data Tidak Ada
					}else{ // jika terdapat entri maka tampilkan datanya
						$no = 1; // mewakili data dari nomor 1
						while($rowww = mysqli_fetch_assoc($queryy)){ // fetch query yang sesuai ke dalam array
							echo '
							<tr>
								<td>'.''.'</td>
								<td>
								   <center>
									 <img src="imagessig/'.$rowww['sig'].'"width="140">
								   </center>
								<td>'.nl2br(($rowww['judul'])).'<a href="proses7.php?evid='.$rowww['OT'].'" ><br><br><i class="fa fa-comment-o"></i> Baca Selengkapnya</a></td>
								
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
								<td>'.''.'</td>
																
							';
							$no++; // mewakili data kedua dan seterusnya
						}
					}
			
			?>
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


