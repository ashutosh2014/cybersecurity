<?php include('function.php')?>
<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>HOME</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cloud 83 - hosting template ">
	<meta name="keywords" content="cloud, hosting, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/flaticon.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
	<link rel="stylesheet" href="../css/navbar.css"/>
	<link rel="stylesheet" href="../css/footer.css"/>
	<!-- <link rel="stylesheet" href="css/style.css"/> -->
	<link rel="stylesheet" href="../css/index_css.css"/>
	<link rel="stylesheet" href="../css/login_css.css"/>
	<link rel="stylesheet" href="../css/content.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
	if(($_SESSION['status'] != "yes") && ($_SESSION['type'] != 1) ) {

	header('location: ../login.php');
	}
?>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
	<!-- Header section -->
	<header class="header-section">
		<a href="../index.html" class="site-logo"><img src="../img/11.png" width="90px" height="60px"></a>

			<!-- <img  id="img1" src="./img/cyber.png"> -->
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="nav-warp">
			<div class="user-panel">
				<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
<!-- 				<a href="#">Login</a> /
				<a href="#">Register</a> -->
			</div>
			<ul class="main-menu">
				<li id="index"><a href="#"><span class="active123">Home</span></a></li>
				<li><a href="./peoples.html">People</a></li>
				<li><a href="./projects.html">Projects</a></li>
				<li><a href="./downloads.html">Downloads</a></li>
				<li><a href="./facilities.html">Facilities</a></li>
				<li><a href="./upcoming_events.html">Upcoming Events</a></li>
				<li><a href="./contact.html">Contact us</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<section class="section-padding">
		<div class="srvcs-container">
			<h1 class="srvcs">
				Upload Resources
				
			</h1>
			<div class="hm-srvcs">
				
			</div>
		</div>
	</section>


	<!-- Features section -->
	<section class="mid">
		<form method="post" enctype="multipart/form-data" action="#">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="row cc002">
							<h1>Title</h1>
							<h1 style="padding-bottom: 45px;">Description</h1>
							<h1>Choose a file to upload</h1>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row cc001">
							<input type="text" name="title" placeholder="title" class="title-css" required="required">
							<textarea type="text" name="desc" class="title-css1" required="required"></textarea>
							<input type="file" name="file123" class="title-css" required="required">
						</div>
					</div>
					<div  class="hhhh0011">
						<input type="submit" name="sbmt" class="hhhh001" style="">
					</div>
				</div>
			</div>
		</form>
	</section>
	
	<!-- Features section end -->


	<!-- Footer top section -->
	<section class="footer-top-section text-white spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-widget about-widget footer-img">
						<img src="../img/11.png" width="120px" height="70px">
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
					<div class="footer-widget small-widget-1">
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
					<div class="footer-widget small-widget-2">
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


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="index.html"><u>Home</u></a></li>
				<li><a href="peoples.html">Peoples</a></li>
				<li><a href="facilities.html">Facilities</a></li>
				<li><a href="upcoming_events.html">Upcoming Events</a></li>
				<li><a href="contact.html">Contact us</a></li>
			</ul>

	<!-- Footer top section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/changecolor.js"></script>

	</body>
</html>
