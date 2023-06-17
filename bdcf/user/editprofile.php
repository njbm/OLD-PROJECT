<?php

include ("../dbconnect/connection.php");
$db=new DBconnect();

$photo=mysqli_real_escape_string($db->link,isset($_POST["photo"])?$_POST["photo"]:'');
$name=mysqli_real_escape_string($db->link,isset($_POST["name"])?$_POST["name"]:'');
$age=mysqli_real_escape_string($db->link,isset($_POST["age"])?$_POST["age"]:'');
$weight=mysqli_real_escape_string($db->link,isset($_POST["weight"])?$_POST["weight"]:'');
$group=mysqli_real_escape_string($db->link,isset($_POST["group"])?$_POST["group"]:'');
$gender=mysqli_real_escape_string($db->link,isset($_POST["gender"])?$_POST["gender"]:'');
$address=mysqli_real_escape_string($db->link,isset($_POST["address"])?$_POST["address"]:'');
$contact=mysqli_real_escape_string($db->link,isset($_POST["contact"])?$_POST["contact"]:'');
$email=mysqli_real_escape_string($db->link,isset($_POST["email"])?$_POST["email"]:'');
$password=mysqli_real_escape_string($db->link,isset($_POST["password"])?$_POST["password"]:'');
$submit=mysqli_real_escape_string($db->link,isset($_POST["submit"])?$_POST["submit"]:'');

if (isset($_POST["update"]))
	{

$sql="REPLACE INTO `register`
       (`name`,`age`,`weight`,`group`,`gender`,`address`,`contact`,`email`,`password`)
            
VALUES 		
('$name','$age','$weight','$group','$gender','$address','$contact','$email','$password');";
	
	$db->link->query($sql);
	
	$message="<span style='color:GREEN;'>Update Successfully</span>";
	
	print "$message";
	}

else
	{
		//echo "Update Not Success..!!";
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bio Data</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
	 
<form method="post" enctype="multipart/form-data"> <!--.....Container.....-->		 
  <div class="container-fluid" style="background:#FFFFFF; color:#green;"><!--.1.-->
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#FFFFFF;">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
		
	
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:#fff;
	min-height:700px; margin-top:10px; margin-bottom:20px; text-align:center;
	font-family:Georgia, 'Times New Roman', Times, serif; color:green;"><!--Main Cntnr-->
				
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1>Bio-Data</h1>
		</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify;
		 font-size:24px;"> Photo </div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<input type="file" name="photo" class="btn btn-file" /> </div>	
</div>
			
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify; 
		font-size:24px;"> Full Name </div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<input type="text" name="name" class="form-control" placeholder="Your Name"
			 required/> </div>	
</div>
			
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify; 
		font-size:24px;"> Age </div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<input type="text" name="age" class="form-control" placeholder="Your Age"
			required/> 		
		</div>	
</div>
			
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify; 
		font-size:24px;"> weight </div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<input type="text" name="weight" class="form-control"
			 placeholder="Your Weight" required/> </div>	
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify;
		 font-size:24px;"> Blood Group </div>
				
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<select class="form-control" name="group" required>
			<option>A+</option> <option>A-</option> <option>B+</option> 
			<option>B-</option> <option>O+</option> <option>O-</option>
			<option>AB+</option> <option>AB-</option>
		</select>
	</div>	
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify;
	 font-size:24px;"> Gender </div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<label class="radio-inline"><input type="radio"  id="inlineradio1"
				name="gender" value="Male" required/>Male</label>
		<label class="radio-inline"><input type="radio"  id="inlineradio2"
				name="gender" value="Female" required/>Female</label>
	</div>	
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify;
		 font-size:24px;"> Address </div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<textarea class="form-control" placeholder="Your Address"
			style="max-width:300px;" name="address" required></textarea> </div>	
</div>
			
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify;
	 		font-size:24px;"> Contact No </div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<input type="text" name="contact" class="form-control" 
		placeholder="Your Contact Number" required/>
	</div>	
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
	 		font-size:24px;"> Password </div>
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<input type="password" name="password" class="form-control" 
		placeholder="Your Password" required/>
	</div>	
</div>
			
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
	<button type="submit" class="btn btn-success" name="update">Update</button>
	<button type="submit" class="btn btn-danger" name="delete">Delete</button>
</div>
		
		</div> <!--Main Cntnr-->
		
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
  	</div>	 
  </div><!--.1.-->
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="file:///H|/Responsive design/js/bootstrap.min.js"></script>
</body>
</html>


