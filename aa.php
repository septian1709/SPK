<?php 
	include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
	session_start();

	$username = $_POST['user'];
	$query = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username'");

	if (mysqli_num_rows($query)) {
		$row = mysqli_fetch_assoc($query);
		$username = $row['username'];	
		$_SESSION['username'] = $username;
	}
?>

<?php 
	include("v_header.php"); // memanggil file header.php
	include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>

	<div class="content-wrapper">
    <div class="container-fluid">
	  <div class="container">
	   <div class="form-group" >
        <div class="col-md-11" align="center">
         <main class="site-main">
		<div class="col-md-11" align="center"> 			
		<form method="post" action="" class="inner-login">
			<h3 class="text-center title-login" style="margin-top: 50px;"><font color="#000000">INPUT PARAMATER</h3>
			</br>
				<?php $sql = mysqli_query($koneksi, "SELECT * FROM dataresume WHERE STATUS = '1'");
				while($row = mysqli_fetch_assoc($sql)){
				?>
		
		<div class="form-group">
		<input type="text" name="gempa"  value="<?php echo $row['gempabumi']; ?>" placeholder="<?php echo $row['gempabumi']; ?>" class="form-control" autofocus></input>
		</div>
		<?php
		}
			?>
		<div class="form-group row">
		<div class="col-4">
				<select class="form-control" name= "op1">
				<option value="aktifitas sesar aktif, hasil interaksi sesar naik busur belakang Flores (Flores Back Arc Trust).">Back Arc Thrust</option>
				<option value="aktifitas sesar aktif.">Sesar Aktif</option>
				<option value="aktivitas Subduksi Lempeng Indo-Australia ke bawah Lempeng Eurasia.">Subduksi</option>
				</select>
		</div>
		<div class="col-4">
				<select class="form-control" name= "op2">
				<option value="laut">Epic di Laut</option>
				<option value="darat">Epic di Darat</option>
				</select>
		</div>
		<div class="col-4">
		<input type="text" name="judul"  placeholder="isi nama kota untuk judul" class="form-control" required autofocus />
		</div>
		</div>
		<div class="form-group row">
		<div class="col-2">
		<label class="checkbox-inline"><input type="checkbox" name = "sig1" value="I SIG (II MMI)">	 I SIG</label>
		</div>
		<div class="col-10">
		<input type="text" name="kota1"  placeholder="kota" class="form-control" />
		</div>
		</div>
		<div class="form-group row">
		<div class="col-2">
		<label class="checkbox-inline"><input type="checkbox" name = "sig2" value="II SIG (III MMI)">		II SIG</label>
		</div>
		<div class="col-10">
		<input type="text" name="kota2"  placeholder="kota" class="form-control" />
		</div>
		</div>
		<div class="form-group row">
		<div class="col-2">
		<label class="checkbox-inline"><input type="checkbox" name = "sig3" value="III SIG (VI MMI)">		III SIG</label>
		</div>
		<div class="col-10">
		<input type="text" name="kota3"  placeholder="kota" class="form-control" />
		</div>
		</div>
		<div class="form-group row">
		<div class="col-2">
		<label class="checkbox-inline"><input type="checkbox" name = "sig4" value="IV SIG (VII-VIII MMI)">		IV SIG</label>
		</div>
		<div class="col-10">
		<input type="text" name="kota4"  placeholder="kota" class="form-control" />
		</div>
		</div>
		<div class="form-group row">
		<div class="col-2"> 
		<label class="checkbox-inline"><input type="checkbox" name = "sig5" value="V SIG (IX-XII MMI) ">		V SIG</label>
		</div>
		<div class="col-10">
		<input type="text" name="kota5"  placeholder="kota" class="form-control" />
		</div>
		</div>
		</br>
<div class="form-group row">
<div class="col-9">
<input type="submit" name="Submit" value="Proses" class="btn btn-block btn btn-primary" />
</br>   
</div> 
<div class="col-2">
<button type="reset" name="Reset" value="Reset" class="btn btn-block btn btn-basic">Reset</button>
</br>    
</div> 
<div class="col-1">
<style>
								.button {
									background-color: #4CAF50; /* Green */
									border: none;
									color: white;
									font: 17px arial, sans-serif, bold;
									padding: 9px 15px;
									text-align: center;
									text-decoration: none;
									display: inline-block;
									font-size: 17px;
									margin: 0px 0px;
									border-radius: 4px;
									cursor: pointer;
								}

								.button2 {background-color: #008CBA;} /* Blue */
								.button3 {background-color: #32CD32;} /* Red */ 
								.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
								.button5 {background-color: #555555;} /* Black */
							</style>
<button class="button button3" type="button" data-toggle="modal" data-target="#peringatan"><i class="fa fa-file-text"></i></button>
<div class="modal fade" id="peringatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Perhatian!!!</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Dengan menekan tombol "OK" artinya parameter gempa tidak akan melalui tahap pengecekan. Terima kasih
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <input type="submit" name="Submit2" value="OK" class="btn btn-primary">
          </div>
        </div>
      </div>
    </div>
</br>   
</div> 
<!-- End container -->
</div> 
</div> 
</main> 
</div>
</div>
</div>

<table align="center" style="border-collapse:collapse;" cellpadding="2px" width="480px" border="1">
		<tr>
			<td align="center" ><a href="sumbergempa1.php"><img id="myImg" src="Peta/petasumber.jpeg" alt="Peta Sumber Gempabumi (Sumber: PusGen)" width="580" height="300"> </td>
		</tr>
		<tr>
		<td align="center"><a href="sumbergempa.php"> <button type="button" class="btn btn-block btn btn-danger">Lihat Rincian Sumber Gempa</button></a></td>
		</tr>
</table>

	<footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Program by Stasiun Geofisika Mataram 2018</small>
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
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
   </div>
</body>

</html>
<?php

if (isset($_POST['Submit'])){
	
	$gempa=$_POST['gempa'];
	$judul=$_POST['judul'];
	include("cek2.php");
	}elseif(isset($_POST['Submit2'])){
	$gempa=$_POST['gempa'];
	$judul=$_POST['judul'];
	include ("narasimodal.php");
	}
?>

