<!DOCTYPE html>
<html lang="en">
	
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body>

		<!-- Header -->
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
					<div class="left">
						<!--div class="logo"><a href="index.php"><img src="images/logo.png" alt="JobPress" class="img-responsive"></a></div-->	
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="index.php">Home</a></li>
								
                                    <li><a href="about.php">About</a></li>
                                    <li class="menu-item-has-children">
										<a href="#">tasks<img src="images/6.gif" height="32" width="62"></img></a>
										<ul>
											<li><a href="loginevent.php">task1<img src="images/6.gif" height="32" width="62"></img></a></li>
											<li><a href="loginevent1.php">task2<img src="images/6.gif" height="32" width="62"></img></a></li>
											<li><a href="loginevent2.php">task3<img src="images/6.gif" height="32" width="62"></img></a></li>
											
											 
										</ul>									
									</li>
									
									<!--<li class="menu-item-has-children">
										<a href="blog-standard.php">Blog</a>
										<ul>
											<li><a href="blog-standard.php">Blog Standard</a></li>
											<li><a href="blog-grid-full-width.php">Blog Grid Full Width</a></li>
											<li><a href="blog-masonry-full-width.php">Blog Masonry Full Width</a></li>
											<li><a href="blog-list.php">Blog List</a></li>
											<li><a href="blog-single-fullwidth-image.php">Blog Single Image</a></li>
											<li><a href="blog-single-fullwidth-video.php">Blog Single Video</a></li>
											<li><a href="blog-single-with-sidebar.php">Blog Single Sidebar</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#0">Pages</a>
										<ul>
											<li><a href="help.php">Help Tabs</a></li>
											<li><a href="contact-us-full-width.php">Contact Us</a></li>
											<li><a href="pricing-plans.php">Pricing plans</a></li>
										</ul>
									</li>-->
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="button-group-merged flex no-column">
							<a href="post-job-form.php" class="button">Post an Event</a>
							<a href="#register" class="button" data-toggle="modal" data-target=".bs-modal-sm">Sign Up</a>
						</div> <!-- end .button-group-merged -->
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
	                        <div class="tab-pane fade" id="login">
	                            <form class="login-form" action="loginaction.php" method="post">

									<div class="form-group">
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control" id="InputEmail1" placeholder="Enter your email" name="email">
									</div>

									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
									</div>
									<div class="checkbox flex space-between">
										
									    <a href="forgotpassword.php">Lost password?</a>
									</div> <!-- end .checkbox -->
									

									<button type="submit" class="button" >Login</button>
									
									

	                            </form> <!-- end .login-form -->
	                        </div> <!-- end login-tab-content -->

	                        <div class="tab-pane fade active in" id="register">
	                            <form class="signup-form" action="index.php" method="post">
                                    <div class="form-group">
									    <label for="InputEmail1">Participants / Organizers Name *</label>
									    <input type="text" class="form-control" id="Input" name="company" placeholder="Enter your Participants/Organizers Name"  required >
									</div>
									<div class="form-group">
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control" id="InputEmail2" name="email" placeholder="Enter your email" required >
									</div>

									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control" id="InputPassword2" name="password" placeholder="Password"  required >
									</div>

									<div class="form-group">
									    <label for="InputPassword2">Confirm Password *</label>
									    <input type="password" class="form-control" id="InputPassword3" name="confirmpassword" placeholder="Password" required>
									</div>

									<div class="form-group">
									    <label for="select1">Register as:</label>
									    <div class="select-wrapper">
									        <select class="form-control" id="select1"name="reg" required >
										        <option>Participant</option>
										        <option>Organizer</option>
										    </select>
									    </div> <!-- end .select-wrapper -->								    
									</div>

									<div class="checkbox">
										<input id="signup-checkbox" type="checkbox" required>
										<label for="signup-checkbox">I agree with the Terms of Use</label>
									</div> <!-- end .checkbox -->

									<button type="submit" class="button">Sign Up</button>
									
									

	                            </form> <!-- end .signup-form -->
								<?php

