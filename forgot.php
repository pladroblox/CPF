


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
  
  <p class="log_text"><b>  <input type="text" placeholder="User id" name="name" ></b></p>
  
            
<button type='submit' name='submit' value='Submit'><p class="log"><b>Know your recovery question</b></p></button>
</div> 
</form> 
  

<?php
 session_start();
 if(isset($_POST['submit']))
 {
  mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('clg_db') or die(mysql_error());
  $name=$_POST["name"];
 
 
if($name!='')
  {
    $query=mysql_query("select que from member where uname='".$name."') or die(mysql_error());
    $res=mysql_fetch_row($query);
    if($res)
    {


 while($results = mysql_fetch_array($query)){
         
              
            }


    // $query=$name;
     
    }
    else
    {
       echo 'You entered username or email id is incorrect ';
     
    }
  }
  else
  {
   echo'Enter username or email id';
  }
}


 ?>

<form action="" method="post">
  


  <div class="container">
  
  
    <p class="log_text"><b>  <input type="text" placeholder="your recovery question answer" name="ans" ></b></p>

<button type='submit' name='sub' value='Submit'><p class="log"><b>Check my answer</b></p></button>
</div> 
</form> 


<?php

 if(isset($_POST['sub']))
 {
  mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('clg_db') or die(mysql_error());
  $name=$_POST['ans'];

 
if($name!='')
  {
    $query=mysql_query("select * from member where ans='".$name."' ") or die(mysql_error());
    $res=mysql_fetch_row($query);
    if($res)
    {
   
     header('location:cpass.php');
    }
    else
    {
       echo 'sorry,your answer is wrong';
     
    }
  }
  else
  {
   echo'Enter your answer';
  }
}


 ?>
 </body>
 </html> 


