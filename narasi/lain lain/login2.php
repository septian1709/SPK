<?php
				if(isset($_POST['login'])){
					include("koneksi.php");
					
					$username	= $_POST['username'];
					$password	= $_POST['password'];
					$level		= $_POST['level'];
					
					$query = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE User='$username' AND KataSandi='$password'");
					if(mysqli_num_rows($query) == 0){
						echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
					}else{
						$row = mysqli_fetch_assoc($query);
						
						if($row['Statuspengguna'] == 'Admin' && $level == 1){
							$_SESSION['User']=$username;
							$_SESSION['level']='admin';
							header("Location: index.php");
						}else if($row['Statuspengguna'] == 2 && $level == 'Petugas'){
							$_SESSION['username']=$username;
							$_SESSION['level']='dosen';
							header("Location: index.php");
						}else if($row['Statuspengguna'] == 3 && $level == 3){
							$_SESSION['username']=$username;
							$_SESSION['level']='mahasiswa';
							header("Location: index.php");
						}else{
							echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
						}
					}
				}
				?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>


<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<body class="bg-dark">
  <div class="container">
		<div class="col-4" align="center">
		 <br>
   			<img src="bmkg2.png" height=20% width=20% alt="Post">
   			<h3>APLIKASI GEMPABUMI</h3>
			<h4>BMKG MATARAM</h4>
		</div>
		<div>
			<br>
			<br>
			<br>
			<br>
		</div>
		<div class="row">
		
			<div class="login">
			
				<form role="form" action="index.php" method="post">
					<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
					</div>
					<div class="form-group">
						<select name="level" class="form-control" required>
							<option value="">Pilih Level User</option>
							<option value="1">Administrator</option>
							<option value="2">Operasional</option>
							<option value="3">Masyarakat</option>
						</select>
					</div>
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-primary btn-block" value="Log me in" />
					</div>
				</form>
				</div>
				<div class="row">
			
			 &copy; Pande Komang Gede Arta Negara
		</div>
	</div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</body>
</html>