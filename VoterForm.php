<?php 
include_once 'registerVoter.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>E-voting | Home </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Election Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!---strat-slider---->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!---//-slider---->
</head>
<body>
<!-- header -->
	<div class="header_bg">
		<div class="container">
			<!-----start-header----->
			<div class="header">
				<div class="logo">
                                    <a href="index.php"><img src="images/logo1.png" alt=" " /></a>
				</div>
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
                                                    <li class="act"><a href="index.php">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Elections<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="party">
											<ul class="multi-column-dropdown">
												<li><a href="currentelection.php">Current Elections</a></li>
												<li class="divider"></li>
												<li><a href="pastelection.php">Past Elections</a></li>
												<li class="divider"></li>
												<li><a href="future.php">Future Elections</a></li>
											</ul>
										</div>
									</div>
								</ul>
							</li>
							<li><a href="voterForm.php">Registration</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="statistics.php">Statistics</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
			</div>
		</div>
	</div>
	<div class="header_bottom">
	</div>
<!-- //end-header -->
<!-- banner -->
	<div class="banner">
		<div class="container">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="banner-info">
									<div class="dummy_text">
										<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna 
											aliqua.</h1>
										</h1>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<div class="dummy_text">
										<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna 
											aliqua.
										</h1>
									</div>
								</div>
							</li>
							<li>
								<div class="banner-info">
									<div class="dummy_text">
										<h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
											sed do eiusmod tempor incididunt ut labore et dolore magna 
											aliqua.
										</h1>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<!-- FlexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
										$(window).load(function(){
										  $('.flexslider').flexslider({
											animation: "slide",
											start: function(slider){
											  $('body').removeClass('loading');
											}
										  });
										});
									  </script>
			<!-- //FlexSlider -->
	</div>


