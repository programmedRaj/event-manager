<?php
session_start();
if(isset($_SESSION['seemail'])){
	require "dbc.php";
	$seEmail  = $_SESSION['seemail'];
	$id = $_SESSION['seid'];


$query = mysql_query("SELECT * FROM register WHERE id=$id ");
	$numrow = @mysql_num_rows($query);
	
	if($numrow!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			
		 
		 $email = $row['email'];
		$confirmed = $row['confirmed'];
		$company = $row['company'];
		$reg =$row['reg'];
		
		}
			if($reg=='Organizer'){
			
		if ($confirmed==1){
	
		?>
		
		
		
		
		
		
<!DOCTYPE html>
<html lang="en">
	
<!-- this/post-job-form.php created, Sun, 05 Aug 2018 11:38:56 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>staff appreciation program</title>

		<!-- CSS -->
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Ionicons -->
		<link href="fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<link href="css/owl.theme.default.css" rel="stylesheet">
		<!-- Animate.css -->
		<link href="css/animate.min.css" rel="stylesheet">
		<!--Magnific Popup -->
		<link href="css/magnific-popup.css" rel="stylesheet">
		<!--Tagsinput CSS -->
		<link href="css/tagsinput.css" rel="stylesheet">		
		<!-- Style.css -->
		<link href="css/style.css" rel="stylesheet">

	</head>
	<body>

		<!-- Header -->
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
					<!--div class="left">
						<div class="logo"><a href="index.php"><img src="images/logo.png" alt="JobPress" class="img-responsive"></a></div>	
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active" align ="right"><a href="index.php">&nbsp</a></li>
									
                                    
									
                                    
									
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						
					</div> <!-- end .right -->
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->
		
		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->
		
		<!-- Login/Signup Popup -->
	    <div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent"  id="login-signup-popup" role="dialog" tabindex="-1">
	        <div class="modal-dialog modal-sm login-signup-modal">
	            <div class="modal-content">
	                <div class="popup-tabs">
	                    <ul class="nav nav-tabs" id="myTab">
	                        <li class=""><a data-toggle="tab" href="#login">login</a></li>
	                        <li class="active"><a data-toggle="tab" href="#register">Register</a></li>
	                    </ul>
	                </div> <!-- end .popup-tabs -->
	                <div class="modal-body">
	                    <div class="tab-content" id="myTabContent">
	                        <div class="tab-pane fade active in" id="login">
	                            <form class="login-form">

									<div class="form-group">
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control" id="InputEmail1" placeholder="Enter your email">
									</div>

									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
									</div>

									<div class="checkbox flex space-between">
										<div>
											<input id="sigin-checkbox" type="checkbox">
											<label for="sigin-checkbox">Remember me</label>
										</div>
									    <a href="#0">Lost password?</a>
									</div> <!-- end .checkbox -->

									<button type="button" class="button" data-dismiss="modal">Login</button>
									
									<p class="text-center divider-text small"><span>or login using</span></p>
									
									<div class="social-buttons">
										<ul class="list-unstyled flex space-between">
											<li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
											<li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
											<li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
										</ul>
									</div> <!-- end .social-buttons -->

	                            </form> <!-- end .login-form -->
	                        </div> <!-- end login-tab-content -->

	                        <div class="tab-pane fade" id="register">
	                            <form class="signup-form">
                                    <div class="form-group">
									    <label for="InputEmail1">Candidate/Company Name *</label>
									    <input type="email" class="form-control" id="InputEmail2" placeholder="Enter your Candidate/Company Name" name>
									</div>
									<div class="form-group">
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control" id="InputEmail2" placeholder="Enter your email">
									</div>

									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control" id="InputPassword2" placeholder="Password">
									</div>

									<div class="form-group">
									    <label for="InputPassword2">Confirm Password *</label>
									    <input type="password" class="form-control" id="InputPassword3" placeholder="Password">
									</div>

									<div class="form-group">
									    <label for="select1">Register as:</label>
									    <div class="select-wrapper">
									        <select class="form-control" id="select1">
										        <option>Candidate</option>
										        <option>Company</option>
										    </select>
									    </div> <!-- end .select-wrapper -->								    
									</div>

									<div class="checkbox">
										<input id="signup-checkbox" type="checkbox">
										<label for="signup-checkbox">I agree with the Terms of Use</label>
									</div> <!-- end .checkbox -->

									<button type="button" class="button" data-dismiss="modal">Sign Up</button>
									
									<p class="text-center divider-text small"><span>or login using</span></p>
									
									<div class="social-buttons">
										<ul class="list-unstyled flex space-between">
											<li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
											<li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
											<li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
										</ul>
									</div> <!-- end .social-buttons -->

	                            </form> <!-- end .signup-form -->
	                        </div> <!-- end signup-tab-content -->
	                    </div> <!-- end .mytabcontent -->
	                </div> <!-- end .modal-body -->
	            </div> <!-- end .modal-content -->
	        </div> <!-- end .modal-dialog -->
	    </div> <!-- end .modal -->

		<!-- Post Job Section -->
		<div class="section job-post-form-section solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<!-- multistep form -->
					<form action="companyloginaction.php" method="post" id="job-post-form" class="job-post-form multisteps-form">
					  	

					  	<fieldset>
						  	<h2 class="form-title text-center dark">Post an EVENT</h2>
						    <h3 class="step-title text-center dark">Step 1: LOGIN</h2>

							<ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
								<li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
								<li class="sub-active"><span>1</span></li>
								<li><span>2</span></li>
								<li><span>3</span></li>
							</ul> <!-- end .steps-progress-bar -->

					    	<div class="form-inner">
					    						    		
								<div class="divider"></div>

								<div class="form-fields-wrapper">

																	

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
										
										
											<p class="label">Email<sup>*</sup></p>
											<input type="email" id="employer-username" name="email" placeholder="" required="">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Password<sup>*</sup></p>
											<input type="password" id="employer-email" name="password" placeholder="" required="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

								</div> <!-- end .form-field-wrapper -->

								<div class="divider"></div>

					    		<div class="button-wrapper text-center">
					    			<button type="reset" class="btn btn-danger">Reset</button>
					    			<button type="submit" class="btn btn-primary" >Login</button>
					    		</div> <!-- end .button-wrapper -->			    		

					    	</div> <!-- end .form-inner -->		
							</form>
					 	</fieldset>

					  	

					 	

				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Footer -->
		<div class="section footer transparent" style="background-image: url('images/background03.jpg');">
			<div class="container">
				<div class="top flex space-between items-center">
					
					<ul class="list-unstyled footer-menu flex">
						<li><a href="privacypolicy.php">Privacy Policy</a></li>
						<li><a href="terms.php">Terms of Service</a></li>
						<li><a href="contact.php">contact us</a></li>
					</ul> <!-- end .footer-menu -->				
				</div> <!-- end .top -->
				
				
			</div> <!-- end .container -->
		</div> <!-- end .footer -->


		<!-- Scripts -->
		<!-- jQuery -->		
		<script src="js/jquery-3.1.1.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Wow.js -->
		<script src="js/wow.min.js"></script>
		<!-- Typehead.js -->
		<script src="js/typehead.js"></script>
		<!-- Tagsinput.js -->
		<script src="js/tagsinput.js"></script>
		<!-- Bootstrap Select -->
		<script src="js/bootstrap-select.js"></script>		
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- CountTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- Isotope -->
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<!-- Magnific-Popup -->
		<script src="js/jquery.magnific-popup.js"></script>
		<!-- Scripts.js -->
		<script src="js/scripts.js"></script>

	</body>

<!-- this/post-job-form.php created, Sun, 05 Aug 2018 11:38:56 GMT -->
</html>

<?php
		}else{
			?>
			<script>alert("PLEASE activate id !!");</script>
			<script>window.location.href="loggedin.php";</script>
		<?php
		}
	}else{
		?>
			<script>alert("Candidate can\'t post job !!");</script>
			<script>window.location.href="loggedin.php";</script>
		<?php
	}
		}
	
}else{
	header("Location:index.php");
}

?>