<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Program Narasi</title>
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
<div class="login">
				<?php
				if(isset($_POST['login'])){
					include("koneksi.php");
					
					$username	= $_POST['username'];
					$password	= $_POST['password'];
					$level		= $_POST['level'];
									
					$query = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE User='$username' AND KataSandi='$password'");
					if(mysqli_num_rows($query) == 0){
						header("Location: login.php");
					}else{
						$row = mysqli_fetch_assoc($query);
						if($row['Statuspengguna'] == 'Admin'&& $level == 1){
							$_SESSION['User']=$username;
							$_SESSION['level']='Admin';
							header("Location: index.php");
						}else if($row['Statuspengguna'] =='Petugas'&& $level == 2){
							$_SESSION['User']=$username;
							$_SESSION['level']='Petugas';
							header("Location: index.php");
						}else{
							header("Location: login.php");
						}
					}
				}
				?>
    <form role="form" action="" method="post">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><a><img src="BMKG.png" width="27px">&nbsp;&nbsp;<b>Login Aplikasi</b></a></div>
      <div class="card-body">
        <form>
          <div class="form-group">
		  <label for="exampleInputPassword1">username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
          </div>
		  <div class="form-group">
            <label for="exampleInputPassword1">Level</label>
            <select name="level" class="form-control" required>
							<option value="">Pilih Level User</option>
							<option value="1">Administrator</option>
							<option value="2">Operasional</option>
							<option value="3">Masyarakat</option>
						</select>
          </div>
           <div class="form-group">
          <input type="submit" name="login" class="btn btn-primary btn-block" value="Log me in" />
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="kontak.php">Daftar Akun Baru</a>
          <a class="d-block small" href="kontak.php">Lupa Password?</a>
        </div>
		  <div class="text-center" "small" >
		<a>&copy; Stasiun Geofisika Mataram</a>
		</div>
      </div>
    </div>
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
