<?php
$servername="localhost";
$username = "root";
$password ="";
$dbname="cpf";
$conn=mysql_connect("localhost", "root" , "" );

if($conn)
{
	if ($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name= ($_POST['name']);
		$email= ($_POST['email']);
		$clg= ($_POST['clg']);
		$username=($_POST['uname']);
		$password=($_POST['password']);
		$c_password=($_POST['password_two']);
		
			
		
	}
	echo "connect";
}
else 
{
echo"not";
}
if($c_password==$password)

{
	$sql="INSERT INTO register VALUES ('$name','$email','$clg','$username','$password','$c_password')";
$res=mysql_query($conn,$sql);
}

?>