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
	   <script>window.location.href="index.php";</script>
	   <?php
	   }
	   else
	   {
			$confirmcode = rand(10000,99999);
			$query="INSERT into register (company,email,password,reg,confirm_code,confirmed) VALUES ('$company','$email','$enc_password','$reg',$confirmcode,0)";
			
			$subject = "Workies.in - $otp is your otp for secure access";

$message = "


<html>
<head>
<title>Workies </title>
</head>
<body>

<h3>Hey $company,</h3>
<p>We are sharing a verification code to change your password of your account . This code is valid for 10 minutes and usable only once.</p>
<p>Once you have verified the code , you'll be prompted to set a new password immediately. This is to ensure that only you have access to your account.</p>
Confirm Your OTP :
<b> YOUR OTP :23245 </b>

<p>Thanks & Regards,<br>Team Workies</p>


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
		
		
			
			
			
			
			$query_run=mysql_query($query);
			if($query_run==1)
		{
		?>
				<script>alert("success ! your account is verified.");</script>
				<script>window.location.href="loggedin.php"</script>
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
}else{
	header("location:index.php");	
}
?>