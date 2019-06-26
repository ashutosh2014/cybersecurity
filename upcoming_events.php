<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Upcoming Events</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cloud 83 - hosting template ">
	<meta name="keywords" content="cloud, hosting, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/navbar.css"/>
    <link rel="stylesheet" href="css/footer.css"/>
    <!-- <link rel="stylesheet" href="css/style.css"/> -->
   <link rel="stylesheet" href="css/events.css"/>
	<link rel="stylesheet" type="text/css" href="css/style2.css">

	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<div id="nav1">
	    <header class="header-section">
		    	<a href="./index.php" class="site-logo"><img src="./img/11.png" class="mietlogo" width="90px" height="60px"></a>
			<img  id="img1" src="./img/cyber.png" height="75px" width="230px">
			  <div class="nav-switch">
			    <i class="fa fa-bars"></i>
	        </div>
		    <div class="nav-warp">
			    <div class="user-panel">
                <a href="login.php">Login</a> /
                <a href="login.php">Register</a>
            </div>
            <ul class="main-menu">
				    <li><a href="./index.php">Home</a></li>
				    <li><a href="./peoples.php">People</a></li>
				    <!-- <li><a href="./projects.php">Projects</a></li>
                    <li><a href="./downloads.php">Downloads</a></li> -->
                    <li><a href="./facilities.php">Facilities</a></li>
                    <li><a href="#"><span class="active123">Upcoming Events</span></a></li>
				    <li><a href="./contact.php">Contact us</a></li>
			    </ul>
		    </div>
	    </header>
	</div>
    <!-- Header section end -->




    <!-- Blog Heading Start -->

    <div class="jumbotron-fluid">
        <div class="panel panel-default" style="border:none;">
            <div class="image">
                <img class="img-responsive" src="img/page-top-bg.jpg" alt="Image Unavailable" style="width:100%;">
                    <div class="heading1">
                         <h1 style="font-size:4vw;color:white;" >Events</h1><h4 style="font-size:1vw;color:white;opacity:0.6;"></h4>
                     </div>
             </div>
        </div>
    </div>
    <br />
    <br />

    <!-- Blog Heading end -->

    <!--pannel starts-->

<?php

	include 'connect.php';
