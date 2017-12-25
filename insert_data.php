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

<script type="text/javascript">

function validateForm()
{

var a=document.forms["reg"]["name"].value;

var b=document.forms["reg"]["info"].value;

var c=document.forms["reg"]["fees"].value;

var d=document.forms["reg"]["grade"].value;

var e=document.forms["reg"]["rank"].value;




if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))

  {
 alert("All Field must be filled out");

  return false;

  }

if (a==null || a=="")

  {

  alert(" college name must be filled out");

  return false;

  }

if (b==null || b=="")

  {

  alert("college info must be filled out");

  return false;

  }

if (c==null || c=="")

  {

  alert("college fees must be filled out");

  return false;

  }

if (d==null || d=="")

  {

  alert("college grade must be filled out");

  return false;

  }

if (e==null || e=="")

  {

  alert("college rank must  be filled out");

  return false;

  }




}
</script>








</head>
<link rel="stylesheet" href="b.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.mySlides {display:none;}
</style>

<body>
<ul>
<li><a class="active" href="admin_CPF.php"><p class="title">Home</p></a></li>
  <li><a href="a_college_predictor.php"><p class="title">College Predictor</p></a></li>
<li><a href="a_rank_rate.php"><p class="title">Rank & Rating</p></a></li>
<li><a href="newgraph.php"><p class="title">Trend</p></a></li>
<li><a href=""><p class="title">ADD college</p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>

<li><a class="active1"href="signout.php"><p class="title">SIGNOUT</p></a></li> 
</ul>





<link rel="stylesheet" href="b.css">
<style>
form {
    border: 3px solid ;
width: 800px;
margin-right:0%;
margin-left:23%;
height: 687px;
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


}
</style>
<body>

<h1><center><p class="log"><b>REGISTER</b></p></center></h1>

<form name="reg" action="insert_code.php" onsubmit="return validateForm()" method="post">

  
  
<div class="container">


<p class="log_text"><b><input type="text" placeholder="college name" name="name" pattern="[A-Za-z]+" title="Use only letters"> </b></p> 

<p class="log_text"><b>    <input type="text" placeholder="college info" name="info"  ></b></p>


<div class="select">
       <select name="city" id="search_categories">
          <option value="mumbai" selected="selected"> <p class="log_text"><b>MUMBAI</b></p></option>
          <option value="pune"> <p class="log_text"><b>PUNE</b></p></option>
        </select>
</div>

    
<p class="log_text"><b>     <input type="text" placeholder="college fees" name="fees"  ></b></p>
<table>   
 <tr>  <td><p class="log_text"><b>    <input type="text" placeholder="rank" name="rank"  ></b></p></td>
<td><p class="log_text"><b>    <input type="text" placeholder="grade" name="grade"  ></b></p></td>
</tr>


<tr>  <td><p class="log_text"><b>    <input type="text" placeholder="%.  extc" name="extc"  ></b></p></td>
<td><p class="log_text"><b>    <input type="text" placeholder="%.  ce" name="ce"  ></b></p></td>
<td><p class="log_text"><b>    <input type="text" placeholder="%.  it" name="it"  ></b></p></td>
</tr>
<tr>  <td><p class="log_text"><b>    <input type="text" placeholder="%.  mech" name="mech"  ></b></p></td>
<td><p class="log_text"><b>    <input type="text" placeholder="%. civil" name="civil"  ></b></p></td>
<td><p class="log_text"><b>    <input type="text" placeholder="%.automobile" name="au"  ></b></p></td>
</tr>
<tr>  <td><p class="log_text"><b>    <input type="text" placeholder="%.MBDS" name="mbds"  ></b></p></td>
<td><p class="log_text"><b>    <input type="text" placeholder="%.BAMS" name="bams"  ></b></p></td>
<td><p class="log_text"><b>    <input type="text" placeholder="%.MBBS  " name="mbbs"  ></b></p></td>
</tr>
</table>     
    <button type="submit" value="Submit"><p class="log_text"><b> INSERT</b></p>
</button>
    
   
  </div>


</form>

</body>
</html>
</body>
</html>