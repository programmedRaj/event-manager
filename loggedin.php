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
		$password =$row['password'];
		$reg=$row['reg'];
		 
		}
		
		
		
		

$queryg = mysql_query("SELECT * FROM resume WHERE emp_id=$id");
	$numrow = @mysql_num_rows($queryg);
	
	
	
		while($row = mysql_fetch_assoc($queryg))
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
		 
		

$j="2018-09-22";



$myemail="info@sammeyinc.com";
$message="happy marriage anniversary";
$message1="Happy work anniversary";
$message2="Happy birthday !!";
$lid="adityagosalia18@gmail.com";
$subject="hi";


if ($hdegree == $j)
{
	@mail($seEmail,$subject,$message,"From:".$myemail);
//mail	aniversary
	
}
 if ($language== $j)
{
	@mail($seEmail,"WEBDROID",$message1,"From:".$myemail);
//mail work anniversary 

}
 if($dob== $j)
{
	@mail($seEmail,"WEBDROID",$message2,"From:".$myemail); 
	//maill HBD.
	
}		 
		}


		
		
		
		
		

		?>
		

<!DOCTYPE html>
<html lang="en">
	
<!-- this/candidate-dashboard.php created, Sun, 05 Aug 2018 11:38:53 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>staff appreciation program</title>

		<!-- CSS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

<style>

input:not([type=submit]):not([type=file]):not([type=checkbox]):not([type=radio]), select, textarea {
    width:79%;
	
	height:28px;
}
select.input-sm {
    height: 39px;
    line-height: 30px;
}

.thumbnail {
    padding:0px;
}
.panel {
	position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
	position:absolute;
	top:11px;left:-16px;
	right:100%;
	width:0;
	height:0;
	display:block;
	content:" ";
	border-color:transparent;
	border-style:solid solid outset;
	pointer-events:none;
}
.panel>.panel-heading:after{
	border-width:7px;
	border-right-color:#f7f7f7;
	margin-top:1px;
	margin-left:2px;
}
.panel>.panel-heading:before{
	border-right-color:#ddd;
	border-width:8px;
	
}

#profpicture {
  position: absolute;
  overflow: hidden; 
  width: 48px; 
  height: 48px; 
  border-radius: 50%;  
}

</style>

	</head>
	<body>
	
		<!-- MODAl change pasword -->
	
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="active">Change Password:</h4>
      </div>
      <div class="modal-body">
       <form method="post" action="loggedin.php" >
	   <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="currentpassword" placeholder="old Password">
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="newpassword" placeholder="new Password">
    </div>
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control" name="confirmpassword" placeholder="confirm Password">
    </div>
    <br>
    
  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" >Submit</button>
		</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
	  <?php
	if(isset($_POST['currentpassword'])&&isset($_POST['newpassword'])){
	if(!empty($_POST['currentpassword'])&&!empty($_POST['newpassword'])&&!empty($_POST['confirmpassword'])){
		$currentpassword = $_POST['currentpassword'];
		$newpassword = $_POST['newpassword'];
		$confirmpassword= $_POST['confirmpassword'];
		
		//$confirmpassword = $_POST['cpassword'];
		$newmd5password = md5("$newpassword");
		$md5_cpassword = md5("$currentpassword");
		
		
		if($newpassword== $confirmpassword)
		 {
		if($md5_cpassword == $password)
		{
			$pquery = mysql_query("UPDATE  `register` SET  `password` =  '$newmd5password' WHERE  `id` =$id;");
			$query_run = mysql_query($pquery);
			?>
				<script>alert("Password  changed successfully !!");</script>
			<?php
			
			
		}
	
		else{
			?>
				<script>alert("Password  doesn\' match !!");</script>
			<?php
			
		}
		 }
		else 
		{
			?>
				<script>alert("Both password field must be same!!");</script>
			<?php	
		}	
	}else{
		
		?>
				<script>alert("All fields are required !!");</script>
			<?php
	}}?>
    </div>

  </div>
