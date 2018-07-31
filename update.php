<?php
	session_start();
	include("koneksi.php");
	$id = $_POST['id'];
	$deskripsi = $_POST['deskripsi'];
	$option1 = $_POST['op1'];
	$option2 = $_POST['op2'];
	$option3 = $_POST['op3'];
	$namakota = $_POST['nama_kota'];
	$kota1 = $_POST['nama_kota1'];
	$kota2 = $_POST['nama_kota2'];
	$kota3 = $_POST['nama_kota3'];
	$kota4 = $_POST['nama_kota4'];
	$kota5 = $_POST['nama_kota5'];

	$update = mysqli_query($koneksi,"UPDATE repository SET STATUS = '$option3', sumber = '$option1', lokasi = '$option2', judul = '$namakota', sig1 = '$kota1', sig2 = '$kota2', sig3 = '$kota3', sig4='$kota4', sig5 = '$kota5' WHERE nomor = '$id'");
	
	if($update)
	{
		echo "<script>alert('Data berhasil diubah');location.href='repository.php'</script>";
	}
	else
	{
		echo "<script>alert('Data gagal diubah');location.href='detail.php?id=$id'</script>";
	}
?>
