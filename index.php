<?php 
include_once 'header.php';
include_once 'class.php';
if ($loggedIn) {
  header('Location:home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome Patient Database</title>
    <link href="sp.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="shadow2 padding center col-md-4 col-xs-12 box border top w3 solid skyblue">
       <hr> <div class="text-center bold text-skyblue">Desk/Doctor Login</div> <hr>
        <a href="sign.php"><button class="ripple btn bg-skyblue shadow3 full-width">Login here</button></a>
       </div>
       <div class="shadow2 padding center col-md-4 col-xs-12 box border top green w3 solid">
       <hr> <div class="text-center bold text-green">Patients to watch their details</div> <hr>
        <a href="patient-sign.php"><button class="ripple btn bg-green shadow3 full-width">Login here</button></a>
       </div>
      <div class="shadow2 padding center col-md-4 col-xs-12 box border top red w3 solid">
       <hr> <div class="text-center bold text-red">About the project</div> <hr>
        <a href="about.php"><button class="ripple btn bg-red shadow3 full-width">About</button></a>
       </div>
     </div>
  </div>
  <script type="text/javascript" src="sp.js"></script>
</body>
</html>