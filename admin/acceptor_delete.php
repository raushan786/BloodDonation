<?php
include("../config.php");
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
   $sql="DELETE FROM `request` WHERE id=$id";
   $result=mysqli_query($conn,$sql);
   if($result){
     header('location:acceptor_curd.php');
   }
   else{
       die(mysqli_error($conn));
   }
}
?>