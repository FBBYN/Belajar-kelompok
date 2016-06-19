<?php  
 $conn = mysql_connect("127.0.0.1","root","mitra") or die("Error bro!".mysql_error());
 mysql_select_db("test",$conn) or die("Error  bro!".mysql_error());
 mysql_query("set names utf8");
?>