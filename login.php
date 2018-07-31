<!DOCTYPE html>
<html>
<head>
  <title>Stasiun Geofisika Sanglah</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.22.2/sweetalert2.min.css" />
  <link href="assets/img/icon.png" type="icon/x-image" rel="shortcut icon">  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>

  <style type="text/css">
    
  </style>
  
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white; margin: 0 0 0 0; box-shadow: 0px 0px 5px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand" style="padding-top: 10px;">
                        <ul>
                        <span> 
                            <a href="index.php">
                                <img src="assets/img/logo.png" width="30px">
                            </a>
                        </span> 
                        <span class="hidden-xs hidden-md" style="font-weight:bold; color:black; font-size: 14px" >
                            PUSAT GEMPA REGIONAL III
                        </span> 
                        </ul>
                    </div> 
                </div>
            </div>
        </nav>

  <div class="container">
    <div class="container" style="margin-bottom: 80px; margin-top: 60px">
    <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h1 class="text-center login-title">Login</h1>
         <div class="account-wall">
            <form method="post" action="cek_login.php" class="form-horizontal">
              <div class="form-group">
                <div class="col-sm-12">
                  <input name = "user" type="text" class="form-control" placeholder="Username" required autofocus>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <input name = "pass" type="password" class="form-control" placeholder="Password" required>
                </div>
              </div>

              <div class="card-footer">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
  </div>
</body>
</html>