</div>



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
								<?php 
							   	
							   	if($reg=="Participant")	{						   	?>
									<li><a href="post-resume-form.php">Post Details</a></li>
											<?php }
?>																			
									</li>
									<?php
										if ($reg=="Organizer")	{    ?>
										
											<li><a href="post-job-form.php">Post an Event</a></li>
										<?php } ?>
										
									</li>
                                    <li><a href="about.php">About</a></li>
									
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="account-info-top flex items-center no-column">
							
							<a href="#0" class="profile-button flex space-between items-center no-column no-wrap"><span>Hi! &nbsp <?php echo "$email"; ?></span> <img src="images/rock.png" alt="avatar" class="img-responsive"></a>
						</div> <!-- end .account-info-top -->
					</div> <!-- end .right -->
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->

		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->


		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						<img src="images/rock.png" alt="avatar" class="img-responsive">
						<div class="breadcrumb-info-dashboard">
							<h2 style="color:#fff;">
							<?php
							echo "$company";
							?></h2>
						
						</div> <!-- end .candidate-info -->
					</div> <!-- end .breadcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
			
		</div>
		<!-- end .section -->
		<?php
		if ($confirmed==0){
		?>
<div class="alert alert-danger alert-dismissible fade in" style=height:60px;>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <h4>Activate your id , by clicking on the link that has been sent on your email.</h4>
  </div>
  <?php
		}
  ?>
		<!-- Candidate Dashboard -->
		<div class="section candidate-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="candidate-dashboard-wrapper flex space-between no-wrap">

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">Manage account</li>
								<?php 
							   	
							   	if($reg=="Participant")	{						   	?>
							    <li><a href="myresume.php">My details</a></li>
							    
							    <?php } ?>
							    <li class="active"><a data-toggle="pill" href="#bookmarked-jobs">Search Events</a></li>
							    <?php 
							   	
							   	if($reg=="Participant")	{						   	?>
							    <li class="nav-divider"></li>
							   	<li class="heading">Manage Events</li>
							   	
							   	
								<li><a data-toggle="pill" href="#manage-applications">Manage Applied Events</a></li><?php
							    }?>
							    <li class="nav-divider"></li>
							    <li><a  data-toggle="modal" data-target="#myModal" style="cursor:pointer">Change Password</a></li>
								
								
								
							    <li><a href="logout.php">Sign Out</a></li>
							</ul>
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content candidate-dashboard">

							    <div id="bookmarked-jobs" class="tab-pane fade in active">
							        
							        <div class="bookmarked-jobs-list-wrapper">
									
									<div class="table-responsive" style="padding:20px;">
<table id="example" class="table table-striped table-bordered" > 
  <thead>
  <tr>
  <th>POSTED Events</th> 
  
  </tr>
  </thead> 
  <tbody>
									<?php
