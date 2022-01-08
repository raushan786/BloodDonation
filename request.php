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
                              <a href="request.php" class="nav-link smoothScroll">Request</a>
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


<section class="contact section" id="donor">
        <div class="container">
            <div class="row">
                <div class="ml-auto col-lg-5 col-md-6 col-12">
                    <h2 style="font-family: 'Lora', serif; letter-spacing: 2px;" class="mb-4 pb-2">
                        Request For Blood
                    </h2>

                    <form action="request_insert.php" method="post" class="contact-form webform" data-aos-delay="400" >

                    <input type="hidden" name="id">
                        <input type="text" name="username" class="form-control" placeholder="Name">
                        <input type="email" name="email" class="form-control" placeholder="E-mail">
                        <input type="text" name="age" class="form-control" placeholder="Age" required>
                        <select name="gender" class="form-control" required>
                            <option value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            </select>
                            
               <select name="search" id="search" class="form-control">
               <option><?php echo @$_GET['search']; ?>Select Blood Group:</option>
               <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
               </select>
                        <button type="submit" class="form-control" id="submit-button" name="submit">REQUEST</button>
            
                    </form>
                </div>

                <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                    <img src="images/request.png" style="width:500px; height:610px;">
                  
                </div>
            </div>
        </div>
    </section>
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