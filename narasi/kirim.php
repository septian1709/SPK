<?php 
//include("header.php"); // memanggil file header.php
include("koneksi.php"); // memanggil file koneksi.php untuk koneksi ke database
?>
	<!-- Start container -->
	
		<main class="site-main">
		<div class="col-md-6 col-md-offset-3"> 		
		<form method="post" action="send.php" class="inner-login">
		<table border="0" width="600px" align="center">
		<td align="center" valign="top">
		<img src="https://itsdcdn.com/resources/services/logowide/170/telegram.png">
				</td>
		</table>
					<div class="form-group row">
					<div class="col-md-12 ">
					<textarea type="text" name="message_text"  placeholder="Paste pesan disini" class="form-control" autofocus></textarea>
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
                    <div class="col-xs-4">
<input type="text" name="telegram_id"  placeholder="Isi ID Telegram" class="form-control" >
</br>   
</div> 
<div class="col-xs-4">
<button type="submit" class="btn btn-primary center">Send <i class="fa fa-send"></i></button>
</br>   
</div>  
	 </main> 
	<!-- End container -->

