<?php
$host="localhost";
$user="postgres";
$pass="123";
$db="cpf";

$conn = pg_connect("host=$host dbname=$db user=$user password=$pass")
	or die ("Could not connect to server");
    //echo "connected";
	$query="SELECT * from cutoff";
	$ret=pg_query($conn,$query);
	while($row=pg_fetch_assoc($ret))
	{
		echo "success";
	}
	pg_close($conn);
	?>