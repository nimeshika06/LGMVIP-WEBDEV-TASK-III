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
                            <li class="scroll-to-section"><a href="index.php" class="active">HOME</a></li>
                            <li class="scroll-to-section"><a href="index.php">MY COURSES</a></li>
                            <li class="scroll-to-section"><a href="logout.php">LOGOUT</a></li>
                            <li class="scroll-to-section"><a href="grades.php">VIEW GRADES</a></li>
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

    <br><br><br><br><br><br>
        <div class="row" style="align-items:center;">
            <div class="col-md-6"></div>
            <div class="col-md-4">
                <form action="" method="post">
                <a class="btn btn-danger" href="student_dashboard.php">1st</a>
                <a class="btn btn-danger" href="2ndsem.php">2nd</a>
                <a class="btn btn-danger" href="3rdsem.php">3rd</a>
                <a class="btn btn-danger" href="4thsem.php">4th</a>
                <a class="btn btn-danger" href="5thsem.php">5th</a>
                <a class="btn btn-danger" href="6thsem.php">6th</a>
                <a class="btn btn-danger" href="7thsem.php">7th</a>
                <a class="btn btn-danger" href="8thsem.php">8th</a>
                </form>
            </div>
        </div>
        <br><br><br>
        <!--================Banner Area END =================-->
        <div class="row">
            <div class="col-md-12">
                <center><h3>Courses</h3></center>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th><center>sno</center></th>
                           <th><center>SID</center></th>
                            <th><center>Semester</center></th>
                            <th><center>branch</center></th>
                            <th><center>Subjects</center></th>
                            <th><center>credits</center></th>
                        </tr> 
                    </thead>
        <!-- ===========connect to database============ -->
        <?php 
                        $user_count = 0;
                        $connection = mysqli_connect("localhost","root","");
                        $db = mysqli_select_db($connection,"project");
                        $query = "select * from sem7;";
                        $query_run = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($query_run)){
                            $user_count = $user_count + 1;
                            ?>
                                <tr>
                                    <td><center><?php echo $user_count;?></center></td>
                                    <td><center><?php echo $row['sid'];?></center></td>
                                    <td><center><?php echo $row['semester'];?></center></td>
                                    <td><center><?php echo $row['branch'];?></center></td>
                                    <td><center><?php echo $row['subject'];?></center></td>
                                    <td><center><?php echo $row['credits'];?></center></td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </div>
        <br><br><br><br><br><br>

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
                        <div class="scroll-to-section"><a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
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