include ("dbc.php");
if (isset($_POST['company'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['reg']))
{
	$reg=htmlentities($_POST['reg']);
	$company=htmlentities($_POST['company']);
	$email=htmlentities($_POST['email']);
	$password=htmlentities($_POST['password']);
	$cpassword=htmlentities($_POST['confirmpassword']);
	 
		
		if($password==$cpassword)
		{
			$enc_password = md5($password);
			$equery = "SELECT email FROM register WHERE email = '$email'";
			$equery_run = mysql_query($equery);
			if(mysql_num_rows($equery_run)==1)
				{
	   
	   ?>
	   <script>alert("Email Already exist");</script>
	   
	   <?php
	   }
	   else
	   {
			$confirmcode = rand(10000,99999);
			$query="INSERT into register (company,email,password,reg,confirm_code,confirmed) VALUES ('$company','$email','$enc_password','$reg',$confirmcode,0)";
			$query_run=mysql_query($query);
			
			$subject = "Webdroid- Confirm Your Email";

$message = "


<html>
<head>
<title>Webdroid</title>
</head>
<body>

<h2>		Confirm Your Email</h2>
<h3>		Click the link below to verify your account
		https://tsec.sammeyinc.com/emailconfirm.php?email=$email&code=$confirmcode
</h3>		

</body>
</html>

";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$myfromemail = "info@sammeyinc.com";
$headers .= "From: ".$myfromemail;



		@mail($email,$subject,$message,$headers);
			if($query_run==1)
		{
		?>
			<script>alert(" Account created.Successfully!");</script>
		
		<?php
		}
		else
		{
		?>
			<script>alert('something went wrong');</script>	
		<?php
		
		}
		}
				}
		else
		{
			?>
		<script>alert('Password must be same');</script>
		<?php
		}
}
?>
	                        </div> <!-- end signup-tab-content -->
	                    </div> <!-- end .mytabcontent -->
	                </div> <!-- end .modal-body -->
	            </div> <!-- end .modal-content -->
	        </div> <!-- end .modal-dialog -->
	    </div> <!-- end .modal -->

		<!-- Hero Section -->
		<div class="section hero-section transparent" style="background-image: url('images/background01.jpg');">
			<div class="inner">
				<div class="container">
					<div class="job-search-form">
						<h2><span>Latest<sup>100	+</sup></span>events are waiting for you</h2>
						<form class="form-inline flex" method="get" action="search_results.php">
							<div class="form-group">
								<div class="form-group-inner">
									<input type="text" class="form-control" id="input-field-1" placeholder=" Event title (optional) " name="field1" >
									
								</div>
							</div>
							<div class="form-group">							
								<input type="text" class="form-control" id="input-field-2" placeholder=" category " name="field2" required>
								<i class="fa fa-list-alt" aria-hidden="true"></i>
							</div>
							
							
							<button type="submit"  name ="action" class="button"><i class="ion-ios-search-strong"></i></button>
						</form>
						
					</div> <!-- end .job-search-form -->	
				</div> <!-- end .container -->
				
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

	

		<!-- Latest Jobs Section -->
		<div class="section Latest-jobs-section">
			<div class="inner">
				<div class="container">
					<div class="section-top-content flex items-center">
						<h1>Latest Events</h1>
						
					</div> <!-- end .section-top-content -->
					<div class="jobs-table">
						<div class="table-header">
							<div class="table-cells flex">
								<div class="job-title-cell"><h6>Event name</h6></div>
								<div class="job-type-cell"><h6>Type</h6></div>
								<div class="location-cell"><h6>Location</h6></div>
								<div class="expired-date-cell"><h6>Event Date</h6></div>
								<div class="salary-cell"><h6>Prizes worth</h6></div>					
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-header -->
						<?php
						
						$ljquery="SELECT * FROM postjob ORDER BY salary DESC LIMIT 5";
						$ljquery_run=mysql_query($ljquery);
		while($row = mysql_fetch_assoc($ljquery_run))
		{
	
		 
		 $CN = $row['compname'];
		 $JT = $row['jobtitle'];
		 $JTYPE = $row['jobtype'];
		 
		
		 $JLOC = $row['jlocation'];
		 $SALARY = $row['salary'];
		 $EXP = $row['expirydate'];
		 
						
						
						
						?>
						
						
						<div class="table-row">
							<div class="table-cells flex no-wrap">
								<div class="cell job-title-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Event name</h6>
									</div> <!-- end .cell-label -->
									<img src="images/company-logo06.jpg" alt="company-logo" class="img-responsive">
									<div class="content">
										<h4><?php echo $JT;?> </h4>
										<p class="small"><?php echo $CN;?> </p>
									</div> <!-- end .content -->
								</div> <!-- end .job-title-cell -->
								<div class="cell job-type-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Type</h6>
									</div> <!-- end .cell-label -->
									<button type="button" class="button full-time"><?php echo $JTYPE;?> </button>
								</div>
								<div class="cell location-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Location</h6>
									</div> <!-- end .cell-label -->
									<p><?php echo $JLOC;?> </p>
								</div>
								<div class="cell expired-date-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Event date</h6>
									</div> <!-- end .cell-label -->
									<p><?php echo $EXP;?> </p>
								</div>
								<div class="cell salary-cell flex no-column no-wrap">
									<div class="cell-mobile-label">
										<h6>Prizes</h6>
									</div> <!-- end .cell-label -->
									<p><sub><i class="fa fa-rupee"></i></sub><?php echo $SALARY;?> </p>
								</div>
							</div> <!-- end .table-cells -->
						</div> <!-- end .table-row -->						
				<?php		
		}		
						?>
					</div> <!-- end .jobs-table -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<div class="section cta-section parallax text-center" style="background-image: url('images/background02.jpg');">
			<div class="inner">
				<div class="container">
					<h2>Looking for an Event</h2>
					<p class="large light">Join and showcase your skills</p>
					<div class="cta-button">
						
						<a href="#register" class="button" data-toggle="modal" data-target=".bs-modal-sm">Get started now</a>
					</div> <!-- end .cta-button -->
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
						<li>Copyright © rajshah29599@gmail.com </li>
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

</html>