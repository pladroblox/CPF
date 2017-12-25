<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$car=$_POST["career"];
mysql_connect("localhost","root","");
mysql_select_db("cpf");
$res=mysql_query("select * from best where car='$car'");
while ($row=mysql_fetch_assoc($res,MYSQL_ASSOC)) 
{
