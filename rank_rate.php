<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysql_select_db("today") or die(mysql_error());
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
  <li><a  href="CPF.php"><p class="title">Home</p></a></li>
  <li><a href="college_predictor.php"><p class="title">College Predictor</p></a></li>
<li><a class="active" href="rank_rate.php"><p class="title">Rank & Rating</p></a></li>
<li><a href="trend.php"><p class="title">Trend</p></a></li>
  <li><a class="active1"href="click_here.php"><p class="title">Career</p></a></li>
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
<br>
<br>
<div>
<form method="post" >
    <label for="career">Choose college....</label><br>
    <select id="career" name="career">
      <option value="1">	RAMRAO AADHIK INSTITUTE OF TECHNOLOGY</option>
      <option value="2">SIES INSTITUTE OF TECHNOLOGY</option>
      <option value="3">PILLAI\'S COLLEGE OF ENGINEERING</option>
<option value="4">DATTA MEGHE COLLEGE OF ENGINEERING</option>
<option value="5">KJ SOMAIYA INSTITUTE OF TECHNOLOGY</option>
<option value="6">RAJIV GANDHI INSTITUTE OF TECHNOLOGY:</option>
<option value="7">VIVEKANAND EDUCATION SOCIETY INSTITUTE OF TECHNOLOGY(VESIT)</option>
<option value="8">SARDAR PATEL COLLEGE OF ENGINEERING(SPCE)</option>
<option value="9">PADMASHREE DR DY PATIL DENTAL COLLEGE</option>
<option value="10">RA PODAR AYURVED MEDICAL COLLEGE</option>
<option value="11">RAJIV GANDHI MEDICAL COLLEGE</option>
<option value="12">KJ SOMAIYA MEDICAL COLLEGE</option>
<option value="13">NAIR HOSPITAL DENTAL COLLEGE</option>
<option value="14">TERNA MEDICAL COLLEGE</option>
<option value="15">TOPIWALA NATIONAL MEDICAL COLLEGE</option>
<option value="16">GRANT MEDICAL COLLEGE</option>
<option value="17">SETH GS MEDICAL COLLEGE</option>

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

 

    // gets value sent over search form
     
    // you can set minimum length of the query if you want
     
    // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection
         
        $raw_results =mysql_query("SELECT Grade,Rank FROM colleges WHERE ID=$query ")
   or die(mysql_error());
        

$num_rows = mysql_num_rows( $raw_results);


            
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysql_num_rows($raw_results) > 0)
{ // if one or more rows are returned do following
             
            while($results = mysql_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                echo "<p><center><h3>Grade=".$results['Grade']."</h3></center></p><p><center><h3>Rank=".$results['Rank']."<h3></center></p>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
   } 
   
?>
