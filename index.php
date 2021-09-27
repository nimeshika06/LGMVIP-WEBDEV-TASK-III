<?php
    session_start();
    if(isset($_POST['admin_login'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"project");
        $query = "select * from admin where ad_username = '$_POST[email]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['ad_username'] == $_POST['email']){
                if($row['ad_password'] == $_POST['password']){
                    $_SESSION['name'] = $row['ad_username'];
                    $_SESSION['email'] = $row['ad_password'];
                    header("Location:admin_dashboard.php");
                }
                else{
                    echo "<script>alert('Wrong Password...');</script>";
                }
            }
        }
    }
    if(isset($_POST['student_login'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"project");
        $query = "select * from studentlogin where roll = '$_POST[roll]'";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            if($row['roll'] == $_POST['roll']){
                if($row['u_password'] == $_POST['s_password']){
                    $_SESSION['roll'] = $row['roll'];
                    $_SESSION['s_password'] = $row['u_password'];
                    header("Location:student_dashboard.php");
                }
                else{
                    echo "<script>alert('Wrong Password...');</script>";
                }
            }
        }
    }  
?>



<!DOCTYPE html>
<html lang="en">

    <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
            <link rel="icon" href="https://img.collegepravesh.com/2016/05/IIIT_Bhubaneswar_Logo.png" type="image/png">
            <title>IIIT Bhubaneshwar</title>
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="vendors/linericon/style.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
            <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
            <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
            <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/responsive.css">
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
            <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
            <link rel="stylesheet" href="assets/css/owl-carousel.css">
            <link rel="stylesheet" href="assets/css/lightbox.css">
            <link rel="stylesheet" href="assets/css/style.css">
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">HOME</a></li>
                            <li class="scroll-to-section"><a href="#mycourses">MY COURSES</a></li>
                            <li class="scroll-to-section"><a href="#about">LOGIN</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <center><h1>IIIT BBSR</h1></center>
                            <center><h6>STUDENT RESULT MANAGMENT</h6></center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="https://img.collegepravesh.com/2016/05/IIIT-Bhubaneswar.jpg" alt="" style="width=1500px; height:800px;">
                                </div>
                            </div>
                          <!-- // Item -->
                          <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="https://images.shiksha.com/mediadata/images/1503642951phpuVKp5K.jpeg" alt="" style="width=1500px; height:800px;">
                                </div>
                            </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br></br>
    <!-- ***** Main Banner Area End ***** -->


    <!--================ MY COURSE =================-->
       
        <div class="row1" id="mycourses">
            <div class="col-md-12">
                <center><h1 style="color: black;">student Login Page</h1></center>
            </div>
        </div><br><br><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="roll" required="" placeholder="ROLL*">
                    </div><br>
                    <div class="form-group">
                        <input type="password" class="form-control" name="s_password" required="" placeholder="Password*">
                    </div><br>
                    <center><button type="submit" class="btn btn-warning" name="student_login">Login</button></center>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div><hr width="80%">
        <!--================ MY COURSE =================-->
    

    <!-- ***** About Area Starts ***** -->
    
        <div class="row" id="about">
            <div class="col-md-12">
                <center><h1 style="color: red;">Admin Login Page</h1></center>
            </div>
        </div><br><br><br>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" required="" placeholder="Email*">
                    </div><br>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" required="" placeholder="Password*">
                    </div><br>
                    <center><button type="submit" class="btn btn-warning" name="admin_login">Login</button></center>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <div class="scroll-to-section"><a href="#top"><img src="assets/images/white-logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright IIIT BHUBANESHWAR.</p>
                    </div>
                </div>
            </div><br><br>
            <center><div class="mapouter"><div class="gmap_canvas"><iframe width="700" height="120" id="gmap_canvas" src="https://maps.google.com/maps?q=iiit%20bh&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:120px;width:700px;}</style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:120px;width:700px;}</style></div></div></center>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>