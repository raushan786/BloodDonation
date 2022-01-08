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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body>
    

<table class="table" style='margin:220px;'>
  <thead>
    <tr>
    <th scope="col">Sno</th>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Search</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      <?php
 
 $sql="SELECT * FROM donor";
 $result=mysqli_query($conn,$sql);
 if($result){

 
 while($row=mysqli_fetch_assoc($result)){
  $id=$row['id'];
  $username=$row['username'];
  $email=$row['email'];
  $age=$row['age'];
  $gender=$row['gender'];
  $search=$row['search'];
  
    echo '<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$username.'</td>
    <td>'.$email.'</td>
    <td>'.$age.'</td>
    <td>'.$gender.'</td>
    <td>'.$search.'</td>
    
    <td> <button class="btn btn-sm btn-primary"><a href="update_donor.php?updateid='.$id.'" style="color: white">EDIT</a></button> 
    <button class="btn btn-sm btn-danger"><a href="delete_donor.php?deleteid='.$id.'" name="delete" style="color: white">DELETE</a></button></td>
  </tr>';
 }}
 ?>
</tbody>
</table>
</body>
</html>
