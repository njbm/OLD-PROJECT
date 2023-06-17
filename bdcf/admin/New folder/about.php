
<?php

include '../dbconnect/connection.php';
$db=new dbconnect();
 $insert_message="";
 $update_message="";
 $fetch_about[0]='';
 $fetch_about[1]='';
 $fetch_about[2]='';


$id=mysqli_real_escape_string($db->link,isset($_POST["id"])?$_POST["id"]:"");
$title=mysqli_real_escape_string($db->link,isset($_POST["title"])?$_POST["title"]:"");
$details=mysqli_real_escape_string($db->link,isset($_POST["details"])?$_POST["details"]:"");


if (isset($_POST["save"])) {
   if (!empty($id) && !empty($details)){

        $sql="INSERT INTO `about`(`ID`,`Title`,`Details`) VALUES('$id','$title','$details')";
        
        $query=$db->link->query($sql);
        if ($query) {

            $path="../../img/$id.jpg";
            move_uploaded_file($_FILES['image']['tmp_name'],$path);


            $insert_message="<span style='color:green; padding:8px; font-size:15px;'>Data Added Successfully</span>";
        }
        else{
            $insert_message="<span style='color:red; padding:8px; font-size:15px;'>Please Try Again</span>";
        }

}

else{
    $insert_message="<span style='color:red; padding:8px; font-size:15px;'>id And details Must Be Added</span>";
}


 

}


if (isset($_POST["update"])) {
   if (!empty($email) && !empty($password)){




        $sql="REPLACE INTO `about`(`ID`,`Title`,`Details`) VALUES('$id','$title','$details')";
       
        $query=$db->link->query($sql);
        if ($query) {
            
            $update_message="<span style='color:green; padding:8px; font-size:15px;'>Data Update Successfully</span>";
        }
        else{
            $update_message="<span style='color:red; padding:8px; font-size:15px;'>Please Try Again</span>";
        }
       

}

else{
    $update_message="<span style='color:red; padding:8px; font-size:15px;'>id And details Must Be Added</span>";
}


 

}

if (isset($_GET["edit"])) {
   $id=$_GET["edit"];
   $sql="SELECT * FROM `about` where ID='$id'";
   $query=$db->link->query($sql);
   $fetch_about=$query->fetch_array();
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
  		 <!--..................................Container.....................................-->
		 
<form>		 
  <div class="container-fluid" style="background:#FFFFFF; color:#green;">
  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:#FFFFFF;">
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
		
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="background:#fff; min-height:700px; margin-top:10px; margin-bottom:20px; text-align:center;
				font-family:Georgia, 'Times New Roman', Times, serif; color:green;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h1>Student Bio-Data</h1>
			</div>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify; font-size:24px;">
				Name
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<input type="text" class="form-control" placeholder="Your Name"  />
				</div>	
			</div>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify; font-size:24px;">
				Father's Name
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<input type="text" class="form-control" placeholder="Your Father's Name"  />
				</div>	
			</div>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify; font-size:24px;">
				Mother's Name
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<input type="text" class="form-control" placeholder="Your Mother's Name"  />
				</div>	
			</div>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify; font-size:24px;">
				Photo
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<input type="file" class="btn btn-file" />
				</div>	
			</div>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:justify; font-size:24px;">
				Address
				</div>
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<textarea class="form-control" placeholder="Your Address" style="max-width:300px;"></textarea>
				</div>	
			</div>
			
			
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin:15px 0px 10px 0px;">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
				
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style=" text-align:center; font-size:24px;">
				<input type="submit" class="btn btn-sucsess" value="Submit" style="background:#000000; color:#FFFFFF;">
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
			</div>
				
			
			
			
		
		</div>		
		<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> </div>
  
  	</div>
  
  
  
  
  		 <!--..........................................Container.....................................-->
  </div>
 </form>
  
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="file:///H|/Responsive design/js/bootstrap.min.js"></script>
  </body>
</html>
