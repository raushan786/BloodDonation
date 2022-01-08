<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="aos.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css" />
    <title>BLOOD BANK</title>
  </head>
  <body data-spy="scroll" data-target="#navbarNav" data-offset="50" style="background-image: url('images/banner.png');background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
      <div class="navbar navbar-expand-lg fixed-top"> 
          <a href="welcome.php" class="navbar-brand">RED CROSS YOUTH</a>
          <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ml-lg-auto">
                      <li class="nav-item">
                              <a href="welcome.php" class="nav-link smoothScroll">acceptor</a>
                            </li>
                            <li class="nav-item">
                              <a href="request.php" class="nav-link smoothScroll">request</a>
                            </li>
                            <li class="nav-item">
                              <a href="applied_request.php" class="nav-link smoothScroll">already requested</a>
                            </li>
                                <li class="nav-item">
                                    <a href="available.php" class="nav-link smoothScroll">availablity check</a>
                                </li>
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link smoothScroll">Logout</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link smoothScroll"><img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome" .'&nbsp;&nbsp;'. $_SESSION['username']?></a>
                                </li>
                        </ul>
            </div>
        </div>
    </div>

<?php

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
<div class="container ">
<table class="table" id="myTable" style="margin-top:100px; background-image: url('images/cloud.jpg');background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;  border-radius: 10px;">
  <thead>
    
    <tr>
      <th scope="col">UserName</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Search</th>
    </tr>
  </thead>
  <tbody>
  <?php 
 
 $sql="SELECT * FROM request";
 $result=mysqli_query($conn,$sql);
 while($row=mysqli_fetch_assoc($result)){
    echo "<tr>
    <th scope='row'>".$row['username']."</th>
    <td>".$row['email']."</td>
    <td>".$row['age']."</td>
    <td>".$row['gender']. "</td>
    <td>".$row['search']."</td>
    

  </tr>";
   
 }
 
 ?>
  
    
  </tbody>
</table>
</div>
&nbsp; 
<?php require 'footer.php'; ?>
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6187b50c6885f60a50baaf2f/1fjt2ajm7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
