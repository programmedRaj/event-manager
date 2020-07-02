<?php
ob_start();
session_start();
require "dbc.php";
if(isset($_SESSION['seemail'])){
    header("Location:loggedin.php");
    ?>
<?php
}else{
    ?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="cssraj/style23.css">
  <link rel="stylesheet" href="cssraj/bootstrap.min.css">
  <link rel="stylesheet" href="cssraj/style.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <style>
  body {
  margin: 0;
  padding: 0;
  background: url("ucoe2.jpg");
  background-size: cover;
  font-family: sans-serif;
}

.loginBox {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 350px;
  height: 420px;
  padding: 70px 40px;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.5);
}

.user {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  overflow: hidden;
  position: absolute;
  top: calc(-100px/2);
  left: calc(50% - 50px);
}

h2 {
  margin: 0;
  padding: 0 0 26px;
  color: #ff8c00;
  text-align: center;
}

.loginBox p {
  margin: 0;
  padding: 0;
  font-weight: bold;
  color: #fff;
}

.loginBox input {
  width: 100%;
  margin-bottom: 20px;
}

.loginBox input[type="text"],
.loginBox input[type="password"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

::placeholder
{
  color: rgba(255, 255, 255, 0.5);
}

.loginBox input[type="submit"] {
  border: none;
  outline: none;
  height: 40px;
  color: #eee;
  font-size: 16px;
  background-color: #FF8C00;
  cursor: pointer;
  border-radius: 20px;
  margin: 12px 0 18px;
}

.loginBox input[type="submit"]:hover {
  background-color: #ff9719;
  color: #fff;
}

.loginBox a {
  color: #fff;
  font-size: 14px;
  font-weight: bold;
  text-decoration: none;
}
  </style>
<script>
function doNothing(e) {
  e.preventDefault();
}
</script>
</head>

<body>

<div class="loginBox">
  
  <h2>WEBDROID</h2>
  <form action="forgotpassword.php" method="post" ><br><br>
  <p>Enter your email address <span>to get OTP to reset password </span> :</p><br>  <br>
    <input type="email" name="forgotemail" placeholder="New password" required>
    
    <input type="submit" name="forgotsubmit" value="Submit">
	
	</form>
   
				<?php
				if(isset($_POST['forgotsubmit'])){
					
				$email = mysql_real_escape_string(strtolower($_POST['forgotemail']));
				
if($email)
{
	$query = mysql_query("SELECT email FROM register WHERE email='$email'");
	$numrow = mysql_num_rows($query);
		$fquery = mysql_query("SELECT * FROM register WHERE email='$email'");
	 	while($row = mysql_fetch_assoc($fquery))
		{
		 $id = $row['id'];
		 $db_confirmed = $row['confirmed'];
		 $mail = $row['email'];
		 $compname = $row['company'];
		 
		 
		}
	if($numrow==1){
	    
	    

$otp = rand(10000,99999);
    if(mysql_query("UPDATE `register` SET `forgototp`='$otp' WHERE `email`='$email'")){
		
		
			
$subject = "WEBDROID - $otp is your otp for secure access";

$message = "


<html>
<head>
<title>WEDROID</title>
</head>
<body>

<h3>Hey $compname,</h3>
<p>We are sharing a verification code to change your password of your account . This code is valid for 10 minutes and usable only once.</p>
<p>Once you have verified the code , you'll be prompted to set a new password immediately. This is to ensure that only you have access to your account.</p>
Confirm Your OTP :
<b> YOUR OTP : $otp </b>

<p>Thanks & Regards,<br>Team Webdroid</p>


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
		     $query2 = mysql_query("SELECT * FROM register WHERE email = '$email'");
     $numrow = @mysql_num_rows($query2);
     while($row = mysql_fetch_assoc($query2))
		{
			
		 
		 $db_email = $row['email'];
		 
		 $db_otp = $row['forgototp'];
		}
$_SESSION['forgototp']=$db_otp;

		   $_SESSION['forgotemail']=$db_email;
		   //echo "Otp sended";
header("location:otpverify22.php"); 

			
		}
		  
}else{
	?>
	<script>alert("User does\'t exist.");</script>
				<?php  }
				}
				}
?>
	
				
</div>


</body>
</html>

<?php
}
?>