$showpostjob = mysql_query("Select * from postjob ");
while($row = mysql_fetch_assoc($showpostjob))
		{
	
		 
		 $JB = $row['id'];
		 $CN = $row['compname'];
		 
		 $PHONE = $row['phonenumber'];
		 
		 $DESC = $row['description'];
		 $JT = $row['jobtitle'];
		 $JTYPE = $row['jobtype'];
		 
		 $JLOC = $row['jlocation'];
		 $SALARY = $row['salary'];
		 $EXP = $row['expirydate'];
		 $EMAIL=$row['email'];
		 
?>
							        
										
										
  <tr>
  <td>
  
  <div class="bookmarked-job-wrapper">
							        		<div class="bookmarked-job flex no-wrap no-column ">
								        		<div class="job-company-icon">
								        			<img src="images/company-logo-big01.jpg" alt="company-icon" class="img-responsive">
								        		</div> <!-- end .job-icon -->
								        		<div class="bookmarked-job-info">
								        			<h4 class="dark flex no-column"><?php echo "$JT"; ?><a href="#0" class="button full-time"><?php echo $JTYPE; ?></a></h4>
								        			<h5><?php echo $CN; ?></h5>
								        			
								        			<div class="bookmarked-job-info-bottom flex space-between items-center no-column no-wrap">
								        				<div class="bookmarked-job-meta flex items-center no-wrap no-column">
									        				
															
								        					<h6 class="candidate-location">Location : &nbsp;<?php echo $JLOC ;?></h6><br><br>
															<h3 class="hourly-rate"><span>&nbsp; &nbsp;  Prizes worth :</span><?php echo " <h3>₹</h3> $SALARY ";?></h3>
															
															


															
								        				</div> <!-- end .bookmarked-job-meta -->
								        				
								        			</div> <!-- end .bookmarked-job-info-bottom -->
								        		</div> <!-- end .bookmarked-job-info -->
							        		</div> <!-- end .bookmarked-job -->
							        	</div> <!-- end .bookmarked-job-wrapper -->

										<div class="bookmarked-job-wrapper">
										
										
<div >
  <label for="example-search-input" class="col-2 col-form-label">Add comment:</label>
  <div class="col-12">
    <form action="loggedin.php" method="post" >
	<input class="form-control" type="search"  name ="comment" placeholder="Type here.." id="example-search-input" >
	<input class="form-control" type="hidden"  name ="jb" placeholder="Type here.." value ="<?php  echo $JB ;?>" id="example-search-input" ><br>
	<input class="form-control" type="hidden"  name ="eid" placeholder="Type here.." value=" <?php  echo $id; ?>" id="example-search-input">
	
	<button class="btn btn-primary" type="submit" name="csubmit">Comment</button>
	</form>
  
 
  
  </div>
</div>



</div>
</div>
<div class="row">
<div class="col-sm-12">&ensp;

</div><!-- /col-sm-12 -->

</div><!-- /row -->
<?php
		
$showcommentquery = "SELECT * FROM comments where job_id = '$JB'";
$showquery_run = mysql_query($showcommentquery);
$shqnumrow = @mysql_num_rows($showquery_run);
	
?>
<div <?php if($shqnumrow >= 3){ ?> style="overflow-y:scroll; height:400px;" <?php } ?>>
<?php
while($row = mysql_fetch_assoc($showquery_run))
{
	$var=$row['comment'];
	$comempid=$row['empid'];
$empname =	"SELECT * FROM register where id = '$comempid'";
$emprun = mysql_query($empname);
while($corow = mysql_fetch_assoc($emprun)){
    $coname = $corow['company'];
}
	
?>

<div class="row" >
<div class="col-sm-1">

<img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png" width="50" height="50">

</div><!-- /col-sm-1 -->


<div class="col-sm-10">
<div class="panel panel-default">
<div class="panel panel-heading" style="padding:10px;">
<strong><?php  echo $coname; ?></strong> 
</div>
<div class="panel-body">
<?php  echo $var ; ?>
</div><!-- /panel-body -->
</div><!-- /panel panel-default -->
</div><!-- /col-sm-5 -->


															
</div><!-- /row -->															

<?php
}
?>

</div>

	</td> 
  
  </tr>
  								
										
									
<?php
}
 
  if(isset($_POST['csubmit']))
  {  
	$jbid=$_POST['jb'];
	$eid=$_POST['eid'];
	$comment=$_POST['comment'];
		
  $comquery="INSERT INTO `comments`(`job_id`, `empid`, `comment`) VALUES ('$jbid' ,'$eid' ,'$comment' )";
  $comquery_run=mysql_query($comquery);
  if($comquery_run==1)
  {
	?>
		<script>alert("comment posted!");</script>
		<script>window.location.href="loggedin.php";</script>
	  <?php
  }	
  
  }
  
  
  
  
  
  
  ?>

	
  </tbody> 
  </table>
			</div>					        	
							        	
						        	</div> <!-- end .bookmarked-jobs-list-wrapper -->
						        	
							    </div> <!-- end #bookmarked-jobs-tab -->

							    <div id="job-alerts" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Job alerts</h3>
							        <div class="job-alerts-list-wrapper">
							        	<ul class="job-alert-table-headings flex items-center no-column list-unstyled">
							        		<li class="company-name-cell"><h6>Company Name</h6></li>
							        		<li class="job-position-cell"><h6>Position</h6></li>
							        		<li class="contract-type-cell"><h6>Contract Type</h6></li>
							        		<li class="job-frequency-cell"><h6>Frequency</h6></li>
							        	</ul> <!-- end .job-alert-table-headings -->
							        	<div class="job-alerts-wrapper">											
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Banana Inc.</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>web designer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Folder cooperation</h4>
														<p><i class="ion-ios-location-outline"></i>Cupertino, CA, USA</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>UI/UX designer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Bookcover publisher</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>Front end developer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Archive inc.</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>Backend developer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Quick Studio</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>Graphic Designer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        	</div> <!-- end .job-alerts-wrapper -->
						        	</div> <!-- end .job-alerts-list-wrapper -->
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #job-alerts-tab -->

							    <div id="manage-applications" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage applications</h3>
							        <div class="job-applications-list-wrapper">
							        	
							        	<!--  Jai mahishmati         -->
										
										<table id="example" class="table table-striped table-bordered" > 
  <thead>
  <tr>
  <th>APPLIED JOBS</th> 
  
  </tr>
  </thead> 
  <tbody>
  
  
  
									<?php
