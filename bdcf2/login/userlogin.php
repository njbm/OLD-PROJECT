<?php
	
session_start ();
unset($_SESSION["log"]);

include("../dbconnect/connection.php");
$db=new DBConnect();

$email=mysqli_real_escape_string($db->link,isset($_POST["email"])?$_POST["email"]:'');

$password=mysqli_real_escape_string($db->link,isset($_POST["password"])?$_POST["password"]:'');


if(isset($_REQUEST["login"]))
{
	if (!empty($email) && !empty($password)) 
	{
	$sql="SELECT * FROM register WHERE email='$email' AND password='$password'";
	$query=$db->link->query($sql);
		if ($query)
		{
			$fetch_admin=$query->fetch_array();
			
			if ($fetch_admin[7]==$email && $fetch_admin[8]==$password)
			{
				$_SESSION["log"]=1;
    			echo "<script>location='../user/home1.php'</script>";
			}
			else
			{
			print "<h3>Invalid Username Or Password..!!</h3>";
			}
		}

	}
	else
		{
			print "<h3>Invalid Username Or Password..!!</h3>";
		}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogIn Pannel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
<body> <!--body-->
<form method="post" enctype="multipart/form-data">
			
<div class="container-fluid" style="background:#fff; color:#000033;"> <!--container-->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style=""> <!--full div-->
	
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
		
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:#FFF;
		min-height:300px; text-align:center; margin:80px 50px 170px 0px; border-radius:10px; border:2px solid #00FF66;"> <!--main div-->
				
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h1 style="padding-bottom:40px;
		font-family:Georgia, 'Times New Roman', Times, serif; ">LogIn Panel</h1>
</div>
						
				
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;
	 padding-top:20px;">
	 
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p style="font-size:24px;
	 text-align:center;">E - mail</p></div>
						
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input type="email"
	 name="email" class="form-control" placeholder="Your Email"> </div>
</div>
						
						
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;
		 padding-top:20px;">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p style="font-size:24px;
	 text-align:center;">Password</p></div>
						
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p><input type="password"
	 placeholder="Password" name="password" class="form-control"></p></div>
</div>
						
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
			<label style="padding-top:10px;">
				<input type="checkbox" checked="checked" name="remember"> Remember me
		  	</label>
		</div>
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
</div>
						
						
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="">	
	<button type="submit" class="btn btn-success" name="login" style="margin-top:20px; 
		margin-bottom:20px;">Log In</button>
</div>
			

</div> <!--main div-->
		
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> </div>
		
	</div> <!--full div-->	
</div> <!--End container-->
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
	</form>
  </body>
</html>