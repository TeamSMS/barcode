<?php
session_start();
session_destroy();
unset($_SESSION['user']);
unset($_SESSION['token']);
header("Location:sign.php");
?>