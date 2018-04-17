<?php
include_once "header.php";
$token = $_SESSION['token'];
$compToken = $_POST['token'];

if($compToken === $token){
	$utype = $_POST['utype'];
	$uname = $_POST['username'];
	$password = $_POST['password'];
	$password = md5($password);
	$tableName;

	if ($utype == "doctor") {
		$tableName = "doctors";
	}
	elseif ($utype == "desk") {
		$tableName = "desk";
	}
	else{
		header("Location:sign.php?error=2");
		exit();
	}

	$loginQuery = "SELECT * FROM $tableName WHERE `uname`='$uname' AND `password`='$password'";
	$query = $db->query($loginQuery);

	if ($query && $query->num_rows == 1) {
		$_SESSION['user'] = $tableName;
		header("Location:index.php");
	}
	else {
		header("Location:sign.php?error=1");
		exit();
	}
}
else{
	header("Location:sign.php?error=3");
	exit();
}
?>
