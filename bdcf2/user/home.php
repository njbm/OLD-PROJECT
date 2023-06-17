<?php
session_start ();
unset($_SESSION["log"]);

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
      	<title>BDCF</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">  
</head>

<body>
 <!--Start-main-wrapper-->

	<?php include("nav.php"); ?>
	
	<?php include("mid.php"); ?>
	
	<?php include("userform.php"); ?>
	
	<?php include("mid1.php"); ?>
	
	<?php include("footer.php"); ?>
 <!--End-main-wrapper-->
        
</body>
</html>