$aquery = "SELECT * from applied where emp_id = '$id' ";
$aquery_run = mysql_query($aquery);
while($row = mysql_fetch_assoc($aquery_run)){
$ajobid = $row['jobid'];
		
		$pjquery = "SELECT * from postjob where id='$ajobid'";
$pjquery_run = mysql_query($pjquery);
while($row = mysql_fetch_assoc($pjquery_run))
		{
		 
		 $CN = $row['compname'];
		
		 $JT = $row['jobtitle'];
		 $JTYPE = $row['jobtype'];
		
		 $SALARY = $row['salary'];
		 $EXP = $row['expirydate'];
		 
		 
?>
							        
										
										
  <tr>
  <td>
  
  <div class="job-application flex items-center no-column no-wrap">
											<div class="application-company-cell application-cell flex items-center no-column no-wrap">
												
												<div class="application-company-text">
													
													<h4 class="dark"><?php echo "$JT"; ?> needed.</h4>
													<p><?php echo "$CN"; ?></p>
												</div> <!-- end .application-company-text -->
											</div> <!-- end .job-application-company-cell -->
											<div class="application-contractor-type-cell application-cell">
												<button type="button" class="button full-time button-xs"><?php echo "$JTYPE"; ?></button>
											</div> <!-- end .application-contractor-type-cell -->
											<div class="application-submission-date-cell application-cell">
												<p><?php echo "$SALARY"; ?></p>
												<p><?php echo "$EXP"; ?></p>
											</div> <!-- end .application-submission-date-cell -->
											
							        	</div> <!-- end .job-application -->



	</td> 
  
  </tr>
  								
										
									
<?php
}
}
?>
	
  </tbody> 
  </table>
										
										
										
										
							        </div> <!-- end .applications-list-wrapper -->
						        								        
							    </div> <!-- end #manage-applications-tab -->

							    
							        	

							        	

							        	

							        

							        </div> <!-- end .notifications-list-wrapper -->
						        							        
							    </div> <!-- end #notifications-tab -->


							  

							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Footer -->
		<div class="section footer transparent" style="background-image: url('images/background03.jpg');">
			<div class="container">
				<div class="top flex space-between items-center">
					<!--img src="images/footer-logo.png" alt="footer-logo" class="img-responsive"-->
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
		
	

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>

 <script>
 $(document).ready(function() {
    $('#example').DataTable();
} );
 
 </script>
	</body>

<!-- this/candidate-dashboard.php created, Sun, 05 Aug 2018 11:38:56 GMT -->
</html>
		
		
		
		
		
		<?php
	}else 
	{
		echo "alert";
	}
}else{
	header("Location:loggedin.php");
}

?>





<!-- Trigger the modal with a button -->


<!-- Modal -->



