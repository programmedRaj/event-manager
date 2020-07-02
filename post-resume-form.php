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
		 
		}
		
		if ($confirmed==1){
	
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
	<body>

		<!-- Header -->
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
									
					
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->
		
		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->
		
		

		<!-- Post resume Section -->
		<div class="section post-resume-form-section solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<!-- multistep form -->
					<form action="post_resumeaction.php" method="post" id="post-resume-form" class="post-resume-form multisteps-form">
					  	<fieldset>
						  	<h2 class="form-title text-center dark">Post Details:</h2>
						    <h3 class="step-title text-center dark"> General Information :</h2>							

							
					    	<div class="form-inner">
					    		

								<div class="divider"></div>

								<div class="form-fields-wrapper">
									<h4 class="form-fields-title dark">Contact info</h4>
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
										<input type="hidden"  name="emp_id" value="<?php   echo $id ;  ?>">
											<p class="label">First name</p>
											<input type="text" id="candidate-first-name" name="fn" placeholder="" required>
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Last name</p>
											<input type="text" required id="candidate-last-name" name="ln" placeholder="">
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->									

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Date of birth</p>
											<input type="date" id="candidate-birthdate" name="dbirth" placeholder="" required>
										</div> <!-- end .form-group -->
										
										
										<div class="form-group">
											<p class="label"> Anniversary Date</p>
											<input type="date" id="candidate-birthdate" name="dan" placeholder="" >
										</div> <!-- end .form-group -->
										
										<div class="form-group">
											<p class="label">Address</p>
											<input type="text" id="candidate-address" name="address" placeholder="" required>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Phone number</p>
											<input type="tel"id="candidate-phone-number" name="contact" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="" placeholder="123-456-7890">
										</div> <!-- end .form-group -->
										<div class="form-group">
											<p class="label">Email</p>
											<input type="email" id="candidate-email" name="cemail" placeholder="" required>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

								</div> <!-- end .form-fields-wrapper -->

				                <div class="divider"></div>

								<div class="form-fields-wrapper">
									<h4 class="form-fields-title dark">General info</h4>
									<div class="form-group-wrapper flex space-between items-center">
										<div class="form-group">
											<p class="label">Position</p>
											<input type="text" id="candidate-position" name="cpos" placeholder="" required>
										</div> <!-- end .form-group -->
										
									</div> <!-- end .form-group-wrapper -->									

									

									

									<div class="form-group-wrapper">
										<div class="form-group">
											<p class="label">Introduction about yourself<span>(optional)</span></p>
											<textarea name="cdesc" id="cdesc" rows="6"></textarea>
										</div> <!-- end .form-group -->
									</div> <!-- end .form-group-wrapper -->

									
									<div class="form-group">
											<p class="label">Date of Joining</p>
											<input type="date" id="candidate-birthdate" name="djoin" placeholder="" required>
										</div> <!-- end .form-group -->
								</div> <!-- end .form-fields-wrapper -->
					    		
					    			    		

					    	</div> <!-- end .form-inner -->		


						<fieldset>
						  	
						    <div class="divider"></div>
					    	<div class="form-inner">

								
									<div class="form-fields-wrapper">
									<h4 class="form-fields-title dark">Extras&nbsp;&nbsp;<span></span></h4>
									<div id="clonedInput" class="form-fields-inner clonedInput">

										

										
											
										</div> <!-- end .form-group-wrapper -->

										<div class="form-group-wrapper">
											
										</div> <!-- end .form-group-wrapper -->

									</div><!-- </div> end .form-fields-inner -->

								  								<div class="form-fields-wrapper">
									
									
									<h4 class="form-fields-title dark">Skills<sup>*</sup></h4>
									<p class="label" style="color:#627199;     font-family: 'Montserrat', sans-serif;">Skill name</p>
									
									
									<select name="can_skill" class="form-control" id="candidate-skill" required>
											    <option value="" selected="" disabled=""></option>
											    <option>Chess</option>
											    <option>Android development</option>
											    <option>Marketing</option>
											    <option>Web development</option>
											    <option>ios development</option>
											    <option>Sales</option>
											    
											</select>
											
										
											

										

									 </div>

								    

								</div> <!-- end .form-fields-wrapper -->  

								</div> <!-- end .form-fields-wrapper -->

								<div class="divider"></div>



								<div class="divider"></div>
					    		
					    		<div class="button-wrapper text-center">
					    			<button type="submit" class="button next" name="action">Go to step 2</button>
					    		</div> <!-- end .button-wrapper -->	 	    		

					    	</div> <!-- end .form-inner -->	

									</div><!-- </div> end .form-fields-inner -->

								    

								</div> <!-- end .form-fields-wrapper -->

								

														
					 	</fieldset>							
					 	</fieldset>


						
				

					  	

					 	

					 	

					</form> <!-- end .job-post-form -->

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

<!-- this/post-resume-form.php created, Sun, 05 Aug 2018 11:38:53 GMT -->
</html>


		<?php
		}else{
			?>
			<script>alert("PLEASE activate id !!");</script>
			<script>window.location.href="loggedin.php";</script>
		<?php
		}
		}
	
}else{
	header("Location:index.php");
}

?>