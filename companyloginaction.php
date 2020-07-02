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
			$db_reg=$row['reg'];
			
						
			}
			
			if($email==$db_email&&$enc_password==$db_pass)
			{
				if($db_reg == "Organizer"){
				$_SESSION['seid'] = $db_id;
				$_SESSION['seemail'] = $db_email;
				$_SESSION['sepassword'] = $db_pass;
				header("location:post-job-form_2.php");
			}else{
			?>
			
			<script>alert("Only Organizer can login");</script>
			<script>window.location.href="post-job-form.php"</script>
			<?php
			
		}
		}
			else
		{
			?>
			<script>alert("Authentication failed !!");</script>
			<script>window.location.href="post-job-form.php"</script>
			<?php
		}
			
		
		}
		else
		{
			?>
			<script>alert("user doesn't exist");</script>
			<script>window.location.href="post-job-form.php"</script>
			<?php
		}
	
	}



?>