// $cn=mysqli_connect("localhost","root","","test");
$s="select * from upcomingevents";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		echo '<div><div id="msg">
            <div class="container"id="orgname">
                    <div class="row">
                        <div class="col-sm-6">


                            <div class="panel panel-default"id="panel">
                                <div class="panel-body">

                                    <img src="img/blog/'.$data[2].'"id="blog1" class="radius-border-20">

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-default"id="panel2">
                                <div class="panel-body">
                                    <h4 id="text">'.$data[1].'</h4>
                                    <div id="admin"> '.$data[3].' </div>
                                      <a href="#"><button type="button" id="button1">Know More</button></a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

}
			mysqli_close($cn);
			?>

    <!--pannel ends-->
    <br />
    <br />

    <!--panne2 starts-->
        <div id="msg">
            <div class="container"id="orgname">
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="panel panel-default"id="panel">
                                <div class="panel-body">

                                    <img src="img/blog/2.jpg"id="blog1" class="radius-border-20">
                                    <!-- <br>
                                    <br>
                                    <button type="button" id="button1"><b><a href="#">Know More</a></b></button>
 -->
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="panel panel-default"id="panel2">
                                <div class="panel-body">
                                    <h4 id="text">5 tips to build your website</h4>
                                    <h6 id="admin"> The field is growing in importance due to increasing reliance on computer systems, the Internet[2] and wireless networks such as Bluetooth and Wi-Fi, and due to the growth of "smart" devices, including smartphones, televisions and the various tiny devices that constitute the Internet of things </h6>
                                      <a href="#"><button type="button" id="button1">Know More</button></a>
                                </div>
                             </div>
                        </div>
                    </div>
            </div>
        </div>

    <!--panne2 ends-->
    <br />
    <br />
    <!--panne3 starts-->
        <div id="msg">
            <div class="container"id="orgname">
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="panel panel-default"id="panel">
                                <div class="panel-body">

                                    <img src="img/blog/3.jpg"id="blog1" class="radius-border-20">
                                    <!-- 
                                    <br>
                                    <button type="button" id="button1"><b><a href="#">Know More</a></b></button> -->

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="panel panel-default"id="panel2">
                                <div class="panel-body" class="radius-border-20">
                                    <h4 id="text">5 tips to build your website</h4>
                                    <h6 id="admin"> The field is growing in importance due to increasing reliance on computer systems, the Internet[2] and wireless networks such as Bluetooth and Wi-Fi, and due to the growth of "smart" devices, including smartphones, televisions and the various tiny devices that constitute the Internet of things   </h6>
                                      <a href="#"><button type="button" id="button1">Know More</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    <!--panne3 ends-->
    <br />
    <br />
    <br />


    </div>
    <!-- Footer Section Start -->
	<section class="footer-top-section text-white spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widget about-widget footer-img">
                            <img src="./img/11.png" width="120px" height="70px">
                            <h3 id="add1">Meerut Institute ofEngineering & Technology</h3><br>
                            <p id="add2">N.H. 58, Delhi-Roorkee Highway, Baghpat Road Bypass Crossing Meerut - 250005. UP (India)</p><br>
                            <p id="add3"> Phone : 0121-2439019 / 2439057<br>Fax : 0121-2439058<br>Email : contact@miet.ac.in</p>
                            <div class="fw-social social">

                                <div id="icons">
                                    <a href="https://www.facebook.com/MIETGROUP/" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/miet_group?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Usefull Links</h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul>
                                        <li><a href="#">Announcements</a></li>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">Labs</a></li>
                                        <li><a href="#">Fee Structure</a></li>
                                        <li><a href="#">Scholarship</a></li>
                                        <li><a href="#">Stipends</a></li>
                                        </ul>
                                    </div>


                                </div>
                        </div>
                    </div>

                    <div class="col-lg-4  col-md-6">
                    <div class="footer-widget">
                        <h4 class="fw-title">Latest Posts</h4>
                        <div class="fw-latest-post-widget">
                            <div class="lp-item">
                                <div class="lp-thumb set-bg" data-setbg="img/footer-thumb/1.jpg"></div>
                                <div class="lp-content">
                                    <h6 style="color: white font-weight: bold; font-size: 12px"> <span>project "CP-ABE Scheme with Decryption Keys of Constant Size using ECC with Expressive Threshold Access" awarded to Dr. Pais.</h6>
                                    <span style="font-size: 10px">Oct 21, 2018</span>
                                </div>
                            </div>
                            <div class="lp-item">
                                <div class="lp-thumb set-bg" data-setbg="img/footer-thumb/2.jpg"></div>
                                <div class="lp-content">
                                    <h6 style="color: white font-weight: bold; font-size: 13px">AI/Deep Learning applications on IoT Time series". Romeo Kienzler, Chief Data Scientist</h6>
                                    <span style="font-size: 10px">Oct 21, 2018</span>
                                </div>
                            </div>
                            <div class="lp-item">
                                <div class="lp-thumb set-bg" data-setbg="img/footer-thumb/3.jpg"></div>
                                <div class="lp-content">
                                    <h6 style="color: white font-weight: bold; font-size: 13px">Paper accepted in IEEE Communications Surveys and Tutorials:</h6>
                                    <span style="font-size: 10px">Oct 21, 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- Footer top section end -->


<?php

	
$cn=mysqli_connect("localhost","root","","test");
$s="select * from upcomingevents";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		echo "$data[2]";	}
			mysqli_close($cn);
			?>



	<!-- Footer section -->
	<footer class="footer-section">
            <div class="container">
                <ul class="footer-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="peoples.php">Peoples</a></li>
                    <li><a href="facilities.php">Facilities</a></li>
                    <li><a href="upcoming_events.php"><u>Upcoming Events</u></a></li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
                </div>
                </footer>


        <!-- Footer top section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
