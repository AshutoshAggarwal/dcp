<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delhi Police</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="info">
         <h2 class="bg-primary">Medical Claim</h2>
         <div class="bg-info">
          <p class="text-danger">Please use below user combinations</p>
          <table class="col-md-6 col-md-offset-3">
            <thead>
                <th>&nbsp;</th><th>Username</th><th>Password</th>
            </thead>
            <tbody>
                <tr><th>For DCP</th><td>admin</td><td>123456789</td></tr>
                <tr><th>For Dealing Hand</th><td>dealinghand</td><td>123456789</td></tr>
                 <tr><th>For ACP</th><td>acp</td><td>123456789</td></tr>
                 <tr><th>For Ins. admin</th><td>iadmin</td><td>123456789</td></tr>
                <tr><th>For HAG</th><td>hag</td><td>123456789</td></tr>
            </tbody>
          </table>
         </div>
       
          <div class="col-md-6 col-md-offset-3">
                    <h4></span>Log in with your credentials<span class="glyphicon glyphicon-user"></h4><br/>
                            <div class="block-margin-top">
                              <?php 

                                $errors = array(
                                    1=>"Invalid user name or password, Try again",
                                    2=>"Please login to access this area"
                                  );

                                $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;

                                if ($error_id == 1) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }elseif ($error_id == 2) {
                                        echo '<p class="text-danger">'.$errors[$error_id].'</p>';
                                    }
                               ?>  

                              <form action="authenticate.php" method="POST" class="form-signin col-md-8 col-md-offset-2" role="form">  
                                  <input type="text" name="username" class="form-control" placeholder="Username" required autofocus><br/>
                                  <input type="password" name="password" class="form-control" placeholder="Password" required><br/>
                                  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                             </form>
                           </div>
            </div>

      </div>
      
     
    </div>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
