<?php

include("../dbconnect/connection.php");

$db=new DBConnect();

echo $db->error;

$fullName=mysqli_real_escape_string($db->link,isset($_POST["fullname"])?$_POST["fullname"]:'');

$username=mysqli_real_escape_string($db->link,isset($_POST["username"])?$_POST["username"]:'');

$password=mysqli_real_escape_string($db->link,isset($_POST["password"])?$_POST["password"]:'');

$phone=mysqli_real_escape_string($db->link,isset($_POST["phone"])?$_POST["phone"]:'');
	
		
		
		if(isset($_POST["signup"]))
		{
			$sql="INSERT INTO `signup`(`fullname`,`username`,`password`,`phone`)
			 	  values('$fullName','$username','$password','$phone')";
				  
			$db->link->query($sql);
				
				print "<script>location='../login/login.php'</script>";	
		}
		else
			{
				//echo "Signn Up Not Success..!!";
			}
		
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New User</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
  </head>
  <body>
  
<!--................................container...................................-->
<form method="post" action="">			
<div class="container-fluid" style="color:#000000; text-align:justify;">
		
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url(amazon.jp);">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
		
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:#FFFFFF;  min-height:300px; text-align:center; border-radius:10px; border:outset; border-color:green; margin:100px 0px 0px 0px;">
				
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h1 style="font-family:Georgia, 'Times New Roman', Times, serif;">Sign Up Panel</h1></div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center; padding-top:20px;">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p style="font-size:24px; text-align:center;">FullName</p></div>
						
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input type="text" name="fullName" class="form-control" placeholder="Fullname"></div>
						</div>
				
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center; padding-top:20px;">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p style="font-size:24px; text-align:center;">UserName</p></div>
						
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input type="text" name="username" class="form-control" placeholder="Username"></div>
						</div>
						
						
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center; padding-top:20px;">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p style="font-size:24px; text-align:center;">Password</p></div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p><input type="password" placeholder="Password" name="password" class="form-control"></p></div>
						</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center; padding-top:20px;">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p style="font-size:24px; text-align:center;">Phone</p></div>
						
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input type="text" name="phone" class="form-control" placeholder="Phone Number"></div>
						</div>					
												
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="">
					<p style="margin-top:20px; margin-bottom:20px;">
			<button type="submit" class="btn btn-success" name="signup">Sign Up</button></p>
			
				</div>
			</div>
		
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> </div>
		
	</div>

		<!--.....................End cntainer.......................-->
	</div>
	</form>	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>