<?php
session_start ();
unset($_SESSION["log"]);
include ("../dbconnect/connection.php");
$db=new DBconnect();

$email=mysqli_real_escape_string($db->link,isset($_POST["email"])?$_POST["email"]:'');
$password=mysqli_real_escape_string($db->link,isset($_POST["password"])?$_POST["password"]:'');
$newpsw=mysqli_real_escape_string($db->link,isset($_POST["newpsw"])?$_POST["newpsw"]:'');

$submit=mysqli_real_escape_string($db->link,isset($_POST["submit"])?$_POST["submit"]:'');

if (isset($_POST["cp"]))
	{
	$sql="SELECT * FROM register WHERE email='$email'";
	$query=$db->link->query($sql);
		if ($query)
		{
			$fetch_admin=$query->fetch_array();
			
			if ($fetch_admin[7]==$email && $fetch_admin[8]==$password)
			{
			$_SESSION["log"]=1;
						
			$sqll="REPLACE INTO `register` (`email`,`password`)
			VALUES	('$email','$newpsw');";
			$db->link->query($sqll);
	
			$message="<span style='color:GREEN;'>Password Successfully Changed</span>";
			print "$message";
			}
			else
			{
			$message2="<span style='color:red;'>Password Not Change..!! May be Your
			Email Or Your Current Password Is Incorrect</span>";
				print "$message2";
			}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Change Password</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
	 
<form method="post" enctype="multipart/form-data">		 
  <div class="container-fluid" style="background:#FFFFFF; color:#green;"><!--.1.-->
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#FFFFFF;">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
		
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:#fff;
		min-height:700px; margin-top:10px; margin-bottom:20px; text-align:center;
		font-family:Georgia, 'Times New Roman', Times, serif; color:green;"><!--Main-->
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1>Change Your Password</h1>
		</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify;
	 		font-size:24px;"> Your Email </div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<input type="email" name="email" class="form-control" placeholder="Your Email"
		 required/>
	</div>	
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify;
	 		font-size:24px;">Current Password </div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<input type="password" name="password" class="form-control" 
		placeholder="Your Current Password" required/>
	</div>	
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify;
	 		font-size:24px;">New Password </div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<input type="password" name="newpsw" class="form-control" 
		placeholder="Your Password" required/>
	</div>	
</div>
			
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
	<button type="submit" class="btn btn-success" name="cp">Change Password</button>
</div>
		
		</div> <!--Main-->
		
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
  	</div>	 
  </div><!--.1.-->
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="file:///H|/Responsive design/js/bootstrap.min.js"></script>
</body>
</html>
