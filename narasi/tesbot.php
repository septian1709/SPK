<?php
require_once('./koneksi.php');
//include("telegram.php");
//$botToken = "548652895:AAHm1zvll2NNBkOuLBMV_iPJF767vGEemwg";
//$telegram = new Telegram($botToken);
// Setting token bot API
// Token didapatkan dari melakukan pembuatan bot pada BotFather ditelegram

// Base Url untuk mengakses API dari telegram bot
$website = "https://api.telegram.org/bot".$botToken;
// Mengambil informasi dari webhook, informasi yang didapat akan diparse dan dimasukkan kedalam variable $message
$content = file_get_contents("php://input");
echo $content;
$update = json_decode($content, TRUE);
$message = $update["message"];
echo $message;
// Beberapa variable yang dibutuhkan dalam proses auto responder
// Mengambil unique chat id dari tiap user
//$chatId = $message["chat"]["id"];
$chatId = "471188933";
echo $chatId;
// Mengambil text message yang dikirmkan oleh user
$key= $message["text"];
// Melakukan pengecheckan data pada tabel sesuai dengan keyword yang terismpan pada variable $text
$query = mysqli_query($koneksi,"select narasi from tb_penjelasan where OT='".$key."'");
if (mysqli_num_rows($query)>0){
 while ($cari = mysqli_fetch_row($query)){
// Hasil dari pencarian apabila ditemukan keyword yang dicari maka akan memasukkan hasil pencarian pada $balasan
 $balasan = $cari['0'];
 echo $balasan;
 }
// Jika keyword yang dicari tidak ada maka akan memunculkan pesan sebagai berikut
} else {
 $balasan = "Keyword tidak ada";
}

// Mengirim pesan menggunakan api telegram menggunakan API sendMessage
// ex : https://api.telegram.org/bot[token]/sendmessage?text=[message]]&chat_id=[chatid]]
//$content = array('chat_id' => $chatId, 'text' => $balasan);
		//$telegram->sendMessage($content);
//file_get_contents($website."/sendmessage?chat_id="."471188933"."&text=".$balasan);
?>