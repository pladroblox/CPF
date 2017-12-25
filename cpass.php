<!DOCTYPE html>
<html>
<title>CAREER-PATH-FINDER</title>

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
<style>
form {
    border: 0px solid ;
width: 800px;
margin-right:0%;
margin-left:23%;
height: 300px;
position:center;
}



input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid 	#FFFFFF;
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


buttonr {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}

.cancelbtn {
    width: auto;
  padding: 10px 18px;
    background-color: #f44336;

}



.container {
    padding: 10px;
   width: 50%;
}
.container1 {
    padding: 10px;
   width: 26%;
margin-left:36%;
}
span.psw {
    float: right;
    padding-top: 10px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
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

 

<style>
body{
background: url("back.jpg") no-repeat center ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position:0px 0px;
 opacity: 10;

}
</style>

<br>
<br>
<center><p class="log"><b>PASSWORD RECOVERY</b></p></center>
<form action="" method="post">
  


  <div class="container">
  
  <p class="log_text"><b>  <input type="text" placeholder="User id" name="uid" ></b></p>
  
           
    <p class="log_text"><b>  <input type="password" placeholder="set password" name="pass" ></b></p>

<button type='submit' name='submit' value='Submit'><p class="log"><b>done</b></p></button>
</div> 
</form> 
<div class="container1">
 <button name='submit' value='Submit'><a href="login.php"><p class="log"><b>Go to Login Page</b></p></button>
</div> 
<br>
<br>
<?php
 
 if(isset($_POST['submit']))
 {
  mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('clg_db') or die(mysql_error());
  $name=$_POST['uid'];
  $pwd=$_POST['pass'];

if($name!=''&&$pwd!='')
  {
mysql_query("UPDATE member SET password='$pwd' WHERE uname='$name'");
 
echo "<p><center><h3>Password has been change succesfully....</h3></center></p>";
   }
else
{
   
echo "<p><center><h3>Enter both username and password</h3></center></p>";
  } 

}


 ?>