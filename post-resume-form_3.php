<?php
session_start();
if(isset($_SESSION['seemail'])){
	require "dbc.php";
	$seEmail  = $_SESSION['seemail'];
	$id = $_SESSION['seid'];


$query = mysql_query("SELECT * FROM register WHERE id=$id");
	$numrow = @mysql_num_rows($query);
	
	if($numrow!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			
		 
		 $email = $row['email'];
		$confirmed = $row['confirmed'];
		$company = $row['company'];
		
		 
		}
		?>


<!DOCTYPE html>
<html lang="en">
	
<!-- this/post-resume-form.php created, Sun, 05 Aug 2018 11:38:52 GMT -->
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
	
	<!-- multistep form -->
	
	
	<?php
$pjquery = mysql_query("SELECT * FROM resume WHERE emp_id=$id");
	$numrow = @mysql_num_rows($pjquery);
	
	
	
		while($row = mysql_fetch_assoc($pjquery))
		{
			
		 
		 $fname = $row['fname'];
		 $lname = $row['lname'];
		 $dob = $row['dob'];
		 $address = $row['addr'];
		 $phone = $row['phn'];
		 $emailid = $row['emailid'];
		 $position = $row['position'];
		 $language = $row['language'];
		 
		 $hdegree = $row['hdegree'];
		 
		 $intro = $row['intro'];
		
		
		
		 $skills= $row['skill_name'];
		 
		}
		?>
	<body>

		<!-- Header -->
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
								
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="index.php">Home</a></li>
									
                                   							
									</li>
									
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
		
		
<fieldset>
						 

					 		<div class="form-inner">
						    	
						        <div class="profile-wrapper">

									<div class="profile-info profile-section flex no-column no-wrap">
										<div class="profile-picture">
											<img src="images/rock.png" width="100px" height="100px" alt="candidate-picture" class="img-responsive">
										</div> <!-- end .user-picture -->
										<div class="profile-meta">
											<h4 class="dark"><?php  echo "$fname $lname";  ?></h4>
											<p> Date of birth  <?php  echo "$dob";  ?>(y-m-d)</p>
											<div class="profile-contact flex items-center no-wrap no-column">
												<h6 class="contact-location"><?php  echo "$address";  ?></h6>
												<h6 class="contact-phone"><?php  echo "$phone";  ?></h6>
												<h6 class="contact-email"><?php  echo "$emailid";  ?></h6>
											</div> <!-- end .profile-contact -->
											
										</div> <!-- end .profile-meta -->
									</div> <!-- end .profile-info -->

									<div class="divider"></div>

									<div class="profile-about profile-section">
										<h3 class="dark profile-title">About me<span><i class="ion-edit"></i></span></h3>
										<p><h4 class="dark">Intro :</h4><?php echo"$intro"; ?></p><br>
										<p><h4 class="dark">Date of anniversary :</h4><?php echo"$language"; ?></p><br>
										<p><h4 class="dark">Date of joining Company :</h4><?php echo"$hdegree"; ?></p><br>
										
										<p><h4 class="dark">Position :</h4><?php  echo "$position";  ?></p>
	
									
										
										
									</div> <!-- end .profile-about -->

									<div class="divider"></div>




									

									<div class="divider"></div>

									<div class="profile-skills-wrapper profile-section">
										<h3 class="dark profile-title">Summary skill<span><i class="ion-edit"></i><br><?php echo "$skills" ?></span></h3>
										

						        </div> <!-- end .profile-wrapper -->

								<div class="divider"></div>
<form action="loggedin.php">
					    		<div class="button-wrapper text-center">
					    			
					    			<button type="submit" class="button next">Submit</button>
					    		</div> <!-- end .button-wrapper -->	
</form>
					 		</div> <!-- end .form-inner -->
					 	</fieldset>

					 	
						
						
						
						
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

<!-- this/post-resume-form.php created, Sun, 05 Aug 2018 11:38:53 GMT -->
</html>						

<?php
	}
}else{
	header("Location:post-job-form.php");
}

?>