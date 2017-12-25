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

    <label><b> Show rank of colleges :</b></label>
    <select id="select_rank" name="branch">
      <option value="2">Top 2 colleges</option>
      <option value="3">Top 3 colleges</option>
      <option value="4">Top 4 colleges</option>
      <option value="5">Top 5 colleges</option>
      <option value="6">Top 6 colleges</option>
      <option value="10">Top 10</option>
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
   
    $select_rank = $_POST['branch'];

      $sql = "SELECT colleges.Name, colleges.Information, colleges.Fees, colleges.Grade, colleges.Rank, colleges.Rank FROM colleges ORDER BY colleges.Rank ASC LIMIT $select_rank";
      $query = mysqli_query($dbcon, $sql);

      if (mysqli_num_rows($query) == 0) {
          echo "<script>$('#result_area').append('<div id=\"card\"><center><img src=\"images/sad.jpg\" width=\"100px\" height=\"100px\" /></br><b><h3>Oops! No results found.<h3></b></center></div>');
        </script>";
        }else {
          while ($row = mysqli_fetch_assoc($query)) {
            echo "<script>$('#result_area').append('<div id=\"card\"><b><h3>".$row["Name"]."</h3></b></br><b>INFORMATION:</b><p>".$row["Information"]."</p></br><b>FEES:</b><p>INR ".$row["Fees"]."/year</p></br><b>RANK:</b><p>".$row["Rank"]."</p></br></div></br></br>');
            </script>";

          }
        }
      
   }  

?>