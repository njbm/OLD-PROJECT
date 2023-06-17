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

<body>

<table class="table table-hover table-bordered" id="myTable" style="text-align:center; max-width:500px; margin:20px auto; font-size:18px; font-family:Georgia, 'Times New Roman', Times, serif; border:2px solid #00FF66;">

	
	<?php
	$email=$_GET["details"];
	$sql="select * from `register` where email='$email'";
	$query=$db->link->query($sql);
	$fetch=$query->fetch_array()
	
	?>
	<tr> <td colspan="3"><img src="../img/<?php echo $fetch[7];?>.jpg"
	style="height:100px;"><br /><?php echo $fetch[0] ?> </td> </tr>
	<tr> <td>Name</td> <td>:</td> <td><?php echo $fetch[0]?></td> </tr>
	<tr> <td>Age</td> <td>:</td> <td><?php echo $fetch[1]?>    Years</td> </tr>
	<tr> <td>weight</td> <td>:</td> <td><?php echo $fetch[2]?>    Kg</td> </tr>
	<tr> <td>Blood Group</td> <td>:</td> <td><?php echo $fetch[3]?></td> </tr>
	<tr> <td>Gender</td> <td>:</td> <td><?php echo $fetch[4]?></td> </tr>
	<tr> <td>Contact</td> <td>:</td> <td><?php echo $fetch[6]?></td> </tr>
	<tr> <td>E-mail</td> <td>:</td> <td><?php echo $fetch[7]?></td> </tr>
	<tr> <td>Address</td> <td>:</td> <td><?php echo $fetch[5]?></td> </tr>
	<tr> <td colspan="3"><a href="#" class="btn btn-success" style="height:100%; width:100%;">Request For Blood</a> </td> </tr>		

	</table>
	</body>
</html>