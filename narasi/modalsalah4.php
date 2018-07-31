<!-- start popup -->
	<div class="container">
		<div id="close">
			<div class="container-popup">
				<div class="modal-header" color="lightblue">
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
							<h4>Perhatian!!!</h4>
							</div>
								<div>
									<button class= "close" type="button" onclick="history.back(-1)"/>
									<i class="fa fa-fw fa-close" aria-hidden="true"></i></button>
								</div>	
						</div>	
							<div class="modal-body">	
							<p>Mohon dicek kembali. Sumber gempabumi mungkin tidak sesuai dengan kedalamannya. Disarankan menggunakan Back Arc Trust</p>
							<p>Terima kasih</p>
							</div>
							<div class="modal-footer">
							<style>
								.button {
									background-color: #4CAF50; /* Green */
									border: none;
									color: white;
									font: 17px arial, sans-serif, bold;
									padding: 9px 15px;
									text-align: center;
									text-decoration: none;
									display: inline-block;
									font-size: 17px;
									margin: 0px 0px;
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

	