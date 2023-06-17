<?php
	
session_start ();
unset($_SESSION["log"]);

include("../dbconnect/connection.php");

$db=new DBConnect();



$username=mysqli_real_escape_string($db->link,isset($_POST["username"])?$_POST["username"]:'');

$password=mysqli_real_escape_string($db->link,isset($_POST["password"])?$_POST["password"]:'');



if(isset($_REQUEST["login"]))
{
	if (!empty($username) && !empty($password)) 
	{
		$sql="SELECT * FROM signup WHERE username='$username' AND password='$password'";
  		$query=$db->link->query($sql);

		if ($query)
		{
			$fetch_admin=$query->fetch_array();

			if ($fetch_admin[0]==$username && $fetch_admin[1]==$password)
			{
    			$_SESSION["log"]=1;
   				echo "<script>location='../Admin_panel/index.php'</script>";
			}
		}
	}

	else
	{
		print "<h3>Invalid Username Or Password..!!</h3>";
		print "<h1> Please <a href='../Signup/signup.php' class='btn btn-danger'> Sign Up</a> Or <a href='../User/home.php' class='btn btn-primary'>Back Home</a></h1>";
		
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
	<body>
    
	<!--................................body....................................-->
<form method="post" action="">			
<div class="container-fluid" style=" color:#FFFFFF;">
		
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-image:url(amazon.jp); ">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
		
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:#000099;  min-height:300px; text-align:center;border-radius:10px; margin:100px 0px 0px 0px;">
				
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><h1 style="font-family:Georgia, 'Times New Roman', Times, serif;">LogIn Panel</h1></div>
		
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center; padding-top:20px;">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p style="font-size:24px; text-align:center;">UserName</p></div>
						
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><input type="text" name="username" class="form-control" placeholder="Username"></div>
						</div>
						
						
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center; padding-top:20px;">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p style="font-size:24px; text-align:center;">Password</p></div>
						
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><p><input type="password" placeholder="Password" name="password" class="form-control"></p></div>
						</div>
						
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<label style="padding-top:10px;">
							<input type="checkbox" name="remember"> Remember me
		  					</label>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>		
						</div>		
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="">
					<p style="margin-top:20px; margin-bottom:20px;">
			<button type="submit" class="btn btn-primary" name="login">Login</button>
					</p>
			</div>
			
		</div>	
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> </div>
	</div>

		<!--.........................End cntainer.............................-->
	</div>
	</form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


