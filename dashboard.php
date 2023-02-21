<?php
session_start();
if(isset($_SESSION["aid"]))
{
	
}
else
{
	echo "<script>alert('First Login Then Goto NaxtZone');window.location.href='../login.php'</script>";
}
?>

<html>
<head>
<link href="../css/bootstrap.min.css" rel="stylesheet"/>
<link href="../css/font-awesome.min.css" rel="stylesheet"/>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="co-sm-12" style="height:65px;width:100%;background:black;">
<h1 style="color:white;text-shadow:2px 2px 2px white;margin-left:20px;">Admin Zone</h1>
</div>
</div>
<div class="row">
<div class="col-sm-12" style="background:black;height:40px;width:100%;">
<a href="dashboard.php" style="text-decoration:none;color:white;font-size:20px;margin-left:10px;">Dashboard</a></li>
<a href="contact.php" style="text-decoration:none;color:white;font-size:20px;margin-left:15px;">Contact</a></li>
<a href="change.php" style="text-decoration:none;color:white;font-size:20px;margin-left:15px;">Change Password</a></li>
<a href="logout.php" style="text-decoration:none;color:white;font-size:20px;margin-left:15px;">Logout</a></li>
</div>
</div>

<div class="row">
<div class="col-sm-12" style="height:400px;width:100%;padding:0px;margin:0px;">
<img src="a9.jpg" style="height:400px;width:100%;"/>
</div>
</div>

	<div class="row" style="background:black;">
					<div class="col-sm-3" style="height:200px;width:100%;">
					<h3 style="color:white;">About</h3><br/>
					<p style="color:white;">This is a food house and the food of this restaurant is so tasty.Every type of food is here.You have to come and try.The restaurant is open 24 hour's.</p>					
					</div>
					<div class="col-sm-3"><h3 style="color:white;margin-left:20px;">Menus</h3>
					<ul>
					<li><a href="dashboard.php" style="color:white;text-decoration:none;">Dashboard</a></li>
					<li><a href="contact.php" style="color:white;text-decoration:none;">Contact</a></li>					
					<li><a href="change.php" style="color:white;text-decoration:none;">Change Password</a></li>					
					<li><a href="logout.php" style="color:white;text-decoration:none;">Logout</a></li>
					</ul>
					</div>
					<div class="col-sm-3">
					<h3 style="color:white;">Mail:</h3><br/>
					<a href="#" style="color:white;text-decoration:none;">Austinlalkhani2000@gmail.com</a>
					<p style="color:white;">9027664511</p>
					</div>
					<div class="col-sm-3">
					<div class="contact-gmap">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112827.55755389336!2d78.01863773153654!3d27.906233249712024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3974a48686459c8b%3A0x95d967276d323613!2sAligarh%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1603474448875!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
					</div>
					</div>











</div>
</body>
</html>