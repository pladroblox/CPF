<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("cpf") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>





<!DOCTYPE html>
<html>
<title>CAREER-PATH-FINDER</title>
<h4><center><p class="title">CAREER-PATH-FINDER</p></center></h4>
<marquee width="80%"><p class="title">"your future depends on what you do today"</p></marquee>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="cpf1.css">
<link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Frijole|Jolly+Lodger|Josefin+Slab" rel="stylesheet">

</head>
<body>
<ul>
<li><a  href="admin_CPF.php"><p class="title">Home</p></a></li>
<li><a href="a_college_predictor.php"><p class="title">College Predictor</p></a></li>
<li><a href="a_rank_rate.php"><p class="title">Rank & Rating</p></a></li>
<li><a href="rstudio/newgraph.php"><p class="title">placement</p></a></li>
<li><a class="active1"href="a_click_here.php"><p class="title">Career</p></a></li>
<li><a href="insert_data.php"><p class="title">ADD</p></a></li>
<li><a class="active1"href="signout.php"><p class="title">SIGNOUT</p></a></li>
</ul>


  


<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    align:center;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
margin:auto;
width: 50%;
align:center;
}
</style>
<body>


<div>
<form method="post" ">
    <label for="career">Choose your Career....</label><br>
    <select id="career" name="career">
      <option value="1">Engineer</option>
      <option value="2">Doctor</option>
      <option value="3">Architecture</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

<link rel="stylesheet" href="b.css">
</body>
</html>



<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   $query=$_POST["career"];

 $raw_results =mysql_query("SELECT * FROM best WHERE ID=$query ") or die(mysql_error());

while($all_video=mysql_fetch_array($raw_results))

	{
?>
	 
	 <video width="1500" height="425"  controls autoplay>
	<source src="<?php echo $all_video['path'];?>.mp4" type="video/mp4">
  <source src="<?=$dbPath;?>.mp4" type="video/mp4">
	</video>

<?php } } ?>