<?php  
 $conn = mysql_connect("127.0.0.1","root","<password>") or die("Error".mysql_error());
 mysql_select_db("test",$conn) or die("Error".mysql_error());
 mysql_query("set names utf8");
?>
