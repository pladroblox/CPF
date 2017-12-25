<?php 
session_start();

if(!isset($_SESSION['username']))
{
  header("location: login.php");
}

?>
<!DOCTYPE html>
<html>
<title>CAREER-PATH-FINDER</title>
<h4><center>CAREER-PATH-FINDER</center></h4>
<marquee width="80%">"your future depends on what you do today"</marquee>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/cpf1.css">
  <style>
  #card {
    width: 80%;
    background-color: #FFFFFF;
    border-radius: 4px;
    transition: all 0.2s ease-in-out;
}

#card:hover {
-webkit-box-shadow: -1px -1px 30px 0px rgba(50, 50, 50, 0.29);
-moz-box-shadow:    -1px -1px 30px 0px rgba(50, 50, 50, 0.29);
box-shadow:         -1px -1px 30px 0px rgba(50, 50, 50, 0.29);
    transition: all 0.4s ease-in-out;

}

#select_branch {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=number], select {
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
</head>
<body>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="login.php">Log in</a></li>
<li><a href="register.php" >Register</a></li>
<li><a class="active" href="college_predictor.php">College Predictor</a></li>
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

<div>
  <form method="POST">

    <label><b> Enter your percentage :</b></label>
    <input type="number" placeholder="e.g. 80%" name="percentage" min="40" max="100">
    <select id="select_branch" name="branch">
      <option value="EXTC">Electronics &amp; Telecommunication</option>
      <option value="CO">Computer</option>
      <option value="ME">Mechanical</option>
      <option value="IT">Information</option>
      <option value="CE">Civil</option>
      <option value="AU">Automobile</option>
      <option value="MBDS">Medical - BDS</option>
      <option value="MBAMS">Medical - BAMS</option>
      <option value="MBBS">MBBS</option>
    </select>
   <input type="submit" value="Submit">
  </form>
</div>

<div id="result_area" style="width: 80%; background-color: #FFFFFF;">
	
</div>

<link rel="stylesheet" href="css/b.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>
</html>

<?php

include_once 'dbconx.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
   if (empty($_POST["percentage"])) {
      echo "<script>alert('Please enter percentage to search');</script>";
   }elseif (is_numeric($_POST["percentage"])) {
      $percentage = $_POST['percentage'];
      $select_branch = $_POST['branch'];

      $sql = "SELECT colleges.Name, colleges.Information, colleges.Fees, colleges.Grade, colleges.Rank, colleges.Grade, cutoff.$select_branch FROM colleges INNER JOIN cutoff ON colleges.ID=cutoff.ID WHERE cutoff.$select_branch < $percentage AND cutoff.$select_branch > '40' ORDER BY cutoff.$select_branch DESC";
      $query = mysqli_query($dbcon, $sql);
      $num = mysqli_num_fields($query)/2;

      if (mysqli_num_rows($query) == 0) {
          echo "<script>$('#result_area').append('<div id=\"card\"><center><img src=\"images/sad.jpg\" width=\"100px\" height=\"100px\" /></br><b><h3>Oops! No results found.<h3></b></center></div>');
        </script>";
        }else {
          echo "<script>$('#result_area').append('<h4><b>".mysqli_num_rows($query)." Results matching your search</b></h4>');</script>";
          while ($row = mysqli_fetch_assoc($query)) {

            echo "<script>$('#result_area').append('<div id=\"card\"><b><h3>".$row["Name"]."</h3></b></br><b>INFORMATION:</b><p>".$row["Information"]."</p></br><b>FEES:</b><p>INR ".$row["Fees"]."/year</p></br><b>GRADE:</b><p>".$row["Grade"]."</p></br><b>RANK:</b><p>".$row["Rank"]."</p></br><b>CUTOFF:</b><p>".$row[$select_branch]."%</p></br></div></br></br>');
            </script>";

          }
        }
      
   }  
}
?>