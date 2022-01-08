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
  <body data-spy="scroll" data-target="#navbarNav" data-offset="50">
      <div class="navbar navbar-expand-lg fixed-top"> 
          <a href="welcome.php" class="navbar-brand">RED CROSS YOUTH</a>
          <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ml-lg-auto">
                          <li class="nav-item">
                              <a href="donor.php" class="nav-link smoothScroll">donor</a>
                            </li>
                            <li class="nav-item">
                                    <a href="request.php" class="nav-link smoothScroll">Request Blood</a>
                                </li>
                            <li class="nav-item">
                              <a href="acceptor.php" class="nav-link smoothScroll">acceptor</a>
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


    <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">
        <div class="bg-overlay">
            <video autoplay muted loop id="myVideo">
                <source src="video/front.mp4" type="video/mp4">
            </video>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto col-12">
                    <div class="hero-text mt-5 text-center">
                        <h4 
                            style="font-family: 'Lora', serif; font-weight: 600; letter-spacing: 2px;">For your Inner
                            Peace</h4>

                        <h1 class="text-black"
                            style="font-family: 'Baloo 2', cursive;">
                            A little help can be a great favor. 
                        </h1>

                        

                    </div>
                </div>
            </div>
        </div>

    </section>
  
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.3/smooth-scroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.js"></script>
    <script src="script.js"></script>
</body>
</html>