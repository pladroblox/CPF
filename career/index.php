<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>CAREER-PATH-FINDER</title>
<h4><center><h2>CAREER PATH FINDER</h2></center></h4>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/cpf1.css">




</head>
<link rel="stylesheet" href="b.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.mySlides {display:none;}
</style>

<body>

<ul>
<li><a class="active" href="#home">Home</a></li>
<li><a href="login.php">Log in</a></li>
<li><a href="register.php" >Register</a></li>
<li><a href="college_predictor.php">College Predictor</a></li>
<li><a href="rank_rate.php">Rank & Rating</a></li>
<li><a href="trend.php">Trend</a></li>
<li><a href="#about">About</a></li>
<li><a class="active" href="click_here.html ">What you want to become ?....click here</a></li>
<?php 
if(isset($_SESSION['username']))
{
  echo "<li><a href='logout.php'>LOGOUT</a></li>";
}
?>
</ul>

  
<div class="w3-content w3-section"; padding-top:43.7%; style="max-width:1500px;top:4000px">
<img class="mySlides" src="images/pic1.jpg" style="width:100%;">
<img class="mySlides" src="images/doctor.jpg" style="width:100%; ">
<img class="mySlides" src="images/pic2.jpg" style="width:100%;">
<img class="mySlides" src="images/pic3.jpg" style="width:100%">
<img class="mySlides" src="images/pic4.jpg" style="width:100%">
<img class="mySlides" src="images/pic5.jpg" style="width:100%">
</div>



<div style=" width:30%;position:static;float:left;top:1100px;height:300px;background-color:white;left:50px;text-align:center;">
<img src="images/college_predictor.png" width="350" height="263" alt="college_predictor"><br>
College predictor<br>
<button class="button"><a href="college_predictor.html">Go</button>
</div>

<div style=" width:30%;position:static;float:left;top:1100px;height:300px;background-color:white;left:480px;text-align:center;">
<img src="images/rank.png" width="350" height="263" alt="Rank&Rating"><br>
Ranking & Rating<br>
<button class="button"><a href="rank_rate.html">Go</button>
</div>

<div style=" width:30%;position:static;float:left;top:1100px;height:300px;background-color:white;left:910px;text-align:center;">
<img src="images/trend.png" width="350" height="263" alt="Trend meter"><br>
Trend meter<br>
<button class="button"><a href="trend.html">Go</button>
</div>
 

<script>
var myIndex = 0;
carousel();

function carousel() 
{
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>