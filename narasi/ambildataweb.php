<?php
function resourceWeb($url){
	$data = curl_init();
	curl_setopt($data, CURLOPT_URL, $url);
	curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
	$hasil = curl_exec($data);
	curl_close($data);
	return $hasil;
	}
?>