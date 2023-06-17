<?php
	include"../connection.php";
	$db=new dbcoonection();
	
	$table="";
	//echo"$db->error";
	$fetch[0]=null;
	$fetch[1]=null;
	$id=mysqli_real_escape_string($db->link,isset($_POST["id"])?($_POST["id"]):"");
	$name=mysqli_real_escape_string($db->link,isset($_POST["name"])?($_POST["name"]):"");
	
	if(isset($_REQUEST["add"]))
	{
		if(!empty($id))
		{
			$sql="INSERT INTO item_information(`Item_id`, `Item_name`) VALUES('$id','$name')";
			
			$query=$db->link->query($sql);
			
			if($query)
			{
				echo"Insert Successfully";
			}
			else
			{
				echo"Insert Unsuccessfully";
			}
		}
	}
	
	
	if(isset($_REQUEST["edit"]))
	{
		if(!empty($id))
		{
			$sql="REPLACE INTO item_information(`Item_id`, `Item_name`) VALUES('$id', '$name')";
			
			$query=$db->link->query($sql);
			
			if($query)
			{
				//echo"Insert Successfully";
			}
			else
			{
				echo"Update Unsuccessfully";
			}
		}
	}
	
	
	if(isset($_REQUEST["delete"]))
	{
		if(!empty($id))
		{
			$sql="DELETE FROM ecomerce.item_information WHERE Item_id = '$id'";
			
			$query=$db->link->query($sql);
			
			if($query)
			{
				//echo"Insert Successfully";
			}
			else
			{
				echo"Delete Unsuccessfully";
			}
		}
	}
	

	if(isset($_REQUEST["view"]))
	{
		$sql="select * from item_information";
		$table="<table class='table table-hover' width:'600'>";
		$table.="<tr><td>Item_id</td> <td>Item_name</td></tr>";
			
		$query=$db->link->query($sql);
		while($fetch=$query->fetch_array())
		{
			$table.="<tr>";
				$table.="<td>";
					$table.=$fetch[0];
				$table.="</td>";
				
				$table.="<td>";
					$table.=$fetch[1];
				$table.="</td>";
			$table.="</tr>";
		}
		$table.="</table>";
	}
	
	if(isset($_REQUEST["btnSearch"]))
	{
		$txtSearch=mysqli_real_escape_string($db->link,isset($_POST["txtSearch"])?($_POST["txtSearch"]):"");
		
	$sql="select * from item_information where Item_id='$txtSearch'";	
		$query=$db->link->query($sql);
		if($fetch=$query->fetch_array())
		{
			//print_r($fetch);
		}
		
		
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Item Information</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

  </head>
  <style type="text/css">

  </style>

  <body>
  <form method="POST">

  <div class="container-fluid">
    <div class="row">
	<h1 style="text-align: center; margin-top: 50px;">Item Information</h1>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"  style="border:1px solid #000; padding: 30px 40px; margin-top: 30px;">
	  
	          <div class="form-group">
              <label for="id">Search</label>
              <input type="text" class="form-control" id="id" placeholder="Item Id" name="txtSearch"> <input  type="submit" class="btn btn-success" name="btnSearch"  value="Search">
            </div>



        <div class="form-group">
              <label for="id">Item Id</label>
              <input type="text" class="form-control" id="id" placeholder="Item Id" name="id" value="<?php print $fetch[0]; ?>">
            </div>

            <div class="form-group">
              <label for="Name">Item Name</label>
              <input type="text" class="form-control" id="Name" placeholder="Item Name" name="name" value="<?php print $fetch[1]; ?>">
            </div>

            <button type="submit" class="btn btn-primary" name="add">Add</button>
             <button type="submit" class="btn btn-success" name="edit">Edit</button>
              <button type="submit" class="btn btn-info" name="delete">Delete</button>
               <button type="submit" class="btn btn-warning" name="view">View</button>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"></div>
    </div>
  </div>

<?php
	 print $table;
?>
   </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>