<?php
include '../dbconnect/connection.php';
$db=new dbconnect();
$delete_message ="";

if (isset($_GET["delete"])) {
  $id=$_GET["delete"];
  $sql="DELETE  FROM about where ID='$id'";
  $query=$db->link->query($sql);
  if ($query) {
    $delete_message="<span style='color:green; padding:8px; font-size:15px;'>Data Delete Succesfull</span>";

  }
  else{
    $delete_message="<span style='color:red; padding:8px; font-size:15px;'>Data Delete Unsuccesfull</span>";
  }
}
?>

