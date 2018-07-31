<div class="container">
					 <div class="form-group" >
						<div class="col-md-12" align="center">
						 <main class="site-main">
						<div class="col-md-12" align="center"> 			
						<form method="post" action="" class="inner-login">

						<div class="form-group row">
						<div class="col-12">
						<input type="text" name="gempapgr"  placeholder="isi dengan parameter gempabumi PGR 3" class="form-control" autofocus></input>
						</div>
						</div>
						
						<div class="form-group row">
						<div class="col-12">
						<input type="text" name="gempadnp"  placeholder="isi dengan parameter gempabumi Sanglah" class="form-control" autofocus></input>
						</div>
						</div>
						
						<div class="form-group row">
						<div class="col-12">
						<input type="text" name="gempakhk"  placeholder="isi dengan parameter gempabumi Mataram" class="form-control" autofocus></input>
						</div>
						</div>
						<div class="form-group row">
						<div class="col-9">
						<Button type="submit" name="Submit" value="Proses" class="btn btn-block btn btn-primary" />
						</br>   
						</div> 
						<br>
						<br>
						$gempa=$_POST['gempapgr'];
							include("parsingpgr.php");
							$gempa=$_POST['gempadnp'];
							include("parsingdnp.php");
							$gempa=$_POST['gempakhk'];
							include("parsingkhk.php");	