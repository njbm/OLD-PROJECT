<?php
include '../dbconnect/connection.php';
$db=new dbconnect();
$delete_message ="";

if (isset($_GET["delete"])) {
  $email=$_GET["delete"];
  $sql="DELETE  FROM signup where Email='$email'";
  $query=$db->link->query($sql);
  if ($query) {
    $delete_message="<span style='color:green; padding:8px; font-size:15px;'>Account Delete Succesfull</span>";

  }
  else{
    $delete_message="<span style='color:red; padding:8px; font-size:15px;'>Account Delete Unsuccesfull</span>";
  }
}


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

<div class="app-content content container-fluid">
    <!-- Bordered striped start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
		
		

          
		<div class="card-body collapse in">
			<div class="table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$i=0;
						$sql="SELECT * FROM signup ORDER BY `Name` ASC";
						$query=$db->link->query($sql);
						while ($admin_fetch=$query->fetch_array()) {
						$i++;
					?>
					<tr>
						<th scope="row"><?php echo $i; ?></th>
						<td><?php echo $admin_fetch[0]; ?></td>
						<td><?php echo $admin_fetch[1]; ?></td>
						<td><?php echo $admin_fetch[2]; ?></td>
						<td><img src="../../img/<?php echo $admin_fetch[1]?>.jpg"
						style="height: 50px; width: 35px;"></td>
						<td>
							<a href="create_admin.php?edit=<?php echo $admin_fetch[1] ?>"
							class="btn btn-info  btn-sm"><i class="icon-check2"></i>Edit
							</a>
							<a href="view_admin.php?delete=<?php echo $admin_fetch[1] ?>" 
							class="btn btn-danger btn-sm mr-1" onClick="return
							 myfunction();">
							<i class="icon-cross2"></i> Delete</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
<!-- Bordered striped end -->

</div> 
</body>