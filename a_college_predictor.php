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

</head>
<style>
input[type=text], select {
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

<body>
<ul>
  <li><a  href="admin_CPF.php"><p class="title">Home</p></a></li>
<li><a class="active" href="a_college_predictor.php"><p class="title">College Predictor</p></a></li>
<li><a href="a_rank_rate.php"><p class="title">Rank & Rating</p></a></li>
<li><a href="newgraph.php"><p class="title">Trend</p></a></li>
<li><a href="insert_data.php"><p class="title">ADD college</p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>
<li><a href=""><p class="title"></p></a></li>

<li><a class="active1"href="signout.php"><p class="title">SIGNOUT</p></a></li>
</ul>
<br>
<br>

<div>
  <form action="a_search.php" method="POST">

    <label><b> Enter your percentage :</b></label>
    <input type="text" placeholder="e.g. 80" name="query" required>
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
   <input type="submit" value="search">
  </div>

<link rel="stylesheet" href="b.css">
</body>
</html>