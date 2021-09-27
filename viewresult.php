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

   
<?php
include("config.php");
$roll=$_POST['roll'];
$x=mysqli_query($al,"SELECT * FROM add_result WHERE roll='$roll'");
$y=mysqli_fetch_array($x);
?>
<div align="center">
<span class="head">Online Result Display</span>
<hr class="hr" />
<br />
<br />
<span class="subhead">View Result</span>
<br /><br />

<span class="labels" style="color:#C9F;">Roll No.: <?php echo $roll;?></span>

<br />
<br />
<?php $m=mysqli_query($al,"SELECT * FROM add_result WHERE roll='$roll'");
$n=mysqli_fetch_array($m);
?>
<div style="overflow=scroll;">
<table border="0" cellpadding="5" cellspacing="5" class="design">
<tr>
<th class="labels"><?php echo $n['u_name'];?></td><td class="labels"><?php echo $b['u_name'];?></th>
<th class="labels"><?php echo $n['semester'];?></td><td class="labels"><?php echo $b['semester'];?></th>
<th class="labels"><?php echo $n['branch'];?></td><td class="labels"><?php echo $b['branch'];?></th>
<th class="labels"><?php echo $n['p1'];?></td><td class="labels"><?php echo $b['p1'];?></th>
<th class="labels"><?php echo $n['gpa1'];?></td><td class="labels"><?php echo $b['gpa1'];?></th>
<th class="labels"><?php echo $n['p2'];?></td><td class="labels"><?php echo $b['p2'];?></th>
<th class="labels"><?php echo $n['gpa2'];?></td><td class="labels"><?php echo $b['gpa2'];?></th>
<th class="labels"><?php echo $n['p3'];?></td><td class="labels"><?php echo $b['p3'];?></th>
<th class="labels"><?php echo $n['gpa3'];?></td><td class="labels"><?php echo $b['gpa3'];?></th>
<th class="labels"><?php echo $n['p4'];?></td><td class="labels"><?php echo $b['p4'];?></th>
<th class="labels"><?php echo $n['gpa4'];?></td><td class="labels"><?php echo $b['gpa4'];?></th>
<th class="labels"><?php echo $n['p5'];?></td><td class="labels"><?php echo $b['p5'];?></th>
<th class="labels"><?php echo $n['gpa5'];?></td><td class="labels"><?php echo $b['gpa5'];?></th>
<th class="labels"><?php echo $n['p6'];?></td><td class="labels"><?php echo $b['p6'];?></th>
<th class="labels"><?php echo $n['gpa6'];?></td><td class="labels"><?php echo $b['gpa6'];?></th>
<th class="labels"><?php echo $n['p7'];?></td><td class="labels"><?php echo $b['p7'];?></th>
<th class="labels"><?php echo $n['gpa7'];?></td><td class="labels"><?php echo $b['gpa7'];?></th>
<th class="labels"><?php echo $n['p8'];?></td><td class="labels"><?php echo $b['p8'];?></th>
<th class="labels"><?php echo $n['gpa8'];?></td><td class="labels"><?php echo $b['gpa8'];?></th>
<th class="labels"><?php echo $n['p9'];?></td><td class="labels"><?php echo $b['p9'];?></th>
<th class="labels"><?php echo $n['gpa9'];?></td><td class="labels"><?php echo $b['gpa9'];?></th>
<th class="labels"><?php echo $n['p10'];?></td><td class="labels"><?php echo $b['p10'];?></th>
<th class="labels"><?php echo $n['gpa10'];?></td><td class="labels"><?php echo $b['gpa10'];?></th>
<th class="labels"><?php echo $n['p11'];?></td><td class="labels"><?php echo $b['p11'];?></th>
<th class="labels"><?php echo $n['gpa11'];?></td><td class="labels"><?php echo $b['gpa11'];?></th>
</tr>
</table>
</div>

<br />
<br />
<a href="student_dashboard.php" class="link">EXIT</a>


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