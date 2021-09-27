<?php 
    session_start();
    if(isset($_POST['add_result'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"project");
        $query = "insert into add_result (roll,u_name,semester,branch,p1,gpa1,p2,gpa2,p3,gpa3,p4,gpa4,p5,gpa5,p6,gpa6,p7,gpa7,p8,gpa8,p9,gpa9,p10,gpa10,p11,gpa11) values('$_POST[roll]','$_POST[name]','$_POST[semester]','$_POST[branch]','$_POST[p1]','$_POST[gpa1]','$_POST[p2]','$_POST[gpa2]','$_POST[p3]','$_POST[gpa3]','$_POST[p4]','$_POST[gpa4]','$_POST[p5]','$_POST[gpa5]'
        ,'$_POST[p6]','$_POST[gpa6]','$_POST[p7]','$_POST[gpa7]','$_POST[p8]','$_POST[gpa8]','$_POST[p9]','$_POST[gpa9]','$_POST[p10]','$_POST[gpa10]','$_POST[p11]','$_POST[gpa11]')";
        $query_run = mysqli_query($connection,$query);
        header("location:redirect_page.php");
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
                            <li class="scroll-to-section"><a href="index.php" class="active">HOME</a></li>
                            <li class="scroll-to-section"><a href="index.php">MY COURSES</a></li>
                            <li class="scroll-to-section"><a href="index.php">LOGIN</a></li>
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
    <!-- ***** Header Area End ***** -->

    <br><br><br><br><br><br>
    <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-4">
                <form action="" method="post">
                <a class="btn btn-danger" href="addresult.php">Add_Result</a>
                    <a class="btn btn-danger" href="result.php">Result</a>
                    <a class="btn btn-danger" href="logout.php">Logout</a>
                </form>
            </div>
        </div>
    </div>
        <br><br><br>




            <div style="margin-left:50px;">
                <form action="" method="post">
                <fieldset>
                <legend><center><h2>ADD RESULT</h2></center></legend><br><br>
                
                <lable>ROLL:</label>
                <input type="text" name="roll" placeholder="Roll*" required="">&nbsp;&nbsp;
            
            <lable>NAME:</label>
                <input type="text" name="name" placeholder="Name*" required="">&nbsp;&nbsp;
            
            <lable>SEMESTER:</label>
                <input type="text" name="semester" placeholder="semester*" required="">&nbsp;&nbsp;
            
            <lable>BRANCH:</label>
                <input type="text" name="branch" placeholder="branch*" required="">&nbsp;&nbsp;
            
            <lable>P1:</label>
                <input type="text" name="p1" id="" placeholder="Paper1" required=""><br><br>
            
            <lable>GPA1:</label>
                <input type="text" name="gpa1" id="" placeholder="gpa1" required="">&nbsp;&nbsp;
            
            <lable>P2:</label>
                <input type="text" name="p2" id="" placeholder="paper2" required="">&nbsp;&nbsp;
            
            <lable>GPA2:</label>
                <input type="text" name="gpa2" id="" placeholder="gpa2" required="">&nbsp;&nbsp;
            
            <lable>P3:</label>
                <input type="text" name="p3" id="" placeholder="p3" >&nbsp;&nbsp;
           
            <lable>GPA3:</label>
                <input type="text" name="gpa3" id="" placeholder="gpa3" ><br><br>
           
            <lable>P4:</label>
                <input type="text" name="p4" id="" placeholder="p4" >&nbsp;&nbsp;
            
            <lable>GPA4:</label>
                <input type="text" name="gpa4" id="" placeholder="gpa4" >&nbsp;&nbsp;
            
            <lable>P5:</label>
                <input type="text" name="p5" id="" placeholder="p5" >&nbsp;&nbsp;
            
            <lable>GPA5:</label>
                <input type="text" name="gpa5" id="" placeholder="gpa5" >&nbsp;&nbsp;
            
            <lable>P6:</label>
                <input type="text" name="p6" id="" placeholder="p6" ><br><br>
            
            <lable>GPA6:</label>
                <input type="text" name="gpa6" id="" placeholder="gpa6" >&nbsp;&nbsp;
            
            <lable>P7:</label>
                <input type="text" name="p7" id="" placeholder="p7" >&nbsp;&nbsp;
            
            <lable>GPA7:</label>
                <input type="text" name="gpa7" id="" placeholder="gpa7" >&nbsp;&nbsp;
            
            <lable>P8:</label>
                <input type="text" name="p8" id="" placeholder="p8" >&nbsp;&nbsp;
            
            <lable>GPA8:</label>
                <input type="text" name="gpa8" id="" placeholder="gpa8" ><br><br>
            
            <lable>P9:</label>
                <input type="text" name="p9" id="" placeholder="p9" >&nbsp;&nbsp;
            
            <lable>GPA9:</label>
                <input type="text" name="gpa9" id="" placeholder="gpa9" >&nbsp;&nbsp;
            
            <lable>P10:</label>
                <input type="text" name="p10" id="" placeholder="p10" >&nbsp;&nbsp;
            
            <lable>GPA10:</label>
                <input type="text" name="gpa10" id="" placeholder="gpa10" >&nbsp;&nbsp;
            
            <lable>P11:</label>
                <input type="text" name="p11" id="" placeholder="p11" ><br><br>
           
            <lable>GPA11:</label>
                <input type="text" name="gpa11" id="" placeholder="gpa11" ><br><br>
            
                <center><button type="submit" name="add_result" class="btn btn-warning">Add Now </button></center>
            </fieldset>
                </form>
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
                        <div class="scroll-to-section"><a href="index.php"><img src="assets/images/white-logo.png" alt=""></a>
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