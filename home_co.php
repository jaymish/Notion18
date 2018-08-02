<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	include "sqlconnec.php";
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['username']) ) {
		header("Location: login_co.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users_co WHERE userId=".$_SESSION['username']);
	$userRow=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
<!-- ====Open Sans==== -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700,700italic,800,300italic,600italic' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!-- ====Bootstrap css==== -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- ====Material==== -->
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">

    <!-- ====Font awesome css==== -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ====Animate css==== -->
    <link rel="stylesheet" href="css/animate.css">

    <!-- ====Meanmenu css==== -->
    <link rel="stylesheet" href="css/meanmenu.min.css">

    <!-- ====VenoBox css==== -->
    <link rel="stylesheet" href="css/venobox.css">

    <!-- ====Camera css==== -->
    <link rel="stylesheet" href="css/camera.css">

    <!-- ====Owl carousel 2 css==== -->
    <link rel="stylesheet" href="css/owl.carousel.css">

    <!-- ====Custom css==== -->
    <link rel="stylesheet" href="style.css">

    <!-- ====Favicons==== -->
    <!--<link rel="apple-touch-icon-precomposed" href="img/favicon_app.png">-->
    <link rel="shortcut icon" type="image/png" href="img/Notion1.jpeg" />

    <!-- ====Institute-Course Selector==== -->
    <script type= "text/javascript" src = "js/courses.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
</head>
<body id="body" class="onepage Border_radius border_radius">
	<div class="pealoader_area">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">NOTION</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!--li class="active"><a href="index.php">Back to Article</a></li>
            <!--li><a href="http://www.codingcage.com/search/label/jQuery">jQuery</a></li>
            <li><a href="http://www.codingcage.com/search/label/PHP">PHP</a></li-->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout_co.php?coordinator"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 
	<br>
	<br>
    <div id="registration" class="registration footer-padding">
        <div class="container">
            <div class="row mb70">
                <div class="col-xs-12">
                    <div class="section_title">
                        <h2 class="sec_Hd">SEARCH</h2>
                        <h5 class="sub_title">Search for payment</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="form">
                        <form action="search_co.php" method="post" >
                            <!--input type="text" name="enrollment" placeholder="Enrollment/Roll No." maxlength="12" required-->
                            <input type="text" name="Search_1" placeholder="ENter Email" required>
                    </div>
                </div>                
                <div class="col-xs-12 col-sm-4">
                    <div class="form">
                        <!--<form action="#" method="post">-->
                            <button name="submit" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PRICING & REGISTRATION END ======-->

	<!--====== FOOTER AREA START ======-->
    <footer id="contact" class="footer_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="contact_info">
                                <h3>Contact <span>Us</span></h3>
                                <ul class="address_info">
                                    <li><i class="fa fa-map-marker"></i> L.J. Campus, Between Sarkhej Circle & Kataria Motors, S.G. Road, Ahmedabad - 382210</li>
                                    <li><i class="fa fa-envelope-o"></i> notion@ljinstitutes.edu.in</a></li>
                                    <li><i class="fa fa-phone"></i> +91-9558233754</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="iconlink">
                            <li>
                                <a href="https://www.facebook.com/notionthetechfest/" target="_blank"> 
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/notion_2.0/" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <p>&copy; Notion'18. All Rights Reserved</p>
                    </div>
                </div>
            </div>
            <div class="back-to-top">
                <a href="#">
                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </footer>
    <!--====== FOOTER AREA END ======-->
	<!-- ====jQuery Latest version==== -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>

    <!-- ====Google Maps API==== -->
    <!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->

    <!-- ====Bootstrap JS==== -->
    <script src="js/bootstrap.min.js"></script>

    <!-- ====jQuery Counterup==== -->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>

    <!-- ====jQuery Countdown==== -->
    <script src="js/jquery.lwtCountdown-1.0.js"></script>

    <!-- ====jQuery Meanmenu==== -->
    <script src="js/jquery.meanmenu.min.js"></script>

    <!-- ====jQuery easing==== -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- ====jQuery owl carousel==== -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- ====jQuery parallax==== -->
    <script src="js/jquery.parallax-1.1.3.js"></script>

    <!-- ====jQuery Tubular==== -->
    <script src="js/jquery.tubular.1.0.js"></script>

    <!-- ====jQuery VenoBox==== -->
    <script src="js/venobox.min.js"></script>

    <!-- ====jQuery Camera==== -->
    <script src="js/camera.min.js"></script>

    <!-- ====jQuery Nicescroll and knob==== -->
    <script src="js/nicescroll.js"></script>


    <!--Opacity & Other IE fix for older browser-->
    <!--[if lte IE 8]>
            <script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
        <![endif]-->

    <!-- ====jQuery main script==== -->
    <script src="js/main.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>