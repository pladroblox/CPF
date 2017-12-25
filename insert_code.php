<?php

session_start();


    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    


$name=$_POST['name'];

$info=$_POST['info'];

$city=$_POST['city'];

$fees=$_POST['fees'];

$grade=$_POST['grade'];

$rank=$_POST['rank'];

$extc=$_POST['extc'];

$ce=$_POST['ce'];

$it=$_POST['it'];

$mech=$_POST['mech'];

$civil=$_POST['civil'];

$au=$_POST['au'];

$mbds=$_POST['mbds'];

$bams=$_POST['bams'];

$mbbs=$_POST['mbbs'];


if ($city=='mumbai')
{

mysql_select_db("clg_db") or die(mysql_error());
        
mysql_query("INSERT INTO colleges(name, information, fees, grade, rank)VALUES('$name', '$info', '$fees', '$grade', '$rank')");
mysql_query("INSERT INTO cutoff(EXTC, CO, ME, IT, CE,AU,MBDS,MBAMS,MBBS)VALUES('$extc', '$ce', '$mech', '$it', '$civil', '$au', '$mbds', '$bams', '$mbbs')");

header("location: data_stored.php?remarks=success");

}
else
{
	
	mysql_select_db("site_2") or die(mysql_error());
        
mysql_query("INSERT INTO colleges(name, information, fees, grade, rank)VALUES('$name', '$info', '$fees', '$grade', '$rank')");
mysql_query("INSERT INTO cutoff(EXTC, CO, ME, IT, CE,AU,MBDS,MBAMS,MBBS)VALUES('$extc', '$ce', '$mech', '$it', '$civil', '$au', '$mbds', '$bams', '$mbbs')");

header("location: data_stored.php?remarks=success");

}	
mysql_close($con);

?>

