<?php
session_start();
?>
<?php
$pesan=$_SESSION['pesan'];
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "imagessig/".$nama_file;
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
	  $query = mysqli_query($koneksi, "UPDATE tb_narasi SET
								sig='$nama_file' WHERE Status ='Aktif'"); // query untuk memilih entri data dengan nilai nim terpilih
		
	
	//keyword pencarian
	$key = "pukul";

	// lakukan pencarian string
	$cari = stristr($pesan,$key);
	
	// fungsi substr()
	$potong = substr($cari,6,8);
	//echo $potong;
	$query = mysqli_query($koneksi, "UPDATE tb_penjelasan SET
								sig='$nama_file' WHERE OT ='$potong'"); // query untuk memilih entri data dengan nilai nim terpilih
	
      //$query = "INSERT INTO tb_narasi WHERE Status='1' VALUES('".$nama_file."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
	 
	  header("Location: cobatabel.php");
  }
  

?>