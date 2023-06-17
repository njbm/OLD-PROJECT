<?php
include '../../database/connection.php';
$db=new dbconnect();
$delete_message="";

if (isset($_GET["delete"])) {
  $id=$_GET["delete"];
  $sql="DELETE  FROM product WHERE  `ID`='$id'";
  $query=$db->link->query($sql);
  if ($query) {
   $delete_message="<span style='color:green; padding:8px; font-size:15px;'>Product Delete Succesfull</span>";
  }
  else{
     $delete_message="<span style='color:red; padding:8px; font-size:15px;'>Product Delete Unsuccesfull</span>";
  }

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
    <title>View Menu</title>
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
  <script type="text/javascript">

    function myfunction(){
      var r =confirm("Are you sure Product delete from the list ?");
      if (r==true) {
        return true;
      }
      else{
        return false;
      }
    }
    

    function myFunctions() {
  // Declare variables 
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");


  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
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

  <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

   <?php
   include 'header.php';

  ?>

<div class="app-content content container-fluid">

    <!-- Bordered striped start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header" style="border-top: 3px solid skyblue;">
                <h5 class="card-title" style="font-weight: bold;">View Catagory</h5>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="alert alert-success" role="alert" style="padding: 2px;"><?php echo $delete_message; ?></div>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 10px;">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
               <label class="mr-1" style="font-weight: bold;">Shows</label><select style="padding: 5px;"><option>10</option><option>20</option><option>30</option></select>
            </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">              
           <span style="float: right;"><label  class="mr-1" style="font-weight: bold;">Search:</label><input type="text" name="search" placeholder="Search for item name" onkeyup="myFunctions();"  id="myInput" style="padding: 5px 10px;"  class="mr-1"></span> 

             
        </div>
               
            </div>

          
            <div class="card-body collapse in">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped"  id="myTable">
                        <thead>
                            <tr>
                                <th># ID</th>
                                <th>Item Name</th>
                                <th>Catagory Name</th>
                                <th>Product Name</th>
                                <th>Product Name</th>
                                <th>Purchase Name</th>
                                <th>Quentity</th>
                                <th>Product Details</th>
                                <th>Image</th>
                                <th>Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>

                          <?php
                          $sql="SELECT * FROM product ORDER BY `ID` ASC";
                          $query=$db->link->query($sql);
                          while ($fetch_product=$query->fetch_array()) {
                            
                          

                          ?>
                            <tr>
                                <th scope="row"><?php echo $fetch_product[0]; ?></th>
                                <td><?php echo $fetch_product[1]; ?></td>
                                <td><?php echo $fetch_product[2]; ?></td>
                                 <td><?php echo $fetch_product[3]; ?></td>
                                  <td><?php echo $fetch_product[4]; ?></td>
                                   <td><?php echo $fetch_product[5]; ?></td>
                                    <td><?php echo $fetch_product[6]; ?></td>
                                     <td><?php echo $fetch_product[7]; ?></td>
                                    <td><img src="../../img/<?php echo $fetch_product[0] ?>.jpg" style="height: 60px;"></td>
                                <td>
                                <a href="product.php?edit=<?php echo $fetch_product[0] ?>" class="btn btn-info btn-sm mr-1"><i class="icon-check2"></i>&nbsp;Edit
                                </a> 
                                  <a href="view_product.php?delete=<?php  echo $fetch_product[0] ?>" class="btn btn-danger btn-sm " onclick="return myfunction();">
                                    <i class="icon-cross2"></i> Delete
                                </a>
                              </td>

                            </tr>

                            <?php

                          }

                            ?>

                                               


                     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bordered striped end -->
<style type="text/css">
   .page-item a{
    color: black;

   }
   


</style>

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <nav aria-label="Page navigation" style="float: right;">
                 <ul class="pagination" style="">
                     <li class="page-item">
                         <a class="page-link" href="#" aria-label="Previous ">
                             <span aria-hidden="true">&laquo; Prev</span>
                             <span class="sr-only">Previous</span>
                        </a>
                     </li>
                     <li class="page-item active"><a class="page-link" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item "><a class="page-link" href="#">3</a></li>
                     <li class="page-item"><a class="page-link" href="#">4</a></li>
                     <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">Next &raquo;</span>
                             <span class="sr-only ">Next</span>
                         </a>
                     </li>
                </ul>
            </nav>
     
 </div>


 </div>
               
    




<?php

include 'footer.php';

?>
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
