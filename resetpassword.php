<?php
ob_start();
session_start();
require "dbc.php";
if(isset($_SESSION['seemail'])){
    header("Location:loggedin.php");
    ?>
<?php
}else{
        if(isset($_SESSION['rightemail'])){
    $rightemail = $_SESSION['rightemail'];




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
  
  <h2>Change your password here :</h2>
  <form action="resetpassword.php" method="post"  >
    <p>New Password:</p>
    <input type="password" name="newpassword" placeholder="New password" required>
    <p>Confirm Password:</p>
    <input type="password" name="cnewpassword" placeholder="Confirm password" required>
	
    <input type="submit" name="resetsubmit" value="Submit">
	</form>
		<?php
				if(isset($_POST['resetsubmit'])){
				    $newpassword = $_POST['newpassword'];
				    $cnewpassword = $_POST['cnewpassword'];
				    if($newpassword == $cnewpassword){
				        $dbpassword = md5($newpassword);
				        
				        mysql_query("UPDATE register SET password='$dbpassword' WHERE email ='$rightemail'");
				        //	session_start();
				
					$_SESSION['email']=$rightemail;
				
		//header("location:index.php");
		echo "Password Changed Succesfully";
	//	session_start();

//session_destroy();
		?>
		<script>
		window.location.href="index.php";
		</script><?php
				        
				    }else{
				        echo "Password Should match";
				    }
				    
				}
				?>
	

   
</div>


</body>
</html>
<?php
}else{
    header("Location:index.php");
}
}
?>