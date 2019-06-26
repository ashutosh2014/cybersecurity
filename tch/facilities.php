<?php if(!isset($_SESSION)) {session_start();}?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Facilites</title>
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
	<link rel="stylesheet" type="text/css" href="../css/facilities.css">
	<link rel="stylesheet" href="../css/content.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

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
                <li id="index"><a href="./index.php">Home</span></a></li>
                <li><a href="./peoples.php">People</a></li>
                <li><a href="./projects.php">Projects</a></li>
                <li><a href="./resources.php">Downloads</a></li>
                <li><a href="./facilities.php"><span class="active123">Facilities</span></a></li>
                <?php 
                    if($_SESSION['type'] == 1) {
                        echo '<li><a href="./edt/UpdateResources.php">Edit</a></li>';
                    }
                ?>
                <li><a href="./upcoming_events.php">Upcoming Events</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
        </div>
    </header>
	</div>
	<!-- Header section end -->



	<section class="section-padding">
		<div class="srvcs-container">
			<h1 class="srvcs">
				Facilities
				
			</h1>
			<div class="hm-srvcs">
				
			</div>
		</div>
	</section>
	<section class="section-padding1">
		<div class="srvcs1">
				<div class="tab">
					<div class="tabcolor-1">
						<button class="tablinks  active" onclick="openCity(event, 'London')">General Facilities</button>
					</div>
				  	<div class="tabcolor-2">
						<button class="tablinks" onclick="openCity(event, 'Paris')">Lab Facilities</button>
					</div>
				  	<div class="tabcolor-3">
						<button class="tablinks" onclick="openCity(event, 'Tokyo')">Facilities Management</button>
					</div>
				</div>

				<div id="London" class="tabcontent dispal">
					<p class="dprtmnt">The department is equipped with state-of-the-art facilities to encourage research and to enable students to learn, understand and apply concepts.</p>
					<ul type="disc" class="general-faclilites">
						<li>
							<strong>Meeting Room and Seminar Hall:</strong>
							The department has a meeting room equipped with LCD Projector and teleconferencing facilities. The department also has a Seminar Hall which has a seating capacity of 100. The seminar hall is used for conducting classes, seminars and workshops etc.
						</li>
						<li>
							<strong>Department Library</strong>: 
							Apart from the central library with e-library facility, the CSE dept library also has about 2500 books.
						</li>
						<li>
							<strong>Computing Facilities</strong>:
							The department has a data centre equipped with high end server systems. A full list of the server systems available can be found <a href="#">here</a>.
						</li>
						<li>
							<strong>Networking accessories:&nbsp;</strong>
							Backbone connectivity consisting of 24 Port Foundary make L3 Manageable distribution switch with  SMF modules, Nortel BES101024T x 2 Switches, 24 Port Cisco catalyst  switch,  48 Port Linksys SRW 2484G x 2 Switches,  Dlink DES3550 x 4, Dlink DES3526 x 4, Intel Express 410T etc. The LAN which in turn connected to the campus wide internet connectivity through Central Computer Centre of the institute. 
						</li>
						<li>
							<strong>Printer/Other Peripherals:&nbsp;</strong>
							There are more than 15 LaserJet Printers,  LCD Projector, 40” LCD TV etc for academic activities support.
						</li>
					</ul>
				</div>

				<div id="Paris" class="tabcontent">
				  	<p class="dprtmnt">The department has 12 labs which cater to the needs of students and research scholars. The labs are accessible to the research scholars 24/7 and are equipped with the latest machines and peripherals like printers and scanners. Every system operates on WIndows and Linux operating systems and provide students access to a variety of softwares. </p>
					<ul type="disc" class="general-faclilites">
						<li><a href="#">Systems & Networks Lab</a></li>
						<li><a href="#">Data Informatics & Analytics Lab</a></li>
						<li><a href="#">Microprocessor Lab</a></li>
						<li><a href="#">Network Engineering Lab</a></li>
						<li><a href="#">Internet & Web Engineering Lab</a></li>
						<li><a href="#">Image and Speech Processing Lab</a></li>
						<li><a href="#">Information Security Lab</a></li>
						<li><a href="#">Intel E-Commerce & Multi-Core Lab  (M.Tech (CSE)-Project Lab)</a></li>
						<li><a href="#">M.Tech. (Research) Lab</a></li>
						<li><a href="#">Distributed & Cloud Computing Lab</a></li>
						<li><a href="#">Advanced  Computing Lab (Ist Year PG)</a></li>
						<li><a href="#">Algorithms Lab</a></li>
				</div>

				<div id="Tokyo" class="tabcontent">
					<div class="dprtmnt">To register system related  issues:  Submit</div>
					<div class="dprtmnt">To view the status:  View</div>
				</div>

		</div>
	</section>
	<!-- Footer top section -->
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
							<!--<div class="col-sm-6">
								<ul>
									<li><a href="">Web Hosting</a></li>
									<li><a href="">WordPress Hosting</a></li>
									<li><a href="">VPS Hosting</a></li>
									<li><a href="">Cloud Server</a></li>
								</ul>
							</div>-->
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
		</div>
	</section>
	<!-- Footer top section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="peoples.php">Peoples</a></li>
				<li><a href="facilities.php"><u>Facilities</u></a></li>
				<li><a href="upcoming_events.php">Upcoming Events</a></li>
				<li><a href="contact.php">Contact us</a></li>
			</ul>
			
	<!-- Footer top section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/circle-progress.min.js"></script>
	<script src="../js/main.js"></script>
    <script src="../js/changecolor.js"></script>
	<script src="../js/custom.js"></script>

	</body>
</html>
