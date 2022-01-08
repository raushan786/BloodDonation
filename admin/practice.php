<?php
include("sidebar.php");
include("../config.php");
$id=$_GET['updateid'];
$sql='SELECT * FROM donor WHERE id=$id';
$stmt = $mysqli->prepare('SELECT * FROM donor WHERE id=$id');
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
    $username=$row['username'];
    $email=$row['email'];
    $age=$row['age'];
    $gender=$row['gender'];
    $search=$row['search'];
    
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
<a class="btn btn-primary" href="#" role="button">Link</a>
<button class="btn btn-primary" type="submit">Button</button>
<input class="btn btn-primary" type="button" value="Input">
<input class="btn btn-primary" type="submit" value="Submit">
<input class="btn btn-primary" type="reset" value="Reset">