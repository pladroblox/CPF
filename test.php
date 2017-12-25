<?php
$host="host=localhost";
$port="port=5432";
$dbname="cpf";
$credentials="user=postgres password=''";
$db=pg_connect("$host $port $dbname $credentials");
if(!$db)
{
	echo"Error";
}
else{
	echo "Sucess";
}
?>