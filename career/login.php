<?php
session_start();
if (isset($_SESSION["username"])) {
  header("location: index.php?user=".$_SESSION["username"]);
}

include_once "dbconx.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $username = $_POST['uname'];
  $password = $_POST['psw'];

    $sql = "SELECT ID, Username, Password FROM users WHERE Username='$username' LIMIT 1";
    $query = mysql_query($dbcon, $sql);
    $row = mysql_fetch_row($query);
    $db_id = $row[0];
    $db_username = $row[1];
    $db_password = $row[2];
    if ($db_username == "") {
      echo "<script>alert('User does not exist!');</script>";
      exit(); 
    } elseif (strcmp($password, $db_password) != 0) {
      echo "<script>alert('Password does not match!');</script>";
      exit();
    } else {
      $_SESSION["username"] = $db_username;
      $_SESSION["password"] = $db_password;
      setcookie("username", $db_username, strtotime("+30 days"), "/", "", "", TRUE);
      setcookie("password", $db_password, strtotime("+30 days"), "/", "", "", TRUE);
      header("location: index.php?user=".$_SESSION["username"]);
      exit();
    }
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
</head>

<link rel="stylesheet" href="b.css">
<style>
form {
    border: 3px solid #f1f1f1;
width: 1200px;
margin:105px;
height: 650px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 25%;
    border-radius: 0%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<ul>
  <li><a  href="CPF.php">Home</a></li>
  <li><a class="active" href="login.php">Log in</a></li>
  <li><a href="register.php" >Register</a></li>
<li><a href="college_predictor.php">College Predictor</a></li>
<li><a href="rank_rate.php">Rank & Rating</a></li>
<li><a href="trend.php">Trend</a></li>
  <li><a href="#about">About</a></li>
<li><a class="active" href="click_here.html ">What you want to become ?....click here</a></li>
</ul>



<form action="" method="POST">
  <div class="imgcontainer">
    <img src="images/login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>

