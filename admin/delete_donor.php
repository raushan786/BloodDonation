<?php
include("../config.php");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
   $sql="DELETE FROM `donor` WHERE id=$id";
   $result=mysqli_query($conn,$sql);
   if($result){
     header('location:donor_curd.php');
   }
   else{
       die(mysqli_error($conn));
   }
}
?>