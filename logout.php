<?php
 session_start(); 
if(isset($_SESSION['userid'])){
	unset($_SESSION['userid']);
	unset($_SESSION['username']);
	echo '<a href="login.html">lOGIN</a>';
	exit;
} 
else{
    header("Location:login.html");
    exit();
}
?>