<?php

session_start();

include('connection.php');

$name=$_POST['name'];

$email=$_POST['email'];

$clg=$_POST['clg'];

$uname=$_POST['uname'];

$password=$_POST['password'];



$roll='user';

$que=$_POST['que'];

$ans=$_POST['ans'];

mysql_query("INSERT INTO member(name, email, clg, uname, password,roll)VALUES('$name', '$email', '$clg', '$uname', '$password','$roll')");

header("location: bb.php?remarks=success");

mysql_close($con);

?>

