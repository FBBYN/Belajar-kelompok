<?php
session_start(); 
if(!isset($_SESSION['userid'])){
    header("Location:login.html");
    exit();
} 
include('cn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$user_query = mysql_query("select * from user where userid = '$userid' limit 1");
$row = mysql_fetch_array($user_query); 
?>
<html>
<title>Dashboard</title>
<link rel="icon" href="img/1-512.png">
<link href="/css/bootstrap.min.css" rel="stylesheet"> 
<link href="/css/dashboard.css" rel="stylesheet"> 
<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="img/1-512.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?php echo $username?>
					</div>
					<div class="profile-usertitle-job">
						<?php echo $userid ?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<!-- <div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<a href="logout.php"><button type="button" class="btn btn-danger btn-sm">LOGOUT</button></a>
				</div> -->
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-ok"></i>
							Tasks </a>
						</li>
						<li>
							<a href="logout.php">
							<i class="glyphicon glyphicon-log-out "></i>
							Logout </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <h3>Bello <?php echo $username ?></h3>
			   <div>
			   <?php include 'link.php' ?>
			   </div> 
            </div>
		</div>
	</div>
</div>  
</html>