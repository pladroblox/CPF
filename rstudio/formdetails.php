<?php
define('DB_HOST','localhost');
define('DB_NAME','form');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die ("failed to connect to mysql".mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die ("failed to connect to mysql".mysql_error());

$name = $_POST['name'];
$age = $_POST['age'];
$marks = $_POST['marks'];


exec('"C:\Program Files\R\R-3.3.3\bin\Rscript" phptoform.r "'.$name.'" "'.$age.'" "'.$marks.'"');



$query = "SELECT * FROM site";
$result = mysql_query($query);
while ($rows = mysql_fetch_array($result)) { 
   $name = $rows["name"];
 $age = $rows["age"];
$marks = $rows["marks"];
  
echo " $name ";
echo "   $age   ";
echo "   $marks  <br> ";


}

?>
<html>
<head>
<body>
<img src="temp.png" width="1050" height="663" alt="college_predictor"><br>;
</body>
</head>
</html>
