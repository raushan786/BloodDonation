<?php
   header("location:index.php");
  
  $conn = mysqli_connect("localhost", "root", "", "login");
    
  if($conn === false){
      die("ERROR: Could not connect. " 
          . mysqli_connect_error());
  }
    
  $name =  $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $message =  $_REQUEST['message'];
 
  $sql = "INSERT INTO contact  VALUES ('$name', '$email','$message')";
    
  if(mysqli_query($conn, $sql)){
      echo "<script>  alert('your data is stored'); </script>"; 
          
  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
   
  mysqli_close($conn);
  ?>