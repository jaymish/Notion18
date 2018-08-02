<?php
	ob_start();
	session_start();
	if( isset($_SESSION['user'])!="" ){
		header("Location: home.php");
	}
	include_once 'dbconnect.php';
	include "sqlconnec.php";
	$error = false;

	if ( isset($_POST['btn-signup']) ) {
		
		// clean user inputs to prevent sql injections
		$name = trim($_POST['name']);
		$name = strip_tags($name);
		$name = htmlspecialchars($name);
		
		$enum = trim($_POST['enum']);
		$enum = strip_tags($enum);
		$enum = htmlspecialchars($enum);
		
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		
		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "Please enter your full name.";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
		}
		
		// basic enrollment validation
		if (empty($enum)) {
			$error = true;
			$enumError = "Please enter your enrollemnt number.";
		} else if (strlen($enum) < 3) {
			$error = true;
			$enumError = "Name must have atleat 3 characters.";
		}
		
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			// check email exist or not
			$query = "SELECT userEmail FROM users WHERE userEmail='$email'";
			$result = mysqli_query($conn,$query);
			$count = mysqli_num_rows($result);
			$query_1 = "SELECT userEmail FROM temp_users WHERE userEmail='$email'";
			$result_1 = mysqli_query($conn,$query_1);
			$count_1 = mysqli_num_rows($result_1);
			if($count!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
			else if($count_1!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
		}
		// password validation
		if (empty($pass)){
			$error = true;
			$passError = "Please enter password.";
		} else if(strlen($pass) < 6) {
			$error = true;
			$passError = "Password must have atleast 6 characters.";
		}
		
		// password encrypt using SHA256();
		$password = hash('sha256', $pass);
		
		// if there's no error, continue to signup
		if( !$error ) {
			
			$query = "INSERT INTO temp_users(userName,enum,userEmail,userPass) VALUES('".$name."','".$enum."','".$email."','".$password."')";
			$res = mysqli_query($conn,$query);
				
			if ($res) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you may login now";
				unset($name);
				unset($email);
				unset($pass);
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
		
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Coordinators' - Registration</title>

 <!-- ====Login form==== -->
    <link rel="stylesheet" href="css/register.css" type="text/css" media="all" />

	<!-- ====Font awesome css==== -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome-login.css">

    <!-- ====Meanmenu css==== -->
    <link rel="stylesheet" href="css/meanmenu.min.css">

    <!-- ====Favicons==== -->
    <link rel="shortcut icon" type="image/png" href="img/Notion1.jpeg" />

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
				<h2>Sign Up</h2>
			</div>
		    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
	            <?php
				if ( isset($errMSG) ) {
					?>
					<div class="form-group">
	            	<div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
					<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
	                </div>
	            	</div>
	                <?php
				}
				?>
	            <div class="form-group">
	            	<div class="pom-agile">
		            	<input type="text" name="name" class="user form-control" placeholder="Enter Your Name" maxlength="50" value="<?php echo $name ?>"/>
		           		<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
	                </div>
	                <span class="text-danger"><?php echo $nameError; ?></span>
	            </div>
				
				<div class="form-group">
	            	<div class="pom-agile">
		            	<input type="text" name="enum" class="user form-control" placeholder="Enter Enrollment No." maxlength="50" value="<?php echo $enum ?>"/>
		            	<span class="icon1"><i class="fa fa-key" aria-hidden="true"></i></span>
	                </div>
	                <span class="text-danger"><?php echo $nameError; ?></span>
	            </div>
	            
	            <div class="form-group">
	            	<div class="pom-agile">
	            	<input type="email" name="email" class="user form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>"/>
	            	<span class="icon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
	                </div>
	                <span class="text-danger"><?php echo $emailError; ?></span>
	            </div>
	            
	            <div class="form-group">
	            	<div class="pom-agile">
	            	<input type="password" name="pass" class="user form-control" placeholder="Enter Password" maxlength="15"/>
	            	<span class="icon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
	                </div>
	                <span class="text-danger"><?php echo $passError; ?></span>
	            </div>
	            
	            <div class="sub-w3l">
	            	<div class="right-w3l">
	            		<input type="submit" value="Sign Up" name="btn-signup">
	            	</div>
	            	<h6><a href="login.php">Sign In Here</a></h6>
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