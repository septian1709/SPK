<?php 
include("koneksi.php");
$gempa = $_GET['evid'];
$perintah ="sendMessage?chat_id=149713718&text=";
$data = "hallo";
$sql = mysqli_query($koneksi, "UPDATE dataresume SET
								STATUS='1' WHERE gempabumi ='$gempa'"); // query untuk memilih entri data dengan nilai nim terpilih

$callurl = curl_init();

curl_setopt($callurl , CURLOPT_URL, "https://api.telegram.org/bot458320085:AAEQ0o9bJUfKcAk0uG7et5SHF7pO9w3m2vQ/sendMessage?chat_id=149713718&text=$gempa");
curl_setopt($callurl , CURLOPT_HEADER, 0);

curl_exec($callurl );

curl_close($callurl );

if( $callurl) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: eventtrigger2.php');
	} else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		echo "pengiriman gagal";
	}


?>
