<?php
// include("../config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>BLOOD BANK</title>
  </head>
  <body style="background-image: url('../images/whitetexture.jpeg');background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
  <nav class="navbar navbar-expand-lg navbar-dark "style="background-color:#8a242bd0;">
  <a class="navbar-brand" href="index.php">RED CROSS YOUTH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
      
      <li class="nav-item ">
        <a class="nav-link" href="../register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../login.php">Login</a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link" href="admin.php">ADMIN</a>
      </li>
      
     
    </ul>
  </div>
</nav>

<div class="container mt-4">
<h3><u>HELLO..!!!</u></h3>
<H6>ADMIN</h6>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
  </div>

  <button type="submit"  class="form-control" id="submit-button" style="background-color:#8a242bd0; color:white;" name="submit">SUBMIT</button>
</form>
</div>
<?php
if (isset($_POST['submit']))
{
  $query="SELECT * FROM 'admin' WHERE 'username'='$_POST[username]' AND 'password'='$_POST[password]'";
  $result=mysqli_query($conn,$query);
  if((!$result || mysqli_num_rows($result) == 0))
  {
    session_start();
    $_SESSION['username']=$_POST['username'];
    header("location:home.php");
  
  }
  else{
    echo"<script>alert('incorrect password');</script>";
  }
}
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
