<?php
	
session_start ();
unset($_SESSION["log"]);

include '../dbconnect/connection.php';
$db=new dbconnect();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Letest Member's</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
<body> <!--body-->

<div class="panel panel-default">  <!-- main div -->
	<div class="panel-heading" style="text-align:center; font-size:28px; 
		font-family:Georgia, 'Times New Roman', Times, serif;">
  		Our Letest Member's
	</div>

  <!-- Table -->
  <table class="table" style=" text-align:center;">
  <tr style=" font-size:18px; color:#FF0033;">
		<td>Name</td>
		<td>Age</td>
		<td>Weight</td>
		<td>Group</td>
		<td>Gender</td>
		<td>Address</td>
		<td>Contact</td>
		<td>Email</td>
		<td>Profile</td>
  </tr>
<?php
	$sql="select * from `register`";
	$query=$db->link->query($sql);
	while($fetch=$query->fetch_array())
	{
?>
	<tr>
		<td><?php print $fetch[0];?></td>
		<td><?php print $fetch[1];?></td>
		<td><?php print $fetch[2];?></td>
		<td><?php print $fetch[3];?></td>
		<td><?php print $fetch[4];?></td>
		<td><?php print $fetch[5];?></td>
		<td><?php print $fetch[6];?></td>
		<td><?php print $fetch[7];?></td>
		<td><button type="submit" class="btn btn-success">View</button></td>
	</tr>
	<?php
	}
	?>
   
  </table>
</div>	 <!-- End Main div -->		

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>