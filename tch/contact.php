<?php if(!isset($_SESSION)) {session_start();}?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>nav</title>
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
	<link rel="stylesheet" href="../css/contact_us.css"/>
	<link rel="stylesheet" href="../css/content.css"/>

</head>
<body>

<?php
	if(($_SESSION['status'] != "yes") ) {

	header('location: ../login.php');
	}
?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<div id="nav1">

	<!-- Header section -->
	<header class="header-section">
		<a href="../index.php" class="site-logo"><img src="../img/11.png" width="90px" height="60px"></a>

			<!-- <img  id="img1" src="./img/cyber.png"> -->
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="nav-warp">
			<button id="gg001" class="user-panel fff01" >
				<?php 
				echo $_SESSION['username'];
				?>
			</button>
			<ul id="ul001">
				<a href="changePass.php"><li class="hhhhh009">Change Password</li></a>
				<li class="hhhhh009">
    				<form method="post" enctype="multipart/form-data" action="logout.php">
    					<button class="logout">log out</button>
					</form>
				</li>
			</ul>
			<ul class="main-menu">
				<li id="index"><a href="./index.php">Home</a></li>
				<li><a href="./peoples.php">People</a></li>
				<li><a href="./projects.php">Projects</a></li>
				<li><a href="./resources.php">Downloads</a></li>
				<li><a href="./facilities.php">Facilities</a></li>
				<?php 
					if($_SESSION['type'] == 1) {
						echo '<li><a href="./edt/UpdateResources.php">Edit</a></li>';
					}
				?>
				<li><a href="./upcoming_events.php">Upcoming Events</a></li>
				<li><a href="#"><span class="active123">Contact us</span></a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->
	</div>

	<section class="section-padding">
		<div class="srvcs-container">
			<h1 class="srvcs">
				Contact
			</h1>
			<div class="hm-srvcs">
				
			</div>
		</div>
	</section>
<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 contact-text">
					<h4>Contact Info</h4>
					<p>Meerut Institute of Engineering & Technology</p>
					<div class="cont-info">
						<div class="ci-icon">
							<img src="../img/icons/1.png" alt="">
						</div>
						<span>N.H. 58, Delhi-Roorkee Highway, Baghpat Road Bypass Crossing Meerut - 250005. UP (India)</span>
					</div>
					<div class="cont-info">
						<div class="ci-icon">
							<img src="../img/icons/2.png" alt="">
						</div>
						<span>Phone : 0121-2439019/2439057</span>
					</div>
					<div class="cont-info">
						<div class="ci-icon">
							<img src="../img/icons/3.png" alt="">
						</div>
						<span>Email : contact@miet.ac.in</span>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="contact-form">
						<div class="row">
							<div class="col-md-6">
								<input type="text" placeholder="Your name">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Your e-mail">
							</div>
							<div class="col-md-12">
								<input type="text" placeholder="Subject">
								<textarea placeholder="Message"></textarea>
								<button class="site-btn">
							<img src="../img/baseline_send_white_18dp.png" style="width: 20px,height: 20px;" alt="">
								Send</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="map" id="map-canvas" ><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13961.352510671895!2d77.6378514!3d28.9773498!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390c668fdea4d87f%3A0x8795def814a486e7!2sMIET+College!5e0!3m2!1sen!2sin!4v1549441361429" width="100%" height="685" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	</section>
	<!-- Footer top section -->
	<section class="footer-top-section text-white spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-widget about-widget footer-img">
						<img src=".././img/11.png" width="120px" height="70px">
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


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="peoples.php">Peoples</a></li>
				<li><a href="facilities.php">Faciities</a></li>
				<li><a href="upcoming_events.php">Upcoming Events</a></li>
				<li><a href="contact.php"><u>Contact us</u></a></li>
			</ul>

	<!-- Footer top section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/custom.js"></script>
	</body>
</html>
