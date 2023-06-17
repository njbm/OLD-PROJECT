<?php

include '../../database/connection.php';
$db=new dbconnect();

$fetch_menu[0]="";
$fetch_menu[1]="";
$insert_message="";
$update_message="";


$id=mysqli_real_escape_string($db->link,isset($_POST["id"])?$_POST["id"]:"");
$menuname=mysqli_real_escape_string($db->link,isset($_POST["menuname"])?$_POST["menuname"]:"");
$status=mysqli_real_escape_string($db->link,isset($_POST["status"])?$_POST["status"]:"");

if (isset($_POST["save"])) {
   
   if (!empty($id) && !empty($menuname)) {
    $sql="INSERT INTO `menu` (`ID`,`Menu_Name`,`Status`) VALUES('$id','$menuname','$status')";
    $query=$db->link->query($sql);
    if ($query) {
         $insert_message="<span style='color:green; padding:8px; font-size:15px;'>Menu Added Successfully</span>";
    }
    else{
        $insert_message="<span style='color:red; padding:8px; font-size:15px;'>Please Try Again</span>";
       
   }
    }
    else{
         $insert_message="<span style='color:red; padding:8px; font-size:15px;'>ID and Menu must be Added</span>";

    }
}

if (isset($_POST["update"])) {
   
   if (!empty($id) && !empty($menuname)) {
    $sql="REPLACE INTO `menu` (`ID`,`Menu_Name`,`Status`) VALUES('$id','$menuname','$status')";
    $query=$db->link->query($sql);
    if ($query) {
         $update_message="<span style='color:green; padding:8px; font-size:15px;'>Menu Update Successfully</span>";
    }
    else{
        $update_message="<span style='color:red; padding:8px; font-size:15px;'>Please Try Again</span>";
       
   }
    }
    else{
         $update_message="<span style='color:red; padding:8px; font-size:15px;'>ID and Menu must be Added</span>";

    }
}

if (isset($_GET["edit"])) {
   $id=$_GET["edit"];
   $sql="SELECT * FROM menu WHERE ID='$id'";
   $query=$db->link->query($sql);
   $fetch_menu=$query->fetch_array();
}

?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Menu</title>
    <link rel="apple-touch-icon" sizes="60x60" href="../app-assets/images/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../app-assets/images/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../app-assets/images/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="../app-assets/images/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/pace.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
   <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  </head>

  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

   <?php
   include 'header.php';

  ?>


     <div class="app-content content container-fluid">
                                <div class="card-header" style=" border-top: 3px solid skyblue;">
                    <h5 class="card-title" id="basic-layout-square-controls" style="font-weight: bold; float: left;" >Insert Menu</h5>
                    <span><a href="view_menu.php" class="btn btn-outline-success" style="float: right;">View</a></span>
                     </div>
                     <div class="alert alert-success" style="padding: 2px;"><span style="font-family: times; letter-spacing: 0.5px;"><?php echo $insert_message ?></span> <span style="font-family: times; letter-spacing: 0.5px;"><?php echo $update_message; ?></span></div>
                     
                    
                        <form class="form" method="POST" >
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-8 offset-md-2">
                                    <div class="form-body">
                                              <div class="form-group">
                                            <label for="eventInput1" style="font-weight: bold;">ID :</label>
                                            <input type="text"  class="form-control" placeholder="ID" name="id" style="padding: 10px;" value="<?php echo $fetch_menu[0]?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="eventInput1" style="font-weight: bold;">Menu Name :</label>
                                            <input type="text" id="eventInput1" class="form-control" placeholder="Menu Name" name="menuname" style="padding: 10px;" value="<?php echo $fetch_menu[1]?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="eventInput1" class="mr-1" style="font-weight: bold;">Status :</label><input type="radio" name="status">&nbsp;Active&nbsp;<input type="radio" name="select" class="mr" name="status">&nbsp;Deactive
                                           
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-actions center">
                                <button type="submit" name="update" class="btn btn-info mr-1" style="font-weight: bold;">
                                    <i class="icon-check2"></i> Update
                                </button>
                                <button type="submit" name="save" class="btn btn-success" style="font-weight: bold;">
                                    <i class="icon-check2"></i> Save
                                </button>
                            </div>
                        </form> 

                    </div>
                
    


<div style="margin-top: 245px;">
    


<?php

include 'footer.php';

?>

</div>
    <!-- BEGIN VENDOR JS-->
    <script src="../app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
    <script src="../app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
    <script src="../app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
