<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("form") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>

<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<script>
$(document).ready(function() {
$('#languages').multiselect({
nonSelectedText: 'Select Language'
});
});
</script>

<div class="container">
<h2>  </h2>
<form class="form-signin" method="post" ">
<div class="form-group">
<select id="languages" name="languages[]" multiple >
<option value="0">PHP</option>
<option value="1">Python</option>
<option value="2">JavaScript</option>
<option value="3">Java</option>
<option value="4">C</option>
<option value="5">SQL</option>
</select>
</div>
<div class="form-group">
<button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">Submit</button>
</div>
</form>
</div>
</html>




<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
$car = $_POST["languages"]; 

$arrlength = count($car);
//echo $arrlength;
if( $arrlength == 1)
{ 

$query = "SELECT jobs FROM jobs WHERE ID=$car[0]";
$result = mysql_query($query);
while ($rows = mysql_fetch_array($result)) { 
  
$jobs = $rows["jobs"];
  
echo "   $jobs  <br> ";
}
}
 else
{
	$php=0;
	$python=0;
	$javascript=0;
	$java=0;
	$c=0;
	$sql=0;
	
	for($x = 0; $x < $arrlength; $x++) 
{
	
	switch ($car[$x]) {
    case 1:
        $query = "SELECT jobs FROM jobs WHERE ID=$car[0]";
        $result = mysql_query($query);
        while ($rows = mysql_fetch_array($result)) 
		{ 
  
        $php = $rows["jobs"];

	
	    }
        break;
    case 2:
        $query = "SELECT jobs FROM jobs WHERE ID=$car[1]";
        $result = mysql_query($query);
        while ($rows = mysql_fetch_array($result)) 
		{ 
  
        $python = $rows["jobs"];

		
		}
        break;
    case 3:
        $query = "SELECT jobs FROM jobs WHERE ID=$car[2]";
        $result = mysql_query($query);
        while ($rows = mysql_fetch_array($result)) 
		{ 
  
        $javascript = $rows["jobs"];

		
		}
        break;
	case 4:
        $query = "SELECT jobs FROM jobs WHERE ID=$car[3]";
        $result = mysql_query($query);
        while ($rows = mysql_fetch_array($result)) 
		{ 
  
        $java = $rows["jobs"];

		
		}
        break;
	case 5:
        $query = "SELECT jobs FROM jobs WHERE ID=$car[4]";
        $result = mysql_query($query);
        while ($rows = mysql_fetch_array($result)) 
		{ 
  
        $c = $rows["jobs"];

		
		}
        break;
	case 6:
        $query = "SELECT jobs FROM jobs WHERE ID=$car[5]";
        $result = mysql_query($query);
        while ($rows = mysql_fetch_array($result)) 
		{ 
  
        $sql = $rows["jobs"];

	
		}
        break;
}
	
}
	echo "$php";
	echo "<br>";
	echo "$python";
	echo "<br>";
	echo "$javascript";
	echo "<br>";
	echo "$java";
	echo "<br>";
	echo "$sql";
	echo "<br>";
	echo "$c";
	
	//exec('"C:/Program Files/R/R-3.3.3/bin/Rscript" final.r "'.$php.'" "'.$python.'" "'.$javascript.'" "'.$java.'" "'.$sql.'" "'.$c.'"    ');

	
	 $N = 3;
 
  // execute R script from shell
  // this will save a plot at temp.png to the filesystem
  exec("Rscript dev.R $N");
 
  // return image tag
  $nocache = rand();
  echo("");
	
	
	
}
	
}	
	 ?>
