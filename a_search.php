<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>CAREER-PATH-FINDER</title>
<h4><center><p class="title">CAREER-PATH-FINDER</p></center></h4>
<marquee width="80%"><p class="title">"your future depends on what you do today"</p></marquee>


<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="cpf1.css">
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Frijole|Jolly+Lodger|Josefin+Slab" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
 
</head>

<body>
<ul>
<li><a class="active" href="a_college_predictor.php"><p class="title">Go back</p></a></li>
  
</ul>
  

<br>
<br>


<?php
    $query =  $_POST['query']; 

  $select_branch = $_POST['branch'];

     
    $min_length = 2;
     
    if(strlen($query) >= $min_length)
	{ 
	
        $query = htmlspecialchars($query); 
         
        $query = mysql_real_escape_string($query);
		
        mysql_select_db("clg_db") or die(mysql_error());
         
        $raw_results =mysql_query("SELECT colleges.Name, colleges.Information, colleges.Fees, colleges.Grade, colleges.Rank, colleges.Grade, cutoff.$select_branch FROM colleges INNER JOIN cutoff ON colleges.ID=cutoff.ID WHERE cutoff.$select_branch < $query AND cutoff.$select_branch > '40' ORDER BY cutoff.$select_branch DESC")
   or die(mysql_error());
        

        $num_rows = mysql_num_rows( $raw_results);

     echo " ";

            
         
      if(mysql_num_rows($raw_results) > 0)
        {            
            while($results = mysql_fetch_array($raw_results))
			{
             
                echo "<p><h3>".$results['Name']."</h3>".$results['Information']."</p>";
            }
		}





		mysql_select_db("site_2") or die(mysql_error());
             
		 
			 $raw_results =mysql_query("SELECT colleges.Name, colleges.Information, colleges.Fees, colleges.Grade, colleges.Rank, colleges.Grade, cutoff.$select_branch FROM colleges INNER JOIN cutoff ON colleges.ID=cutoff.ID WHERE cutoff.$select_branch < $query AND cutoff.$select_branch > '40' ORDER BY cutoff.$select_branch DESC")
   or die(mysql_error());
        

$num_rows = mysql_num_rows( $raw_results);

echo "";

         
        if(mysql_num_rows($raw_results) > 0)
         {            
            while($results = mysql_fetch_array($raw_results))
			{
             
                echo "<p><h3>".$results['Name']."</h3>".$results['Information']."</p>";
            }    
		 }
        else{ 
            echo "No results";
        }
         
    }
    else{ 
        echo "Minimum length is ".$min_length;
    }
?>
</body>
