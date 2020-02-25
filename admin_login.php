<?php


if(!empty($_POST['username'])){

    if($_POST['username'] == 'admin@interweb'){
        if($_POST['password'] == 'inter.web@@admin'){
            ?><script type="text/javascript">location.href= 'admin.php';</script><?
        }else{
            ?><script type="text/javascript">alert('Invalid Login')</script><?
        }
    }else{
        ?><script type="text/javascript">alert('Invalid Login')</script><?
    }
      
    
}
 

?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo: Official Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
                        <h1>Inter Web Admin </h1>
						<h2><i>[ Confidential ]</i></h2>
                    </div>
                    
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Login</h2>
						<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<div class="row form-group">
								<div class="col-md-6">
									<label for="username">Username</label>
									<input type="text" id="username" name="username" class="form-control" placeholder="Username">
								</div>
								<div class="col-md-6">
									<label for="password">Password</label>
									<input type="password" id="password" name="password" class="form-control" placeholder="Password">
								</div>
							</div>

							
							<div class="form-group">
								<input type="submit" value="Login" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>
		
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>About Company</h4>
						<p>Inter Web® iDirect Broadband service combines the benefits of the iDirect platform 
							and years of our SATCOM engineering, delivering legendary broadband experience to every customer.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 col-md-push-1 colorlib-widget">
						<h4>Products &Services</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li>VSAT Network</a></li>
								<li>iDirect Broadband</a></li>
								<li>UHP Broadband</a></li>
								<li>Private Network</a></li>
								<li>Hubless Mesh</a></li>
								<li>Sentinel Bandwidth</a></li>
								<li>IoT and M2M</a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 col-md-push-1 colorlib-widget">
						<h4>Solution</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li>Enterprise</a></li>
								<li>ISP</a></li>
								<li>Government and Military</a></li>
								<li>Maritime</a></li>
								<li>Cellular</a></li>
								<li>Solar Energy</a></li>
								<li>Professional Training</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Info</h4>
						<ul class="colorlib-footer-links">
							<li>No 34 Tamale street,<br /> Off Barnenda street,<br /> Wuse Zone 3, Abuja</li>
							<li><a href="tel://1234567920"><i class="icon-phone"></i>0806 909 6561</a></li>
							<li><a href="mailto:info@yoursite.com"><i class="icon-envelope"></i> info@interweb.ng</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
     					<small class="block">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Inter Web SATCOM Limited.  <br>Developer <a href="http://agregsproduction.herokuapp.com" target="_blank">A Gregs Production</a></small>
    					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

