<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	include "sqlconnec.php";
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: home.php");
		exit;
	}
	
	$error = false;
	
	if( isset($_POST['btn-login']) ) {	
		
		// prevent sql injections/ clear user invalid inputs
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// prevent sql injections / clear user invalid inputs
		
		if(empty($email)){
			$error = true;
			$emailError = "Please enter your email address.";
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		}
		
		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		// if there's no error, continue to login
		if (!$error) {
			
			$password = hash('sha256', $pass); // password hashing using SHA256
		
			$res=mysqli_query($conn,"SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
			$row=mysqli_fetch_array($res);
			$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
			
			if( $count == 1 && $row['userPass']==$password ) {
				$_SESSION['user'] = $row['userId'];
				header("Location: home.php");
			} else {
				$errMSG = "Incorrect Credentials, Try again...";
			}
				
		}
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coordinators' - Login & Registration</title>

    <!-- ====Login form==== -->
    <link rel="stylesheet" href="css/login.css" type="text/css" media="all" />

	<!-- ====Font awesome css==== -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome-login.css">

    <!-- ====Meanmenu css==== -->
    <link rel="stylesheet" href="css/meanmenu.min.css">

    <!-- ====Favicons==== -->
    <link rel="shortcut icon" type="image/png" href="img/logo1.png" />

    <!-- online-fonts -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
	<!-- //online-fonts -->

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
<div class="center-container">
	<div class="main-content-agile">
		<div class="sub-main-w3">
			<div class="wthree-pro">
				<h2>Login</h2>
			</div>
		    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
	            <?php
				if ( isset($errMSG) ) {
					?>
					<div class="form-group">
	            	<div class="alert alert-danger">
					<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
	                </div>
	            	</div>
	                <?php
				}
				?>
	            <div class="form-group">
	            	<div class="pom-agile">
		            	<input type="email" name="email" class="user form-control" placeholder="E-mail" value="<?php echo $email;?>" maxlength="40"/>
		            	<span class="icon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
	                </div>
	                <span class="text-danger"><?php echo $emailError; ?></span>
	            </div>
	            
	            <div class="form-group">
	            	<div class="pom-agile">
	            	<input type="password" name="pass" class="pass form-control" placeholder="Password" maxlength="15" required="" />
	            	<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
	                </div>
	                <span class="text-danger"><?php echo $passError; ?></span>
	            </div>

	            <div class="sub-w3l">
	            	<div class="right-w3l">
	            		<input type="submit" value="Login" name="btn-login">
	            	</div>
	            	<h6><a href="register.php">Sign Up Here</a></h6>
	            </div>
		    </form>
		</div>
	</div>
</div>

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