<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Department of Agriculture</title>

      <!-- Bootstrap -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../css/style.css"/>

      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>
    <div class="container">

      <div id="loginFormContainer">
          <div id="logoContainer">
            <img src="../img/logo.PNG" alt="" width="270" height="135" class="img-responsive">
          </div>
          <form name="loginForm" onsubmit="return validateLoginForm()" action="" method="post">
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" id="username" placeholder="Username" name="username">
              <span id="usernameSpan" style="color:red;"></span>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              <span id="passwordSpan" style="color:red;"></span>
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-success form-control">Login</button>
               <span id="errorSpan" style="color:red;"></span>
            </div>
        </form>
     </div>
    </div>
              
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="../js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/script.js"></script>
    </body>
  </html>
        