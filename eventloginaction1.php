<?php
session_start();
include('dbc.php');
if(isset($_POST['email'])&&isset($_POST['password']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$checkEquery="SELECT * from register where email='$email'";
	$checkEquery_run = mysql_query($checkEquery);
	$numrow = mysql_num_rows($checkEquery_run);
	$enc_password = md5($password);
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
				header("location:task2.php");
			}else
		{
			
			?>
				<script> alert("Authentication failed !");</script>
				<script>window.location.href="loginevent.php";</script>
			<?php
		}
			
		}
		else
		{
			?>
				<script> alert("user doesn't exist !");</script>
				<script>window.location.href="loginevent.php";</script>
			<?php
		}
	
	}



?>
