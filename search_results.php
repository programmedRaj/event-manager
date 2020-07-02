<?php

include ("dbc.php");
if (isset($_GET['action']))

{



$field1=htmlentities($_GET['field1']);
$field2=htmlentities($_GET['field2']);





?>

<!DOCTYPE html>
<html lang="en">
	
<!-- this/candidates-listing.php created, Sun, 05 Aug 2018 11:38:34 GMT -->
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
					<div class="left">
						<!--div class="logo"><a href="index.php"><img src="images/logo.png" alt="JobPress" class="img-responsive"></a></div-->	
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="index.php">Home</a></li>
									
                                    
									
									
                                    <li><a href="about.php">About</a></li>
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
							<a href="#register" class="button" data-toggle="modal" data-target=".bs-modal-sm">Login</a>
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
	   

		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					
					<h2 class="breadcrumb-title">Showing all Events..</h2>
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Candidates Listing Section -->
		<?php
		$query ="SELECT * FROM postjob WHERE jobtitle LIKE '".mysql_real_escape_string($field1)."%' OR jobtype LIKE '%".mysql_real_escape_string($field2)."'";

			  $query_run = mysql_query($query);
      $query_num_rows = @mysql_num_rows($query_run);

		?>
		<div class="section candidates-listing solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="page-content flex no-wrap space-between">
						<div class="left-content">
							<div class="top flex space-between no-wrap items-center">
								<h6><span><?php echo "$query_num_rows result found";?></span></h6>
								<div class="spacer-xs-m"></div>
								
							</div> <!-- end .top -->

							<div class="candidates-list">
									
									<?php
		
      if($query_num_rows>=1) {
      //echo $query_num_rows.' results found:<br>';
      while($query_row = mysql_fetch_assoc($query_run)) {
		  
				$name = $query_row['compname'];
				$job_id=$query_row['id'];
				$salary=$query_row['salary'];
				$loc=$query_row['jlocation'];
				$jobtitle=$query_row['jobtitle'];
				
				$jtype=$query_row['jobtype'];
				
		  
		
      ?>
	  								<div class="candidate flex no-wrap no-column">

	  <div class="candidate-image">
										<img src="images/candidate01.jpg" alt="candidate-image" class="img-responsive">
									</div> <!-- end .candidate-image -->
									<div class="candidate-info">
										<h4 class="candidate-name"><?php echo $name; ?></h4>
										<input type="hidden" value="<?php  echo $job_id; ?>" id="inputid" >
										<h5 class="candidate-designation"><?php echo $jobtitle; ?></h5>
	
										<button type="button" class="button full-time"><?php echo $jtype; ?></button>
											
										
										<div class="candidate-info-bottom flex no-column items-center">
											<h6 class="candidate-location"><span><?php echo $loc; ?></span></h6>
											<h6 class="hourly-rate"><span><?php echo $salary; ?></span>/month</h6>
											
											<a href="#login" class="button" data-toggle="modal" data-target=".bs-modal-sm">Apply Now!</a>
											
										</div> <!-- end .candidate-info-bottom -->
									</div> <!-- end .candidate-info -->
									</div> <!-- end .candidate-info -->
									<br>

									<?php
									}
    } else {
      echo 'No result found';
    }









		?>
									
								
								 <div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent"  id="login-signup-popup" role="dialog" tabindex="-1">
	        <div class="modal-dialog modal-sm login-signup-modal">
	            <div class="modal-content">
	                <div class="popup-tabs">
	                    <ul class="nav nav-tabs" id="myTab">
	                        <li><a href="#login">login</a></li>
	                        <li><a href="#login">&ensp;</a></li>
	                        
	                    </ul>
	                </div> <!-- end .popup-tabs -->
	                <div class="modal-body">
	                    <div class="tab-content" id="myTabContent">
	                        <div class="tab-pane fade active in" id="login">
	                            <form class="login-form" action="applyaction.php" method="POST">
						<input type="hidden" id="modaljobid" name="dbjobid">
									<div class="form-group">
									    <label for="InputEmail1">Your Email *</label>
									    <input type="email" class="form-control" id="InputEmail1" name="dbemail" placeholder="Enter your email">
									</div>

									<div class="form-group">
									    <label for="InputPassword1">Password *</label>
									    <input type="password" class="form-control" id="InputPassword1" name="dbpassword" placeholder="Password">
									</div>

									<div class="checkbox flex space-between">
										
									    <a href="forgotpassword.php">Lost password?</a>
									</div> <!-- end .checkbox -->

									<button type="submit" name="applyaction" class="button" >Login</button>
									
									
									
									

	                            </form> <!-- end .login-form -->
	                        </div> <!-- end login-tab-content -->
							

	                       
	                    </div> <!-- end .mytabcontent -->
	                </div> <!-- end .modal-body -->
	            </div> <!-- end .modal-content -->
	        </div> <!-- end .modal-dialog -->
	    </div> <!-- end .modal -->
								
								<div class="spacer-xs"></div>

								
							</div> <!-- end .candidates-list -->

							

							<div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
								<a href="index.php" class="btn btn-primary"><i class="ion-ios-arrow-left"></i>Prev</a>
								
							</div> <!-- end .jobpress-custom-pager -->

						</div> <!-- end .left-content -->
						<div class="right-sidebar">
							<div class="filter location-filter">
								<h6 class="filter-widget-title">Filter by Event title</h6>
									<input type="text" value="<?php echo $field1;  ?>" disabled data-role="tagsinput" />
							</div> <!-- end .location-filter -->

							<div class="filter skill-filter">
								<h6 class="filter-widget-title">Filter by Category</h6>
									<input type="text" value="<?php echo $field2;  ?>" disabled data-role="tagsinput" />
							</div> <!-- end .skill-filter -->

							

						</div> <!-- end .right-sidebar -->
					</div> <!-- end .page-content -->
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
<script>
$('#modaljobid').val($('#inputid').val());


</script>
	</body>

<!-- this/candidates-listing.php created, Sun, 05 Aug 2018 11:38:36 GMT -->
</html>
<?php
}
?>
