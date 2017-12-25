


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
width: 1000px;
margin-right:0%;
margin-left:23%;
height: 100px;
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

 

<style>
body{
background: url("last.jpg") no-repeat center ; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position:0px 0px;
 opacity: 10;

}
</style>
<?php     
          session_start();
          $name=$_SESSION['name']; 
 ?>
<br>
<br>
<center><p class="log"><b>WELCOME..... <?php  echo''. $name.'<br>';?>    </b></p></center>
<center><p class="log"><b>We are here to serve you...</b></p></center>
<form action="" method="post">
  
    
  <div class="container">
  
 

        

   
  </div>
<button class="buttonwel"><a href="admin_CPF.php"><p class="log"><b>Go to Home page</b></p></button>
  <div class="container" style="background-color:"#ed6b2f">
    <button type="button" class="cancelbtn"><a href="signout.php"><p class="log"><b>SIGNOUT</b></p></button>
    
</form>
</div>

 



 </body>
 </html> 


</body>
</html>

