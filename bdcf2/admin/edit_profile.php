<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Admin Pannel</title>
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
                    <h5 class="card-title" id="basic-layout-square-controls" style="font-weight: bold;">Edit Profile</h5>
                     </div>

                        <form class="form" method="POST" style=" border-top: 3px solid lightgray;">
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-8 offset-md-2">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="eventInput1"style="font-weight: bold;">Name</label>
                                            <input type="text" id="eventInput1" class="form-control" placeholder="Name" name="name">
                                        </div>

                                        <div class="form-group">
                                            <label for="eventInput2"style="font-weight: bold;">Email</label>
                                            <input type="email" id="eventInput2" class="form-control" placeholder="Email" name="email">
                                        </div>

                                        <div class="form-group">
                                            <label for="eventInput3"style="font-weight: bold;">Password</label>
                                            <input type="text" id="eventInput3" class="form-control" placeholder="Password" name="password">
                                        </div>

                                        <div class="form-group">
                                            <label for="eventInput4"style="font-weight: bold;">Confirm Password</label>
                                            <input type="email" id="eventInput4" class="form-control" placeholder="Confirm Password" name="cpassword">
                                        </div>

                                        <div class="form-group">
                                            <label for="eventInput5"style="font-weight: bold;">Image</label>
                                            <input type="file" id="eventInput5" class="form-control" name="image">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-actions center">
                                <button type="button" name="cancel" class="btn btn-danger mr-1" style="font-weight: bold;">
                                    <i class="icon-cross2"></i> Cancel
                                </button>
                                <button type="submit" name="save" class="btn btn-info" style="font-weight: bold;">
                                    <i class="icon-check2"></i> Update
                                </button>
                            </div>
                        </form> 

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
