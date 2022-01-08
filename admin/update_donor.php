<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<?php
include("sidebar.php");
include("../config.php");
$id=$_GET['updateid'];
$sql='SELECT * FROM donor WHERE id=$id';

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $search=$_POST['search'];
    $sql="UPDATE donor set id=$id ,username='$username',
    email='$email',age='$age',gender='$gender',search='$search'
    WHERE id=$id ";
    $result=mysqli_query($conn,$sql);
    if($result){
    
        header('location:donor_curd.php');
    }
    else{
        die(mysqli_error($conn));
    }
} 

?>

<form class='container'  method="post" class="contact-form webform" style='margin-right:70px; margin-top: 100px;'  >
<input type="hidden" name="id">
<input type="text" name="username" class="form-control" placeholder="Name">
<input type="email" name="email" class="form-control" placeholder="E-mail">
<input type="text" name="age" class="form-control" placeholder="Age" required>
<select name="gender"class="form-control" required>
    <option value="">Gender</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    </select>
    
<select name="search" class="form-control">
<option>Select Blood Group:</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select>
<button type="button" class="btn btn-primary btn-lg btn-block" name="submit"><a  style="margin:20px; color:white;"href="donor_curd.php" role="button">UPDATE</a></button>
<button type="button" class="btn btn-secondary btn-lg btn-block"><a style="margin:10px;color:white;"href="donor_curd.php" role="button">CLOSE</a></button>
</form>  

</body>
</html>