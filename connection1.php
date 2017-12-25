<?php
if(! mysql_connect("localhost","root",""))
{
	die(mysql_error());
}
if(! mysql_select_db("college"))
{
	die(mysql_error());
}
?>