<?php
session_start();
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
<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">



</head>
<link rel="stylesheet" href="b.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.mySlides {display:none;}
</style>

<body>
<ul>
<li><a class="active" href="user_CPF.php"><p class="title">Home</p></a></li>
  <li><a href="u_college_predictor.php"><p class="title">College Predictor</p></a></li>
<li><a href="u_rank_rate.php"><p class="title">Rank & Rating</p></a></li>
<li><a href="u_graph.php"><p class="title">Trend</p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>

<li><a class="active1"href="signout.php"><p class="title">SIGNOUT</p></a></li> 
</ul>

  
<div class="w3-content w3-section";padding-top:43.7%; style="max-width:1500px;top:4000px;box-shadow: 10px 10px 5px #888888;">

<img class="mySlides" src="doctor.jpg" style="width:100%; ">
<img class="mySlides" src="pic4.jpg" style="width:100%">
<img class="mySlides" src="pic5.jpg" style="width:100%">
</div>



<div style=" width:30%;position:absolute;float:left;top:1200px;height:300px;background-color:white;left:50px;text-align:center;">
<img src="college_predictor.png" width="350" height="263" alt="college_predictor"><br>
<p class="title"><a href="https://kaustubhapp.shinyapps.io/oldapp/">Analysis</p><br>
<button class="button "><a href="https://kaustubhapp.shinyapps.io/oldapp/"><p class="title">Go</p></button>
</div>

<div style=" width:30%;position:absolute;float:left;top:1200px;height:300px;background-color:white;left:480px;text-align:center;">
<img src="rank.png" width="350" height="263" alt="Rank&Rating"><br>
<p class="title"><a href="https://kaustubh27kulkarni.shinyapps.io/newapp/">Job recommendation</p><br>
<button class="button"><a href="https://kaustubh27kulkarni.shinyapps.io/newapp/"><p class="title">Go</p></button>
</div>

<div style=" width:30%;position:absolute;float:left;top:1200px;height:300px;background-color:white;left:910px;text-align:center;">
<img src="trend.png" width="350" height="263" alt="Trend meter"><br>
<p class="title"><a href="checkcheck.php">Placement</p><br>
<button class="button"><a href="checkcheck.php"><p class="title">Go</p></button>
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