<?php 
include("koneksi.php");
$gempa = $_GET['evid'];
$sql = mysqli_query($koneksi, "UPDATE tb_narasi SET
								Status='1' WHERE OT ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih

?>
<!-- start popup -->
	<div class="container">
		<div id="close">
			<div class="container-popup">
				<div class="modal-header">
						<meta charset="utf-8">
							<style>
								@keyframes autopopup {
								from {opacity: 0;margin-top:-200px;}
								to {opacity:1;}
								}
								#close {
								background-color: rgba(64, 68, 65, 0.5);
								position: fixed;
								top:0;
								left:0;
								right:0;
								bottom:0;
								animation:autopopup 0.5s;
								}
								#close:target {
								-webkit-transition:all 1s;
								-moz-transition:all 1s;
								transition:all 1s;
								opacity: 0;
								visibility: hidden;
								}

								@media (min-width: 787px){
								.container-popup {
								width:25%;
								}
								}
								@media (max-width: 786px){
								.container-popup {
								width:28%;
								}
								}
								.container-popup {
								position: relative;
								margin-top: 3%;
								margin-left: 37.5%;
								padding: 2px 2px;
								background-color: #FFFFFF;
								border-radius: 5px;
								border-style: solid;
								border: thin;
								}
								.close {
								position: absolute;
								top:2px;
								right:0px;
								padding:2px 2px;
								background-color: #FFFFFF;
								font-size: 12px;
								text-decoration: none;
								}
							</style>
							<div class="modal-title">
							</div>
								<div class="modal-body">
								

<style>
.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
inputfile {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

input[type=file]:hover {
    background-color: #45a049;
}


div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
							<form method="post" enctype="multipart/form-data" action="uplod.php">
							<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
								<input type="file" name="gambar">
								<input type="submit" value="Upload">
							</form>

							</div>
							<div class="modal-footer">
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
									margin: 4px 2px;
									border-radius: 4px;
									cursor: pointer;
								}

								.button2 {background-color: #008CBA;} /* Blue */
								.button3 {background-color: #f44336;} /* Red */ 
								.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
								.button5 {background-color: #555555;} /* Black */
							</style>
							<button class="button button4" type="button" onclick="history.back(-1)">Cancel</button>
							<button class="button button2" type="button" onclick="history.back(-1)">OK</button>
							</div>
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
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>