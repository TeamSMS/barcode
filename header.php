<?php
session_start();

include "functions.php";
$db = new mysqli("localhost","root","admin","barcode");
if(isset($_SESSION['user'])){
  $loggedIn = true;
}
else {
  $loggedIn = false;
}
?>
