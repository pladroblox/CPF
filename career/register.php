<?php
session_start();
if (isset($_SESSION["username"])) {
  header("location: index.php?user=".$_SESSION["username"]);
}

include_once "dbconx.php";

$nameError = $emailError = $genderError = $collegeError = $mobileError = $usernameError = $passwordError = "";

$name = $email = $gender = $college = $mobile = $username = $password = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST['name'])) {
    $nameError = "Name is required";
  }elseif (empty($_POST['email'])) {
    $emailError = "Email is required";
  }elseif(empty($_POST['gender'])) {
    $genderError = "Gender is required";
  }elseif (empty($_POST['college'])) {
    $collegeError = "College Name is required";
  }elseif (empty($_POST['mobile'])) {
    $mobileError = "Mobile Number is required";
  }elseif (empty($_POST['uname'])) {
    $usernameError = "Username is required";
  }elseif (empty($_POST['psw'])) {
    $passwordError = "Password is required";
  }else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $college = $_POST['college'];
    $mobile = $_POST['mobile'];
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $similarusersql = "SELECT Username FROM users WHERE Username='$username'";
    $similaruser = mysqli_query($dbcon, $similarusersql);
    $user_exists = mysqli_num_rows($similaruser);

    $similaremailsql = "SELECT Email FROM users WHERE Email='$email'";
    $similaremail = mysqli_query($dbcon, $similaremailsql);
    $email_exists = mysqli_num_rows($similaremail);

    if ($user_exists > 0) {
      echo "<script>alert('Username not available!!');</script>";
    } elseif ($email_exists > 0) {
      echo "<script>alert('Email already registered!!');</script>";
    } else {
      $sql = "INSERT into users (Name, Email, Gender, College, Mobile, Username, Password) VALUES ('$name', '$email', '$gender', '$college', '$mobile','$username', '$password')";

      $query = mysqli_query($dbcon, $sql);
      echo "<script>alert('Hello ".$name.", you have registered successfully!!');</script>";
    }

  }
}

?>

<!DOCTYPE html>
<html>
<title>CAREER-PATH-FINDER</title>
<h4><center>CAREER-PATH-FINDER</center></h4>
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
margin:110px;
height: 800px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 16px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 16px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 16px;
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
    padding: 10px;
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
  <li><a  href="CPFphp">Home</a></li>
  <li><a href="login.php">Log in</a></li>
  <li><a class="active" href="register.php" >Register</a></li>
<li><a href="college_predictor.php">College Predictor</a></li>
<li><a href="rank_rate.php">Rank & Rating</a></li>
<li><a href="trend.php">Trend</a></li>
  <li><a href="#about">About</a></li>
<li><a class="active" href="click_here.html ">What you want to become ?....click here</a></li>
</ul>


<h1 id="message"></h1>
<form action="" method="post" id="form">
  <div class="imgcontainer">
    <img src="images/login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">

<label><b>Name</b></label>
    <input type="text" placeholder="Enter your name" name="name" required><span><?php echo $nameError; ?></span>

<label><b>E-mail id</b></label>
    <input type="text" placeholder="Enter E-mail id" name="email" required><span><?php echo $emailError; ?></span>
    
   <b>Are you male or female?<b><br>
    <input type="radio" name="gender" value="male">Male<br>
    <input type="radio" name="gender" value="female">Female<span><?php echo $genderError; ?></span><br>

<label><b>Collage Name</b></label>
    <input type="text" placeholder="Enter name of college which you passout from" name="college" required><span><?php echo $collegeError; ?></span><br>

<label><b>Mobile No.</b></label><br> 
    <input type="number" placeholder="Enter mobile no" name="mobile" required><span><?php echo $mobileError; ?></span><br>


    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <span><?php echo $usernameError; ?></span>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <span><?php echo $passwordError; ?></span>

    <button type="submit">REGISTER</button>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">CANCEL</button>
  </div>
</form>


</body>
</html>

