<?php 
if(!isset($_POST['submit'])) {
    exit('hayooo mau ngapain');
}
$username = htmlspecialchars($_POST['username']);
//$password = MD5($_POST['password']);
$password = $_POST['password'];
include('cn.php'); 
$check_query = mysql_query("select id from user where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['id'];
    echo 'hi '.$username.', ke <a href="my.php"> Home </a><br />';
    echo 'atau <a href="logout.php">Logout</a><br />';
    exit;
} else {
    exit('autentifikasi gagal, <a href="javascript:history.back(-1);">login</a> lagi');
}


?>