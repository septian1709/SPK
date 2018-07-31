<?php 
//include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>

<html>
<body>

	<h1>Upload Image</h1>

	<form action="" method="post" enctype="multipart/form-data">
		Pilih File : <input type="file" name="peta"> <input type="submit" value="Upload">
	</form>

	<?php
	//koneksi ke database

	$file = $_FILES['peta']['tmp_name'];

	if(!isset($file)){
		echo 'Pilih file gambar';
	}else{
		$image 		= addslashes(file_get_contents($_FILES['peta']['tmp_name']));
		$image_name	= addslashes($_FILES['peta']['name']);
		$image_size	= getimagesize($_FILES['peta']['tmp_name']);

		if($image_size == false){
			echo 'File yang anda pilih tidak gambar';
		}elseif($insert = mysqli_query($koneksi, "INSERT INTO tb_narasi ('sig') VALUES ('$image')")){
				echo 'Gagal upload gambar';
			}else{
				//ambil id terakhir insert
				$lastid = mysqli_insert_id();

				echo 'Gambar berhasil di upload.<p>Gambar anda:</p><img src="get.php?id='.$lastid.'">';
			}
		}
	?>

</body>
</html>