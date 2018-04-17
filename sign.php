<?php
include_once 'header.php';
include_once 'token.php';
if ($loggedIn) {
  header('Location:index.php');
}
?>
 <!doctype html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Login to Patient Database</title>
     <link href="sp.css" type="text/css" rel="stylesheet"/>
     <link href="style.credential.css" type="text/css" rel="stylesheet"/>
   </head>
   <body>
     <div class="container">
           <form action="dologin.php" class="shadow3 padding15 border top solid w3 green bottom" method="post">
           <h2 class="text-steelblue full-width text-center">LOGIN</h2>
           <input required class="ipt" name="username" type="text" placeholder="Username"/>
           <input required class="ipt" name="password" type="password" placeholder="Password"/>
           <input type="hidden" name="token" value="<?=$_SESSION['token'];?>" />
            <hr>
           Login as <input type="radio" name="utype" value="desk"/> desk <input type="radio" name="utype" value="doctor"/> doctor
           <hr>
           <input type="submit" class="ripple btn btn-green full-width" name="login" value="login"/>
              <div class="forgot"><a href="forgot.php">Forgot password?</a></div>
           </form>
      </div>
     <script src="sp.js"></script>
     <script src="main.js"></script>
   </body>
 </html>
