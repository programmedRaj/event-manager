<?php
session_start();
include('dbc.php');
if(isset($_POST['applyaction']))
{
	$dbjobid = $_POST['dbjobid'];
	$email=$_POST['dbemail'];
	$password=$_POST['dbpassword'];
	$checkEquery="SELECT * from register where email='$email'";
	$checkEquery_run = mysql_query($checkEquery);
	$numrow = mysql_num_rows($checkEquery_run);
	$enc_password = md5($password);
	$ref = $_SERVER['HTTP_REFERER'];
		if($numrow!=0)
		{
			
			while($row = mysql_fetch_assoc($checkEquery_run))
			{
			$db_id = $row['id'];
			$db_email = $row['email'];
			$db_pass=$row['password'];
			
						
			}
			if($email==$db_email&&$enc_password==$db_pass)
			{
				$_SESSION['seid'] = $db_id;
				$_SESSION['seemail'] = $db_email;
				$_SESSION['sepassword'] = $db_pass;
				//header("location:loggedin.php");
				
				//check job id and empid not exists in applyjob
				$jequery="SELECT * FROM applied WHERE jobid ='$dbjobid' AND emp_id ='$db_id'";
				$jequery_run = mysql_query($jequery);
			if(mysql_num_rows($jequery_run)==1)
				{
	   ?>
				<script>alert("you've already applied for this Event!!");</script>
				<script>window.location.href="<?php echo $ref;?>";</script>
<?php

				}else{
				$ebquery = mysql_query("SELECT * FROM register WHERE id=$db_id");	
		while($row = @mysql_fetch_assoc($ebquery))
		{	
		 		 $ereg = $row['reg'];
		}
					if($ereg == "Participant"){
						//check empid is exists in resume	
					$cequery="SELECT emp_id FROM resume WHERE emp_id='$db_id' ";
						$cequery_run = mysql_query($cequery);
			if(mysql_num_rows($cequery_run)==1)
				{
	   
					//insert into applyjob
					$inquery="INSERT into applied (jobid,emp_id) VALUES ('$dbjobid','$db_id')";
			$inquery_run=mysql_query($inquery);
			
			
			if($inquery_run==1){
				//mail to jobid;
				$postjobinfo = mysql_query("SELECT * FROM postjob WHERE id='$dbjobid'");	
		while($row = @mysql_fetch_assoc($postjobinfo))
		{	
		 		 $dbiemail = $row['email'];
		 		 $dbicompname = $row['compname'];
		}
		$candidateresumeinfo = mysql_query("SELECT * FROM resume where emp_id = '$db_id'");
			while($row = mysql_fetch_assoc($candidateresumeinfo))
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
	
					
				
$subject = "WEBDROID";

$message = "


<html>
<head>
<title>staff appreciation program </title>
</head>
<body>

<h3>Hey $dbicompname , </h3>
details of $fname $lname :

<p>
Short INTRODUCTION:<br>$intro
<br><hr>
current role:$position
</p>



<p>
skills:$skills

</p>

</p>
<br>
contact candidate at $emailid

<p>Thanks & Regards,<br>Team WEBDROID.</p>


</body>
</html>

";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$myfromemail = "info@sammeyinc.com";
$headers .= "From:".$myfromemail;



		@mail($dbiemail,$subject,$message,$headers);
		    
				?>
					<script>alert("Congrats.. You've successfully applied for Event.");</script>
					<script>window.location.href="loggedin.php";</script>
			<?php
			}else{
				?>
					<script>alert("Something went wrong ! Please try again!");</script>
					<script>window.location.href="<?php echo $ref;?>";</script>
				<?php
			}
				
	   
	   
	   
				}else 
				{
					?>
				<script>alert("Please add your details to proceed!!");</script>
				<script>window.location.href="post-resume-form.php";</script>
				<?php
				}
				}else{
					?>
				<script>alert("You can't apply for this event because you are organizer!!");</script>
				<script>window.location.href="<?php echo $ref;?>";</script>
				
				<?php
				}
				}
				
				
				
				

			}else
		{
			
			
			?>
			<script>alert("Authentication failed!!");</script>
			<script>window.location.href="<?php echo $ref;?>";</script>
			<?php
		}
			
		}
		else
		{
			?>
			<script>alert("user doesn't exist");</script>
			<script>window.location.href="<?php echo $ref;?>";</script>
			<?php
		}
	
	}



?>