<!-- //banner-bottom -->
<!-- body_grids -->
	<div class="wlcome">
		<div class="container">
			<div class="wlcome-grids">
				<div class="col-md-7 wlcome-grid-left">
					
					<div class="services">
						
						<div class="banner-bottom-video-grid-left">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							  <div id="content">
                                                                <div id="mainform">
                                                                    <form action="VoterForm.php" method="POST">
                                                                    <div class="register_form">
                                                                        <h2>Register Here</h2><br/>
                                                                        <?php if(isset($error)){
                                                                             echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';  }?>

                                                                         <?php if(isset($success)){
                                                                             echo '<div class="alert alert-success" role="alert">'.$success.'</div>';  }?>

                                                                        <div class="form_elements">
                                                                          <label for="Username">First_Name:</label><br>
                                                                          <input type ="text" class="form-control" name="fname" id="fname"  />
                                                                        </div> <!--end form-element-->
                                                                                  <br>
                                                                        <div class="form_elements">
                                                                            <label for="Username">Last_Name:</label><br>
                                                                            <input type ="text" class="form-control" name="lname" id="fname"  />
                                                                        </div> <!--end form-element-->
                                                                                  <br>
                                                                        <div class="form_elements">
                                                                            <label for="Username">National_Id:</label><br>
                                                                            <input type ="text" class="form-control" name="national_id" id="national_id"   />
                                                                        </div> <!--end form-element-->
                                                                                    <br>
                                                                         <div class="form_elements">
                                                                            <label for="Username">Ps_Code:</label><br>
                                                                            <input type ="text" class="form-control" name="ps_code" id="ps_code"   />
                                                                        </div> <!--end form-element-->
                                                                                    <br>
                                                                        <div class="form_elements">
                                                                            <label for="Username">Const_Code:</label><br>
                                                                            <input type ="text" class="form-control" name="const_code" id="const_code"   />
                                                                        </div> <!--end form-element-->
                                                                                    <br>
                                                                        <div class="form_elements">
                                                                            <label for="Username">DOB:</label><br>
                                                                            <input type ="date" class="form-control" name="dob" id="dob"   />
                                                                        </div> <!--end form-element-->
                                                                                        <br>
                                                                        <div class="form_elements">
                                                                            <label for="Username">Region</label><br>
                                                                            <input type ="text" class="form-control" name="region" id="region" />
                                                                        </div> <!--end form-element-->
                                                                                        <br>
                                                                        <div class="form_elements">
                                                                            <label for="Username">Sub_City </label><br>
                                                                            <input type ="text" class="form-control" name="subcity" id="subcity"   />
                                                                        </div> <!--end form-element-->
                                                                                        <br>
                                                                        <div class="form_elements">
                                                                            <label for="Username">Woreda: </label><br>
                                                                            <input type ="text" class="form-control" name="woreda" id="woreda"  />
                                                                        </div> <!--end form-element-->
                                                                                        <br>
                                                                        <div class="form_elements">
                                                                            <label for="Username">Kebele: </label><br>
                                                                            <input type ="text" class="form-control" name="kebele" id="kebele"  />
                                                                        </div> <!--end form-element-->
                                                                                        <br>
                                                                         <div class="form_elements">
                                                                            <label for="Username">House_No: </label><br>
                                                                            <input type ="number" class="form-control" name="houseNo" id="houseNo"  />
                                                                        </div> <!--end form-element-->
                                                                                    <br>
                                                                        <div class="form_elements">
                                                                            <label for="Username">Phone Number: </label><br>
                                                                            <input type ="number" class="form-control" name="phonenumber" id="phonenumber" placeholder="+251"  />
                                                                        </div> <!--end form-element-->
                                                                                    <br> 
                                                                        <div class="form_field">
                                                                                <label for="gender">Gender:<br></label>
                                                                                <select name="gender_name" id="gender_name" class="form-control">
                                                                                    <option value="">Select</option>
                                                                                    <option value="male"> Male </option>
                                                                                    <option value="female">Female</option>
                                                                                </select>
                                                                        </div>
                                                                                    <br>

                                                                        <div class="form_elements">
                                                                            <label for="Username">Health_Status: </label><br>
                                                                            <input type ="text" class="form-control" name="healthstatus" id="healthstatus"  />
                                                                        </div> <!--end form-element-->
                                                                                    <br>
                                                                        <div class="form_elements">
                                                                            <input type ="submit" name="register" id="register" class="btn btn-success" value="register" />
                                                                        </div> <!--end form-element-->
                                                                   </div>


                                                                  </form>
                                                                </div> <!--end form-->
                                                            </div> <!--end content-->
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 wlcome-grid-right">
					
					<div class="video">
						<h4>Election Video</h4>
						<iframe src="https://player.vimeo.com/video/61220793?color=ffffff&title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
					<div class="upcoming">
						<h4>Upcoming Events</h4>
						<ul>
							<li><a href="#">Duis aute irure dolor in reprehenderit.</a><span>December 15, 2015</span></li>
							<li><a href="#">Praesent vitae eros eget.</a><span>December 20, 2015</span></li>
							<li><a href="#">rutrum sed sem quis venenatis.</a><span>December 25, 2015</span></li>
							<li><a href="#">eros eget tellus tristique bibendum.</a><span>December 28, 2015</span></li>
							<li><a href="#">excepturi sint occaecati.</a><span>January 3, 2016</span></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

<!-- //footer-top -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<p>HALOVIETNAM LTD
						66, Dang Van ngu, Dong Da
						Hanoi, Vietnam.
					<a href="mailto:info@example.com">contact@example.com</a>
					<p>Phone : +844 35149182</p>
				</div>
				<div class="col-md-2 footer-grid">
					<ul>
						<li><a href="contact.phph">Contact</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Terms</a></li>
					</ul>
				</div>
				<div class="col-md-2 footer-grid">
					<ul>
						<li><a href="#">Download</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Documents</a></li>
					</ul>
				</div>
				<div class="col-md-2 footer-grid">
					<ul>
						<li><a href="#">Venenatis</a></li>
						<li><a href="#">Extras</a></li>
						<li><a href="#">Forums</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-left">
						<a href="#"><img src="images/1.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="images/2.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="images/3.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="images/4.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="images/5.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="footer-grid-left">
						<a href="#"><img src="images/p1.jpg" alt=" " class="img-responsve" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="footer-copy">
				<p>&copy 2015 Election. All rights reserved | Design by <a href="http://How2ranO.com">How2ranO.</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
		<!-- scroll_top_btn -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
<!-- for bootstrap working -->
	 <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
</body>
</html>