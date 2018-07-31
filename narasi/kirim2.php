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
	<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Kirim Pesan Telegram</li>
      </ol>
	  <!--ganti ganti-->
	  <!-- Start container -->
	<div class="container">
	   <div class="row">
        <div class="col-12">
		<main class="site-main">
		<div class="col-md-12"> 		
		<form method="post" action="send.php" class="inner-login">
		<style> 
			#rcorners3 {
				border-radius: 0px 30px;
				background: #00BFFF;
				padding: 20px; 
				width: 1080px;
				height: 70px;
				border:0px
			} 
		</style>
		<table  align="center" id="rcorners3">
		<td align="left" valign="top">
		<img src="https://itsdcdn.com/resources/services/logowide/170/telegram.png">
		</td>
		</table>
			<br>
					<textarea type="text" name="message_text" id="narasi" placeholder="Paste pesan disini" class="form-control" autofocus></textarea>
					<div class="form-group row">
					<div class="col-12 ">
					<script>
								var textarea = document.querySelector('textarea');
								textarea.addEventListener('keydown', autosize);  
								function autosize(){
									var el = this;
									setTimeout(function(){
									el.style.cssText = 'height:auto; padding:0';
									// for box-sizing other than "content-box" use:
									// el.style.cssText = '-moz-box-sizing:content-box';
									el.style.cssText = 'height:' + el.scrollHeight + 'px';
									},0);
								}
						</script>
					</div>
					</div>
					<div class="form-group row">
                    <div class="col-4">
<input type="text" name="telegram_id"  placeholder="Isi ID Telegram" class="form-control" >
</br>   
</div> 

							<style>
								.button {
									background-color: #4CAF50; /* Green */
									border: none;
									color: white;
									font: 17px arial, sans-serif, bold;
									padding: 10px 20px;
									text-align: center;
									text-decoration: none;
									display: inline-block;
									font-size: 17px;
									margin: 0px 0px;
									border-radius: 4px;
									cursor: pointer;
								}

								.button2 {background-color: #00BFFF; color: black;} /* Blue */
								.button3 {background-color: #f44336;} /* Red */ 
								.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
								.button5 {background-color: #555555;} /* Black */
							</style>



<div class="col-xs-4">
<button type="submit" class="button button2">Send <i class="fa fa-send"></i></button>
</br>   
</div>  
<div class="col-xs-4">
<button type="button" class="button button2" onclick="history.back(-1)">Kembali</button>
</br>   
</div>  
 </div>
	 </main> 
	 </div>
	 </div>
	 </div>
	<!-- End container -->
	  
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
