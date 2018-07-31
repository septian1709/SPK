<?php
session_start();
?>
<?php
//---------------------------------------//
//KONTAK//
//"471188933"--> pande
//"-200320471"--> Group Narasi Gempa

//--------------------------------------//
	
	include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
	include("telegram.php");

	$bot_id = "521308398:AAHMJ1I252920Kq4K3bztLuSUN5RvrIgevc"; //Isikan dengan token yang didapat dari @BOTFather
	
	$telegram = new Telegram($bot_id);
	
	$telegram_id = $_POST ['telegram_id'];
	$message_text = $_POST ['message_text'];
	$_SESSION['pesan']=$message_text;
	//keyword pencarian
	$key = "pukul";
	
	// lakukan pencarian string
	$cari = stristr($message_text,$key);
	

	// fungsi substr()
	$potong = substr($cari,6,8);
	$potong1 = substr($message_text,0,390).'...';

	
	//$ot=
	//echo $telegram_id;
	
	$sql = mysqli_query($koneksi, "UPDATE tb_penjelasan SET
								narasi= '$message_text' WHERE OT ='$potong'"); // query untuk memilih entri data dengan nilai nim terpilih
	$sql2 = mysqli_query($koneksi, "UPDATE tb_penjelasan SET
								judul= '$potong1' WHERE OT ='$potong'"); // query untuk memilih entri data dengan nilai nim terpilih
	//$sql = "INSERT INTO tb_narasi (naras) VALUES ('$message_text')";
	//$koneksi->query($sql);
	
	$telmassege="$message_text"; //isi pesan yang akan dikirimkan

	$chat_id = array("-200320471","$telegram_id"); //Isikan array ini dengan kode user yang akan kita kirimkan pesan
	foreach($chat_id as $key => $val){
		$content = array('chat_id' => $val, 'text' => $telmassege);
		$telegram->sendMessage($content);
		header("Location: kirim2.php");
	}
?>
