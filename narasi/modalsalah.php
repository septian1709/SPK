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
								width:38.9%;
								}
								}
								@media (max-width: 786px){
								.container-popup {
								width:40%;
								}
								}
								.container-popup {
								position: relative;
								margin-top: 3%;
								margin-left: 32%;
								padding: 1px 70px;
								background-color: #FFFFFF;
								border-radius: 5px;
								border-style: solid;
								border: thin;
								}
								.close {
								position: absolute;
								top:2px;
								right:3px;
								padding:2px 2px;
								background-color: #FFFFFF;
								font-size: 12px;
								text-decoration: none;
								}
							</style>
							<div class="modal-title"><small>Copyright © Pande Komang Gede Arta Negara</small>
							</div>
								<div>
									<button class= "close" type="button" onclick="history.back(-1)"/>
									<i class="fa fa-fw fa-close" aria-hidden="true"></i></button>
								</div>	
						</div>			  
							<p>Some text in the Modal..</p>
							<p>Some text in the Modal..</p>
							<div class="modal-footer">
								<table border="0" width="600px" align="center">
										<td align="left" valign="top">
										<a href="https://api.whatsapp.com/send?&text=%20" target="blank" onclick="copyToClipboard()">
											<img src="wa4.JPG">
										</a>
										</td>
										</br>
										<td align="left" valign="top">
										<a href="kirim2.php" onclick="copyToClipboard()">
											<img src="telegram2.JPG">
										</a>
										</td>	
										<td>
										<table border="0" width="400px" align="center">
										</table></td>		
								</table>
									<div> 
										<button class= "close" type="button" onclick="history.back(-1)" aria-hidden="true"/>
										<i class="fa fa-fw fa-close"></i></button>
									</div>
							</div>
			</div>
		</div>
	</div>