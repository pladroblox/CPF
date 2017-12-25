
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
<li><a href="a_trend.php"><p class="title">Trend</p></a></li>
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
<?php
$query=0
?>
<div>
<form method="post" ">
    <label for="career">Choose college....</label><br>
    <select id="career" name="career">
      <option value="1">RAMRAO AADHIK INSTITUTE OF TECHNOLOGY</option>
      <option value="2">SIES INSTITUTE OF TECHNOLOGY</option>
      <option value="3">PILLAIS COLLEGE OF ENGINEERING</option>
      <option value="4">DATTA MEGHE COLLEGE OF ENGINEERING</option>
      <option value="5">TERNA COLLEGE OF ENGINEERING</option>
      <option value="6">INDIRA GANDHI COLLEGE OF ENGINEERING</option>
      <option value="7">LTT COLLEGE OF ENGINEERING</option>

    </select>
  
    <input type="submit" value="Submit">
  </form>

<link rel="stylesheet" href="b.css">


<?php 
define('DB_HOST','localhost');
define('DB_NAME','form');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die ("failed to connect to mysql".mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die ("failed to connect to mysql".mysql_error());

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   $query=$_POST["career"];
//exec("Rscript graph.R "'.$query.'" "); 
exec('"C:\Program Files\R\R-3.3.3\bin\Rscript" graph.r "'.$query.'" ');

$nocache = rand();
  echo("");
  
}

?>

<?php
if ($query == 1)
{
?>
<img src="dy.png" width="800" height="443"><br>
<?php
}
else if ($query == 2)
{
?>
<img src="sies.png" width="800" height="443"><br>
<?php
}
else if ($query == 3)
{
?>
<img src="pcoe.png" width="800" height="443"><br>
<?php
}
else if ($query == 4)
{
?>
<img src="dmcoe.png" width="800" height="443"><br>
<?php
}
else if ($query == 5)
{
?>
<img src="tcoe.png" width="800" height="443"><br>
<?php
}
else if ($query == 6)
{
?>
<img src="igcoe.png" width="800" height="443"><br>
<?php
}
else if ($query ==7)
{
?>
<img src="ltt.png" width="800" height="443"><br>
<?php
}
else { }
?>
</div>

</body>
</html>