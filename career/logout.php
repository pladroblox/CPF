<?php 
session_start();

$_SESSION = array();

if (isset($_COOKIE["username"]) && isset($_COOKIE["password"])) {
	setcookie("username", "", strtotime("-5 days"), "/");
	setcookie("password", "", strtotime("-5 days"), "/");
}

session_destroy();

header("location: index.php");
exit();

?>