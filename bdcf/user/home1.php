<?php

include '../dbconnect/connection.php';
$db=new dbconnect();

?>

<!DOCTYPE html>
<html>
<title>Give Blood Save life</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

<link href="css/bootstrap.min.css" rel="stylesheet">   
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
*{ padding:0; margin:0; list-style:none;}

	.lmn { width:100%; text-align:center;}
	.lmn li { list-style:none; display:block;  border:1px solid #CCCCCC; width:100%; margin-top:10px; border-radius:10px;}
	
	.lmn li a { display:block; color:#DD0119; background:#fff; border-radius:10px;
	 padding:10px 0px 10px 0px; text-decoration:none; width:100%; font-weight:bold; font-family:"Courier New", Courier, monospace; font-size:18px;}
	.lmn li a:hover {background:#000000; color:#CCFFFF; transition: all 0.5s ease-in;}
	.lmn li a:focus {background:#000000; color:#CCFFFF;}
#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

</style>
<body>

<div style="background:lightgray; color:lightblack; min-height:10px;">
<img src="img/nhsbt-logo-left.svg" style="height:60px; width:100px; margin-left:20px;"/>
</div>

<div style="background:#fff; color:#FFFFFF; min-height:10px;">
<img src="img/logo-give-blood.svg" style="height:70px; width:150px; margin-left:20px;"/>												
</div><!--...Top...-->

<!--...Nav Bar...-->
<nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php" style=" color:red;">BDCF</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<li class="active"><a href="#">Home<span class="sr-only"></span></a></li>
		<li><a href="userform.php">All Donner's List</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> About Blood <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Why Give Blood</a></li>
            <li><a href="#">Who Can Give Blood</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
		
		
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >The Donation Process <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
	
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="userprofile.php"><span class="glyphicon glyphicon-user">
	   	</span>  Profile</a></li>
       <li><a href="../user/home.php"><span class="glyphicon glyphicon-log-in">
	   	</span> Logout</a></li>
 
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--/Menu -->


<!-- Image Header -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#ccc">

<!-- Left Menu -->
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"  style=" min-height:300px; background:#FFFFFF; border:groove; margin-top:30px; border-radius:10px;">

<ul class="lmn">

	<li><a href="#"> Who We Are </a></li>
	<li><a href="#"> What We Do </a></li>
	<li><a href="#"> How We Help </a></li>
	<li><a href="#"> How You Can Help </a></li>
	<li><a href="#"> Where We Are </a></li>
 </ul>
</div>

<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" style="max-height:350px;  margin-top:30px; border-radius:10px; margin-bottom:30px;  ">
	<!-- Slideshow container -->
	<section id="slider">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  		<ol class="carousel-indicators">		
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
		 <div class="item active" style="border-radius:10px;">
      		<img src="img/s1.jpg" style="width:100%; height:300px; border-radius:10px;">
     		<div class="carousel-caption"></div>
      	 </div>
		<div class="item" style="border-radius:10px;">
        	<img src="img/s2.jpg" style="width:100%; height:300px; border-radius:10px;" >
        	<div class="carousel-caption"></div>
      	</div>
		
       	<div class="item" style="border-radius:10px;">
        	<img src="img/s3.jpg" style="width:100%; height:300px; border-radius:10px;">
        	<div class="carousel-caption"></div>
		</div>
    	</div>  
  		</div>
	</section>
</div>
</div> <!-- mid body -->

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>OUR TEAM</h2>
<p>Meet the team - our office rats:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="img/22.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Masud Bhuiyan</h3>
  <p>Support</p>
</div>

<div class="w3-quarter">
  <img src="img/22.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rebecca Flex</h3>
  <p>Support</p>
</div>

<div class="w3-quarter">
  <img src="img/22.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Jan Ringo</h3>
  <p>Boss man</p>
</div>

<div class="w3-quarter">
  <img src="img/22.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Kai Ringo</h3>
  <p>Fixer</p>
</div>

</div>
</div>
<div class="container-fluid" style="background:#fff; color:#000033;"> <!--container-->
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#FFF;
		min-height:300px; text-align:center; margin:0px;
		border-radius:10px; border:2px solid #00FF66;"> <!--full div-->
				
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="">
	<h1 style="padding-bottom:10px;
	font-family:Georgia, 'Times New Roman', Times, serif;">Our Letest Member's</h1>
</div>
						
				
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">

<input type="text" id="myInput" onKeyUp="myFunction()" placeholder="Search for Blood Group..">
	
<table class="table table-hover table-bordered table-striped" id="myTable">
	<tr style="color:#FF3333">
		<td>Name</td>
		<td>Group</td>
		<td>Gender</td>
		<td>Contact</td>
		<td>Email</td>
		<td>Profile</td>
	</tr>
	
	<?php
	$sql="select * from `register` LIMIT 10; ";
	$query=$db->link->query($sql);
	while($fetch=$query->fetch_array())
	{
	?>
	<tr>
		<td><?php print $fetch[0];?></td>
		<td><?php print $fetch[3];?></td>
		<td><?php print $fetch[4];?></td>
		<td><?php print $fetch[6];?></td>
		<td><?php print $fetch[7];?></td>
		<td><a href="fulldetails.php?details=<?php echo $fetch[7]; ?>"  class="btn btn-success">View</a></td>
	</tr>
	<?php
	}
	?>
	</table>
</div>
</div> <!--full div-->	
</div> <!--End userform-->

	
<!-- Work Row -->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#fff; min-height:350px;" class="img-responsive">

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="">
 <div class="container-fluid" style="text-align:justify; margin-top:50px;" >
	<a href="#" style=" color:#DD0119">
	<h2>Who can give blood?</h2>
	Most people can give blood, if they are fit and healthy. </a>
 </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="">
 <div class="container-fluid" style=" margin-top:50px;background:#F8FCF6;
	box-shadow:0 1px 3px rgba(0,0,0,.16); border:1px solid rgba(0,107,84,.3);
	min-height:240px;">
 
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"></div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style=" float:right;">	
	<img src="img/a1.png"  style=" padding-top:10px;"></div>	
	<h2>Become a Blood Doner</h2>
  	<h5>If you are completely new to blood donation</h5>
  <button class="btn btn-success" style="background:#0E6655; padding:10px 20px 10px 20px; margin-top:30px; margin-bottom:30px;">Register Now </button>
 
 </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="">
 <div class="container-fluid" style=" margin-top:50px;background:#fff;
	box-shadow:0 1px 3px rgba(0,0,0,.16); border:1px solid rgba(0,107,84,.3);
	min-height:240px;">

<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"></div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style=" float:right;">	
	<img src="img/a2.png"  style=" padding-top:10px;"></div> 
  	<h2>Already a  donor?</h2>
  	<h5>Sign up for an online account to manage appointments </h5>
  <button class="btn btn-info" style="background:#0E6655; padding:10px 20px 10px 20px; 	
  margin-top:30px; margin-bottom:30px;">Create A Account </button>
  
 </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="">
 <div class="container-fluid" style=" margin-top:50px;background:#D6EAF8;
	box-shadow:0 1px 3px rgba(0,0,0,.16); border:1px solid rgba(0,107,84,.3);	 	
	min-height:240px;">

<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"></div>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style=" float:right;">	
	<img src="img/a3.png"  style=" padding-top:10px;"></div> 
	<h2>Where To  Donate ?</h2>
  	<input type="text" class="form-control" placeholder="Town/City or Postcode">
  <button class="btn btn-info" style="background:; padding:10px 20px 10px 20px; 
  margin-top:30px;margin-bottom:30px;">Search </button>

 </div>
</div>

<!-- Container -->
</div>



<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a cup of coffee, or whatever.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>    Feni,Bangladesh</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>   +880 1871344252</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>   info@sbit.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank" style="margin-top:20px;">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">SBIT</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>


</body>
</html>