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


<script type="text/javascript">

function validateForm()
{

var a=document.forms["reg"]["name"].value;

var b=document.forms["reg"]["email"].value;

var c=document.forms["reg"]["clg"].value;

var d=document.forms["reg"]["uname"].value;

var e=document.forms["reg"]["password"].value;


if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))

  {
 alert("All Field must be filled out");

  return false;

  }

if (a==null || a=="")

  {

  alert(" name must be filled out");

  return false;

  }

if (b==null || b=="")

  {

  alert("email id must be filled out");

  return false;

  }

if (c==null || c=="")

  {

  alert("college name must be filled out");

  return false;

  }

if (d==null || d=="")

  {

  alert("user id must be filled out");

  return false;

  }

if (e==null || e=="")

  {

  alert("password must be filled out");

  return false;

  }

}
</script>
</head>

<link rel="stylesheet" href="b.css">
<style>
form {
    border: 0px solid #f1f1f1;
width: 1000px;
margin:10px;
height: 500px;
position:center;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 16px;
    margin: 8px 0;
    display: inline-block;
    border: 3px solid #ccc;
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
    padding: 10px 16px;
    background-color: #f44336;
}

.search_categories{
  font-size: 19px;
  padding: 10px 8px 10px 14px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 6px;
  overflow: hidden;
  position: relative;
}

.search_categories .select{
  width: 80%;

}

.search_categories .select select{
  background: transparent;
  line-height: 1;
  border: 0;
  padding: 0;
  border-radius: 0;
  width: 120%;
  position: relative;
  z-index: 10;
  font-size: 1em;
}

.container {
    padding: 10px;
   width: 50%;
position:center;
}

span.psw {
    float: right;
    padding-top: 10px;
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

h1 {
    font-size: 40px;
}

</style>


<h1><center><p class="log"><b>REGISTER</b></p></center></h1>

<form name="reg" action="code.php" onsubmit="return validateForm()" method="post">

  
  
<div class="container">

<p class="log"><b>Profile Info:</b></p>
   <p class="log_text"><b><input type="text" placeholder="Name:     eg. john" name="name" pattern="[A-Za-z]+" title="Use only letters"> </b></p>

 <p class="log_text"><b>    <input type="text" placeholder="Email id:    eg. 123@gmail.com" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="----@---.----"></b></p>
    
<p class="log_text"><b>     <input type="text" placeholder="College Name" name="clg"  ></b></p>

 <p class="log"><b>Account Info:</b></p>  
 <p class="log_text"><b>    <input type="text" placeholder="User id" name="uname" " maxlength="10"></b></p>

 <p class="log_text"><b>    <input type="password" placeholder="Password    *length should be greater than 5*" name="password" pattern="^\S{6,}$" title="password length should be 6" ></b></p>

    <button type="submit" value="Submit"><p class="log_text"><b> register</b></p>
</button>
    
   
</div>

</form>

</body>
</html>

