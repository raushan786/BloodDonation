
<?php
include("sidebar.php");
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'login');
  
  // Try connecting to the Database
  $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
  
  //Check the connection
  if($conn == false){
      dir('Error: Cannot connect');
  }
     
?>
<div class="container">



<table class="table" id="myTable" style="margin-left:200px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php 
 
 $sql="SELECT * FROM contact";
 $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result)){
    echo "<tr>
    <th scope='row'>".$row['name']."</th>
    <td>".$row['email']."</td>
    <td>".$row['message']."</td>
    <td> Actions</td>
  </tr>";
   
 }
 
 ?>
  
    
  </tbody>
</table>
</div>
