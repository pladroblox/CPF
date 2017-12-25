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
<li><a class="active" href="CPF.php"><p class="title">Home</p></a></li>
  <li><a href="college_predictor.php"><p class="title">College Predictor</p></a></li>
<li><a href="rank_rate.php"><p class="title">Rank & Rating</p></a></li>
<li><a href="trend.php"><p class="title">Trend</p></a></li>
  <li><a href="#about"><p class="title">About</p></a></li>
<li><a class="active1"href="click_here.php"><p class="title">Career</p></a></li>
<li><a href=""><p class="title">Admin</p></a></li>
<li><a class="active1"href="signout.php"><p class="title">SIGNOUT</p></a></li> 
</ul>





<link rel="stylesheet" href="b.css">
<style>
form {
    border: 3px solid ;
width: 800px;
margin-right:0%;
margin-left:23%;
height: 350px;
position:center;
}



input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid #4CAF50;
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



.container {
    padding: 10px;
   width: 50%;
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

<br>
<br>
<center><p class="log_text"><b> Admin LOG IN</b></p></center>
<form action="" method="post">
  


  <div class="container">
  
  <p class="log_text"><b>  <input type="text" placeholder="User id" name="name" required></b></p>

    <p class="log_text"><b> <input type="password" placeholder="Password" name="pwd" required></b></p>
        
<button type='submit' name='submit' value='Submit'><p class="log"><b>Login</b></p></button>
    
  </div>

  
    

</form>
</div>

 

<?php
 session_start();
 if(isset($_POST['submit']))
 {
  mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('clg_db') or die(mysql_error());
  $name=$_POST['name'];
  $pwd=$_POST['pwd'];
  if($name!=''&&$pwd!='')
  {
    $query=mysql_query("select * from admin where uname='".$name."' and password='".$pwd."'") or die(mysql_error());
    $res=mysql_fetch_row($query);
    if($res)
    {
     $_SESSION['name']=$name;
     header('location:insert_data.php');
    }
    else
    {
     echo 'You entered username or password is incorrect';
    }
  }
  else
  {
   echo'Enter both username and password';
  }
 }
 ?>


</body>
</html>